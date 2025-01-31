import json
from telegram import InlineKeyboardButton, InlineKeyboardMarkup, Update, Bot
from telegram.ext import CallbackContext, CommandHandler, MessageHandler, Filters, CallbackQueryHandler, Updater



# قائمة المستخدمين الذين لديهم صلاحيات الإدارة (المالكين)
OWNER_ID = [6956219256,5058633862]  # استبدل هذا بـ ID مالك البوت الخاص بك
token= "7760053949:AAFOPSY1eD4GjelBo2D_rIa7nCmOn9n6OYM"
data = {"fraudsters": [], "usernames": []}

# تحميل البيانات من ملف users.json
def load_users():
    try:
        with open("users.json", "r") as file:
            return json.load(file)
    except FileNotFoundError:
        return []  # إذا لم يوجد الملف، نقوم بإنشاء قائمة فارغة

# حفظ البيانات إلى ملف users.json
def save_users(users):
    with open("users.json", "w", encoding="utf-8") as file:
        json.dump(users, file, ensure_ascii=False, indent=4)

def load_data():
    global data
    try:
        with open("data.json", "r") as file:
            data = json.load(file)
    except FileNotFoundError:
        save_data(data)

def save_data(data):
    with open("data.json", "w", encoding="utf-8") as file:
        json.dump(data, file, ensure_ascii=False, indent=4)

def start(update: Update, context: CallbackContext):
    context.user_data.clear()
    users = load_users()
    user_id = update.message.from_user.id
    user_name = update.message.from_user.full_name

    # إضافة المستخدم إلى الملف إذا لم يكن موجودًا
    if not any(user['id'] == user_id for user in users):
        users.append({"id": user_id, "name": user_name})
        save_users(users)

    keyboard = [
        [InlineKeyboardButton("🔍 البحث عن تاجر أو نصاب", callback_data="search_fraudsters")],
        [InlineKeyboardButton("🔍 البحث عن معرف (آيدي ببجي)", callback_data="search_usernames")]
    ]

    if user_id in OWNER_ID:
        keyboard += [
            [InlineKeyboardButton("⚙️ إدارة التجار/النصابين", callback_data="admin_fraudsters")],
            [InlineKeyboardButton("⚙️ إدارة المعرفات", callback_data="admin_usernames")],
            [InlineKeyboardButton("📢 إذاعة للجميع", callback_data="broadcast_message")]
        ]

    reply_markup = InlineKeyboardMarkup(keyboard)
    update.message.reply_text(
        "مرحبًا بك في بوت الكشف! اختر ما تريد البحث عنه:",
        reply_markup=reply_markup
    )

def admin_menu(update: Update, context: CallbackContext):
    keyboard = [
        [InlineKeyboardButton("➕ إضافة تاجر/نصاب", callback_data="add_fraudster")],
        [InlineKeyboardButton("📋 عرض قائمة التجار/النصابين", callback_data="list_fraudsters")],
        [InlineKeyboardButton("❌ حذف تاجر/نصاب", callback_data="delete_fraudster")],
    ]
    reply_markup = InlineKeyboardMarkup(keyboard)
    update.callback_query.edit_message_text("⚙️ إدارة التجار/النصابين: اختر العملية التي تريد تنفيذها:", reply_markup=reply_markup)

def admin_usernames_menu(update: Update, context: CallbackContext):
    keyboard = [
        [InlineKeyboardButton("➕ إضافة معرف", callback_data="add_username")],
        [InlineKeyboardButton("📋 عرض قائمة المعرفات", callback_data="list_usernames")],
        [InlineKeyboardButton("❌ حذف معرف", callback_data="delete_username")],
    ]
    reply_markup = InlineKeyboardMarkup(keyboard)
    update.callback_query.edit_message_text("⚙️ إدارة المعرفات: اختر العملية التي تريد تنفيذها:", reply_markup=reply_markup)

def search_fraudsters(update: Update, context: CallbackContext):
    update.callback_query.answer()
    update.callback_query.edit_message_text("🔍 أرسل أي معلومة تمتلكها للبحث عن تاجر أو نصاب:")
    context.user_data["action"] = "search_fraudster"

def search_usernames(update: Update, context: CallbackContext):
    update.callback_query.answer()
    update.callback_query.edit_message_text("🔍 أرسل (آيدي ببجي) للبحث عنه:")
    context.user_data["action"] = "search_username"

def add_fraudster_steps(update: Update, context: CallbackContext):
    step = context.user_data.get("add_step", 0)

    if step == 0:
        context.user_data["new_fraudster"] = {"name": update.message.text.strip()}
        update.message.reply_text("📞 أدخل رقم هاتف التاجر/النصاب:")
        context.user_data["add_step"] = 1
    elif step == 1:
        context.user_data["new_fraudster"]["phone"] = update.message.text.strip()
        update.message.reply_text("💳 أدخل رقم بريدي موب الخاص بالتاجر/النصاب:")
        context.user_data["add_step"] = 2
    elif step == 2:
        context.user_data["new_fraudster"]["bardi_mob"] = update.message.text.strip()
        update.message.reply_text("🔗 أدخل روابط مواقع التواصل الخاصة بالتاجر/النصاب:")
        context.user_data["add_step"] = 3
    elif step == 3:
        context.user_data["new_fraudster"]["social_links"] = update.message.text.strip()
        update.message.reply_text("📝 أدخل ملاحظة عن التاجر/النصاب:")
        context.user_data["add_step"] = 4
    elif step == 4:
        context.user_data["new_fraudster"]["note"] = update.message.text.strip()
        data["fraudsters"].append(context.user_data["new_fraudster"])
        save_data(data)
        update.message.reply_text("✅ تم إضافة التاجر/النصاب بنجاح!")
        context.user_data["action"] = None

def add_username(update: Update, context: CallbackContext):
    update.callback_query.answer()
    update.callback_query.edit_message_text("🔗 أرسل المعرف الذي تريد إضافته:")
    context.user_data["action"] = "add_username"

def list_fraudsters(update: Update, context: CallbackContext):
    update.callback_query.answer()
    if not data["fraudsters"]:
        update.callback_query.edit_message_text("📋 لا توجد قائمة بالتجار/النصابين.")
    else:
        text = "\n".join([f"{i+1}. {f['name']}" for i, f in enumerate(data["fraudsters"])])
        update.callback_query.edit_message_text(f"📋 قائمة التجار/النصابين:\n\n{text}")

def list_usernames(update: Update, context: CallbackContext):
    update.callback_query.answer()
    if not data["usernames"]:
        update.callback_query.edit_message_text("📋 لا توجد قائمة بالمعرفات.")
    else:
        text = "\n".join([f"{i+1}. {u}" for i, u in enumerate(data["usernames"])])
        update.callback_query.edit_message_text(f"📋 قائمة المعرفات:\n\n{text}")

def broadcast_message(update: Update, context: CallbackContext):
    update.callback_query.answer()
    update.callback_query.edit_message_text("📢 أرسل الرسالة التي تريد إذاعتها لجميع المستخدمين:")
    context.user_data["action"] = "broadcast_message"

def handle_broadcast_message(update: Update, context: CallbackContext):
    message = update.message.text.strip()
    users = load_users()

    sent_count, failed_count = 0, 0
    for user in users:
        try:
            context.bot.send_message(chat_id=user["id"], text=message)
            sent_count += 1
        except Exception as e:
            failed_count += 1
            print(f"خطأ مع {user['id']}: {e}")

    update.message.reply_text(f"✅ تم الإرسال إلى {sent_count} مستخدم.")
    if failed_count > 0:
        update.message.reply_text(f"❌ فشل الإرسال إلى {failed_count} مستخدم.")
    context.user_data["action"] = None

def handle_message(update: Update, context: CallbackContext):
    users = load_users()
    user_id = update.message.from_user.id
    user_name = update.message.from_user.full_name

    if not any(user['id'] == user_id for user in users):
        users.append({"id": user_id, "name": user_name})
        save_users(users)

    action = context.user_data.get("action")

    if action == "broadcast_message":
        handle_broadcast_message(update, context)

    elif action == "add_fraudster":
        add_fraudster_steps(update, context)

    elif action == "search_fraudster":
        query = update.message.text.strip()
        results = [
            f for f in data["fraudsters"]
            if any(query.lower() in str(value).lower() for value in f.values())
        ]
        if results:
            for f in results:
                update.message.reply_text(
                    f"🪪 الاسم: {f['name']}\n\n📞 الهاتف: {f['phone']}\n\n💳 بريدي موب: {f['bardi_mob']}\n\n🔗 الروابط:\n\n {f['social_links']}\n\n📝 ملاحظة: {f['note']}"
                )
        else:
            update.message.reply_text("❌ لم يتم العثور على أي محتال بهذه المعلومات.")

    elif action == "add_username":
        username = update.message.text.strip()
        if username in data["usernames"]:
            update.message.reply_text("❌ هذا المعرف موجود مسبقًا.")
        else:
            data["usernames"].append(username)
            save_data(data)
            update.message.reply_text(f"✅ تم إضافة المعرف: {username}")
        context.user_data["action"] = None

    elif action == "search_username":
        username = update.message.text.strip()
        if username in data["usernames"]:
            update.message.reply_text(f"❌ المعرف {username} تم التبليغ عليه.")
        else:
            update.message.reply_text(f"✅ المعرف {username} آمن حاليًا.")

def delete_fraudster(update: Update, context: CallbackContext):
    if not data["fraudsters"]:
        update.callback_query.edit_message_text("📋 لا توجد قائمة بالتجار/النصابين.")
    else:
        keyboard = [
            [InlineKeyboardButton(f"❌ {f['name']}", callback_data=f"confirm_delete_fraudster_{i}")]
            for i, f in enumerate(data["fraudsters"])
        ]
        keyboard.append([InlineKeyboardButton("🔙 رجوع", callback_data="admin_fraudsters")])
        reply_markup = InlineKeyboardMarkup(keyboard)
        update.callback_query.edit_message_text("❌ اختر التاجر/النصاب الذي تريد حذفه:", reply_markup=reply_markup)

def confirm_delete_fraudster(update: Update, context: CallbackContext):
    query = update.callback_query
    fraudster_index = int(query.data.split("_")[-1])
    fraudster = data["fraudsters"][fraudster_index]
    keyboard = [
        [InlineKeyboardButton("✅ نعم", callback_data=f"delete_fraudster_{fraudster_index}")],
        [InlineKeyboardButton("❌ إلغاء", callback_data="admin_fraudsters")]
    ]
    reply_markup = InlineKeyboardMarkup(keyboard)
    query.edit_message_text(
        f"❓ هل أنت متأكد من حذف التاجر/النصاب التالي؟\n\n📛 الاسم: {fraudster['name']}",
        reply_markup=reply_markup
    )

def delete_fraudster_confirmed(update: Update, context: CallbackContext):
    query = update.callback_query
    fraudster_index = int(query.data.split("_")[-1])
    deleted_fraudster = data["fraudsters"].pop(fraudster_index)
    save_data(data)
    query.edit_message_text(f"✅ تم حذف التاجر/المحتال: {deleted_fraudster['name']} بنجاح.")

def delete_username(update: Update, context: CallbackContext):
    if not data["usernames"]:
        update.callback_query.edit_message_text("📋 لا توجد قائمة بالمعرفات.")
    else:
        keyboard = [
            [InlineKeyboardButton(f"❌ {username}", callback_data=f"confirm_delete_username_{i}")]
            for i, username in enumerate(data["usernames"])
        ]
        keyboard.append([InlineKeyboardButton("🔙 رجوع", callback_data="admin_usernames")])
        reply_markup = InlineKeyboardMarkup(keyboard)
        update.callback_query.edit_message_text("❌ اختر المعرف الذي تريد حذفه:", reply_markup=reply_markup)

def confirm_delete_username(update: Update, context: CallbackContext):
    query = update.callback_query
    username_index = int(query.data.split("_")[-1])
    username = data["usernames"][username_index]
    keyboard = [
        [InlineKeyboardButton("✅ نعم", callback_data=f"delete_username_{username_index}")],
        [InlineKeyboardButton("❌ إلغاء", callback_data="admin_usernames")]
    ]
    reply_markup = InlineKeyboardMarkup(keyboard)
    query.edit_message_text(
        f"❓ هل أنت متأكد من حذف المعرف التالي؟\n\n🔗 المعرف: {username}",
        reply_markup=reply_markup
    )

def delete_username_confirmed(update: Update, context: CallbackContext):
    query = update.callback_query
    username_index = int(query.data.split("_")[-1])
    deleted_username = data["usernames"].pop(username_index)
    save_data(data)
    query.edit_message_text(f"✅ تم حذف المعرف: {deleted_username} بنجاح.")

def main():
    load_data()
    updater = Updater(token, use_context=True)
    dp = updater.dispatcher

    dp.add_handler(CommandHandler("start", start))
    dp.add_handler(CallbackQueryHandler(button_handler))
    dp.add_handler(MessageHandler(Filters.text & ~Filters.command, handle_message))

    WEBHOOK_URL = "https://telegrambotuc.onrender.com/webhook"  # ضع رابط Render هنا

    bot = Bot(token)
    bot.set_webhook(WEBHOOK_URL)

print("Webhook has been set successfully!")



def button_handler(update: Update, context: CallbackContext):
    query = update.callback_query
    query.answer()

    if query.data == "search_fraudsters":
        context.user_data["action"] = "search_fraudster"
        query.edit_message_text("🔍 أرسل النص الذي تريد البحث عنه.")
    elif query.data == "search_usernames":
        context.user_data["action"] = "search_username"
        query.edit_message_text("🔍 أرسل اسم المستخدم الذي تريد البحث عنه.")
    elif query.data == "admin_fraudsters":
        admin_menu(update, context)
    elif query.data == "admin_usernames":
        admin_usernames_menu(update, context)
    elif query.data == "add_fraudster":
        context.user_data["action"] = "add_fraudster"
        context.user_data["add_step"] = 0
        query.edit_message_text("📛 أدخل اسم التاجر/النصاب:")
    elif query.data == "add_username":
        context.user_data["action"] = "add_username"
        query.edit_message_text("🔍 أرسل اسم المستخدم الذي تريد إضافته.")
    elif query.data == "list_fraudsters":
        list_fraudsters(update, context)
    elif query.data == "list_usernames":
        list_usernames(update, context)
    elif query.data == "delete_fraudster":
        delete_fraudster(update, context)
    elif query.data.startswith("confirm_delete_fraudster"):
        confirm_delete_fraudster(update, context)
    elif query.data.startswith("delete_fraudster_"):
        delete_fraudster_confirmed(update, context)
    elif query.data == "delete_username":
        delete_username(update, context)
    elif query.data.startswith("confirm_delete_username"):
        confirm_delete_username(update, context)
    elif query.data.startswith("delete_username_"):
        delete_username_confirmed(update, context)
    elif query.data == "broadcast_message":
        context.user_data["action"] = "broadcast_message"
        query.edit_message_text("✉️ أرسل الرسالة التي تريد إذاعتها.")

if __name__ == "__main__":
    main()
               
