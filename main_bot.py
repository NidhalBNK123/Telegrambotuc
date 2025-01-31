from telegram import Update, InlineKeyboardButton, InlineKeyboardMarkup, ParseMode
from telegram.ext import Updater, CommandHandler, CallbackQueryHandler, MessageHandler, Filters, CallbackContext
import json
# تحميل بيانات التكوين من ملف JSON
def load_tokens():
    try:
        with open('bots.json', 'r') as file:
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
        f"👋 <b>مرحباً بك {user.first_name}</b> في بوت إدارة البوتات الفرعية\n\n"
        "هذا البوت يتيح لك <b>إضافة بوتات فرعية</b> وإدارتها، بالإضافة إلى <b>عرض معلوماتها</b> و<b>حذفها</b>."
    )
    keyboard = [
        [InlineKeyboardButton("إضافة بوت فرعي", callback_data='add_sub_bot')],
        [InlineKeyboardButton("عرض المعلومات", callback_data='view_info')],
        [InlineKeyboardButton("حذف بوت فرعي", callback_data='delete_sub_bot')]
    ]
    reply_markup = InlineKeyboardMarkup(keyboard)
    if update.message:
        update.message.reply_text(welcome_text, reply_markup=reply_markup, parse_mode=ParseMode.HTML)
    else:
        update.callback_query.edit_message_text(welcome_text, reply_markup=reply_markup, parse_mode=ParseMode.HTML)

def add_sub_bot_callback(update: Update, context: CallbackContext) -> None:
    query = update.callback_query
    query.answer()
    query.edit_message_text(text="من فضلك <b>أرسل توكن البوت الفرعي</b>.", parse_mode=ParseMode.HTML)
    context.user_data['waiting_for'] = 'token'

def handle_message(update: Update, context: CallbackContext) -> None:
    if update.message:
        if 'waiting_for' in context.user_data:
            waiting_for = context.user_data['waiting_for']
            
            if waiting_for == 'token':
                token = update.message.text
                if not any(bot['token'] == token for bot in TOKENS):
                    context.user_data['current_token'] = token
                    update.message.reply_text("<b>تم تسجيل التوكن.</b> الآن أرسل <b>اسم القناة</b> (بـ @username).", parse_mode=ParseMode.HTML)
                    context.user_data['waiting_for'] = 'channel_username'
                else:
                    update.message.reply_text(f"التوكن <b>{token}</b> موجود بالفعل.", parse_mode=ParseMode.HTML)
                    context.user_data['waiting_for'] = None
            
            elif waiting_for == 'channel_username':
                channel_username = update.message.text
                if context.user_data.get('current_token'):
                    context.user_data['current_channel'] = channel_username
                    update.message.reply_text("تم تسجيل <b>اسم القناة.</b> الآن أرسل <b>اسم الزبون</b>.", parse_mode=ParseMode.HTML)
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
                    update.message.reply_text(
                        f"<b>تمت إضافة البوت بنجاح:</b>\n"
                        f"<b>توكن:</b> {new_bot['token']}\n"
                        f"<b>قناة:</b> {new_bot['channel']}\n"
                        f"<b>عميل:</b> {customer_name}",
                        parse_mode=ParseMode.HTML
                    )
                    context.user_data['waiting_for'] = None
                    context.user_data['current_token'] = None
                    context.user_data['current_channel'] = None
                else:
                    update.message.reply_text("لم يتم تسجيل التوكن أو القناة بشكل صحيح.", parse_mode=ParseMode.HTML)
            
            elif waiting_for == 'delete':
                try:
                    index = int(update.message.text) - 1
                    if 0 <= index < len(TOKENS):
                        deleted_bot = TOKENS.pop(index)
                        save_tokens(TOKENS)
                        update.message.reply_text(f"<b>تم حذف البوت بنجاح:</b>\nتوكن: {deleted_bot['token']}", parse_mode=ParseMode.HTML)
                        context.user_data['waiting_for'] = None
                    else:
                        update.message.reply_text("رقم غير صالح. حاول مرة أخرى.", parse_mode=ParseMode.HTML)
                except ValueError:
                    update.message.reply_text("يرجى إدخال رقم صالح.", parse_mode=ParseMode.HTML)
            else:
                update.message.reply_text("لا أستطيع معالجة رسالتك في الوقت الحالي.", parse_mode=ParseMode.HTML)
    else:
        update.message.reply_text("لم أتمكن من معالجة الرسالة.", parse_mode=ParseMode.HTML)

def view_info_callback(update: Update, context: CallbackContext) -> None:
    query = update.callback_query
    query.answer()
    
    if TOKENS:
        response = "<b>معلومات البوتات الفرعية:</b>\n\n"
        for i, bot in enumerate(TOKENS, start=1):
            response += f"<b>{i}- التوكن :</b> {bot['token']}\n<b>القناة :</b> {bot['channel']}\n<b>العميل :</b> {bot['name']}\n\n"
        query.edit_message_text(response, parse_mode=ParseMode.HTML)
    else:
        query.edit_message_text("لا توجد معلومات حالياً.", parse_mode=ParseMode.HTML)

def delete_sub_bot_callback(update: Update, context: CallbackContext) -> None:
    query = update.callback_query
    query.answer()
    
    if TOKENS:
        response = "اختر <b>البوت الذي تريد حذفه</b>:\n\n"
        for i, bot in enumerate(TOKENS, start=1):
            response += f"<b>{i}- توكن:</b> {bot['token']}\n<b>قناة:</b> {bot['channel']}\n<b>عميل:</b> {bot['name']}\n\n"
        response += "\n<b>أرسل الرقم الذي تريد حذفه.</b>"
        context.user_data['waiting_for'] = 'delete'
        query.edit_message_text(response, parse_mode=ParseMode.HTML)
    else:
        query.edit_message_text("لا توجد بوتات فرعية حالياً.", parse_mode=ParseMode.HTML)

def button(update: Update, context: CallbackContext) -> None:
    query = update.callback_query
    data = query.data
    
    if data == 'add_sub_bot':
        add_sub_bot_callback(update, context)
    elif data == 'view_info':
        view_info_callback(update, context)
    elif data == 'delete_sub_bot':
        delete_sub_bot_callback(update, context)


def main() -> None:
    updater = Updater("7125482530:AAEzCo6WcF17bGn0xrg503NOGreQ912agwg")
    
    updater.dispatcher.add_handler(CommandHandler('start', start))
    updater.dispatcher.add_handler(MessageHandler(Filters.text & ~Filters.command, handle_message))
    updater.dispatcher.add_handler(CallbackQueryHandler(button))

    # بدء البوت
    WEBHOOK_URL = "https://telegrambotuc.onrender.com/webhook"  # ضع رابط Render هنا

    bot = Bot(TOKENS)
    bot.set_webhook(WEBHOOK_URL)

print("Webhook has been set successfully!")


if __name__ == '__main__':
    main()
