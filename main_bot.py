import json
from telegram import Update, InlineKeyboardButton, InlineKeyboardMarkup, Bot
from telegram.ext import CommandHandler, CallbackQueryHandler, MessageHandler, Filters, CallbackContext, Dispatcher
from flask import Flask, request
import threading

app = Flask(__name__)

# تحميل بيانات التكوين من ملف JSON
def load_tokens():
    try:
        with open('config.json', 'r') as file:
            return json.load(file).get('bots', [])
    except FileNotFoundError:
        return []
    except json.JSONDecodeError:
        return []

# حفظ بيانات التكوين إلى ملف JSON
def save_tokens(tokens):
    with open('bots.json', 'w') as file:
        json.dump({'bots': tokens}, file, indent=4)

TOKENS = load_tokens()

def start(update: Update, context: CallbackContext) -> None:
    user = update.message.from_user if update.message else update.callback_query.from_user
    welcome_text = (
        f"👋 مرحبا بك {user.first_name} في بوت إدارة البوتات الفرعية\n\n"
        "هذا البوت يتيح لك إضافة بوتات فرعية وإدارتها، بالإضافة إلى عرض معلوماتها وحذفها."
    )
    keyboard = [
        [InlineKeyboardButton("إضافة بوت فرعي", callback_data='add_sub_bot')],
        [InlineKeyboardButton("عرض المعلومات", callback_data='view_info')],
        [InlineKeyboardButton("حذف بوت فرعي", callback_data='delete_sub_bot')]
    ]
    reply_markup = InlineKeyboardMarkup(keyboard)
    if update.message:
        update.message.reply_text(welcome_text, reply_markup=reply_markup)
    else:
        update.callback_query.edit_message_text(welcome_text, reply_markup=reply_markup)

def add_sub_bot_callback(update: Update, context: CallbackContext) -> None:
    query = update.callback_query
    query.answer()
    query.edit_message_text(text="من فضلك أرسل توكن البوت الفرعي.")
    context.user_data['waiting_for'] = 'token'

def handle_message(update: Update, context: CallbackContext) -> None:
    if update.message:
        if 'waiting_for' in context.user_data:
            waiting_for = context.user_data['waiting_for']
            
            if waiting_for == 'token':
                token = update.message.text
                if not any(bot['token'] == token for bot in TOKENS):
                    context.user_data['current_token'] = token
                    update.message.reply_text("تم تسجيل التوكن. الآن أرسل اسم القناة (بـ @username).")
                    context.user_data['waiting_for'] = 'channel_username'
                else:
                    update.message.reply_text(f"التوكن {token} موجود بالفعل.")
                    context.user_data['waiting_for'] = None
            
            elif waiting_for == 'channel_username':
                channel_username = update.message.text
                if context.user_data.get('current_token'):
                    context.user_data['current_channel'] = channel_username
                    update.message.reply_text("تم تسجيل اسم القناة. الآن أرسل اسم الزبون.")
                    context.user_data['waiting_for'] = 'customer_name'
            
            elif waiting_for == 'customer_name':
                customer_name = update.message.text
                if context.user_data.get('current_token') and context.user_data.get('current_channel'):
                    new_bot = {
                        'token': context.user_data['current_token'],
                        'channel': context.user_data['current_channel'],
                        'name': customer_name
                    }
                    TOKENS.append(new_bot)
                    save_tokens(TOKENS)
                    setup_main_webhook(new_bot['token'])  # تعيين ويب هوك للبوت الجديد
                    update.message.reply_text(f"تمت إضافة البوت بنجاح:\nتوكن: {new_bot['token']}\nقناة: {new_bot['channel']}\nعميل: {customer_name}")
                    context.user_data['waiting_for'] = None
                    context.user_data['current_token'] = None
                    context.user_data['current_channel'] = None
                else:
                    update.message.reply_text("لم يتم تسجيل التوكن أو القناة بشكل صحيح.")
            
            elif waiting_for == 'delete':
                try:
                    index = int(update.message.text) - 1
                    if 0 <= index < len(TOKENS):
                        deleted_bot = TOKENS.pop(index)
                        save_tokens(TOKENS)
                        update.message.reply_text(f"تم حذف البوت بنجاح:\nتوكن: {deleted_bot['token']}")
                        context.user_data['waiting_for'] = None
                    else:
                        update.message.reply_text("رقم غير صالح. حاول مرة أخرى.")
                except ValueError:
                    update.message.reply_text("يرجى إدخال رقم صالح.")
            else:
                update.message.reply_text("لا أستطيع معالجة رسالتك في الوقت الحالي.")
    else:
        update.message.reply_text("لم أتمكن من معالجة الرسالة.")

def view_info_callback(update: Update, context: CallbackContext) -> None:
    query = update.callback_query
    query.answer()
    
    if TOKENS:
        response = "معلومات البوتات الفرعية:\n\n"
        for i, bot in enumerate(TOKENS, start=1):
            response += f"{i}- توكن: {bot['token']}\nقناة: {bot['channel']}\nعميل: {bot['name']}\n\n"
        query.edit_message_text(response)
    else:
        query.edit_message_text("لا توجد معلومات حالياً.")

def delete_sub_bot_callback(update: Update, context: CallbackContext) -> None:
    query = update.callback_query
    query.answer()
    
    if TOKENS:
        response = "اختر البوت الذي تريد حذفه:\n\n"
        for i, bot in enumerate(TOKENS, start=1):
            response += f"{i}- توكن: {bot['token']}\nقناة: {bot['channel']}\nعميل: {bot['name']}\n\n"
        response += "\nأرسل الرقم الذي تريد حذفه."
        context.user_data['waiting_for'] = 'delete'
        query.edit_message_text(response)
    else:
        query.edit_message_text("لا توجد بوتات فرعية حالياً.")

def button(update: Update, context: CallbackContext) -> None:
    query = update.callback_query
    data = query.data
    
    if data == 'add_sub_bot':
        add_sub_bot_callback(update, context)
    elif data == 'view_info':
        view_info_callback(update, context)
    elif data == 'delete_sub_bot':
        delete_sub_bot_callback(update, context)

# إضافة ويب هوك للبوت الرئيسي
def setup_main_webhook(token: str):
    bot = Bot(token)
    webhook_url = f"https://c5a56c19-7187-434e-b1c1-1e1509e8e54e-00-28trj3o3dlgxr.kirk.replit.dev/{token}/webhook"
    bot.set_webhook(webhook_url)

def process_update(update_json, token):
    bot = Bot(token)
    dp = Dispatcher(bot, None, workers=0)
    
    dp.add_handler(CommandHandler('start', start))
    dp.add_handler(MessageHandler(Filters.text & ~Filters.command, handle_message))
    dp.add_handler(CallbackQueryHandler(button))
    
    update = Update.de_json(update_json, bot)
    dp.process_update(update)

@app.route('/<token>/webhook', methods=['POST'])
def webhook(token):
    if token in [bot['token'] for bot in TOKENS] or token == "7760053949:AAFOPSY1eD4GjelBo2D_rIa7nCmOn9n6OYM":  # استبدل "main_bot_token" بالتوكن الرئيسي
        update_json = request.get_json(force=True)
        threading.Thread(target=process_update, args=(update_json, token)).start()
        return 'OK'
    else:
        return 'Invalid token', 403

def setup_webhooks():
    # إعداد ويب هوك للبوت الرئيسي
    setup_main_webhook("7125482530:AAEzCo6WcF17bGn0xrg503NOGreQ912agwg")  # استبدل "main_bot_token" بالتوكن الرئيسي
    
    # إعداد ويب هوك للبوتات الفرعية
    for bot in TOKENS:
        setup_main_webhook(bot['token'])

@app.route('/')
def index():
    return 'Bot is running.'

if __name__ == '__main__':
    setup_webhooks()
    app.run(port=8080, host='0.0.0.0')
