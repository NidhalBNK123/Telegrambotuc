import os
import telebot
from flask import Flask, request

# جلب التوكن من متغيرات البيئة (يجب تعيينه في Render)
TOKEN = "7760053949:AAFOPSY1eD4GjelBo2D_rIa7nCmOn9n6OYM"
bot = telebot.TeleBot(TOKEN)

# إنشاء تطبيق Flask لاستضافة Webhook
app = Flask(__name__)

@app.route('/')
def home():
    return "بوت تيليغرام يعمل بنجاح!"

# استقبال التحديثات عبر Webhook
@app.route('/webhook', methods=['POST'])
def webhook():
    json_update = request.get_json()
    bot.process_new_updates([telebot.types.Update.de_json(json_update)])
    return "OK", 200

# أمر /start للرد على المستخدم
@bot.message_handler(commands=['start'])
def send_welcome(message):
    bot.reply_to(message, "مرحبا! أنا بوت تيليغرام أعمل على Render.")

# أمر /help لإعطاء التعليمات
@bot.message_handler(commands=['help'])
def send_help(message):
    bot.reply_to(message, "أوامر البوت المتاحة:\n/start - بدء البوت\n/help - المساعدة")

# تشغيل Webhook إذا كنت تستخدمه
if __name__ == "__main__":
    WEBHOOK_URL = "https://telegrambotuc.onrender.com/webhook"  # ضع رابط Render الخاص بك هنا
    bot.remove_webhook()
    bot.set_webhook(url=WEBHOOK_URL)
    
    # تشغيل Flask على المنفذ 5000
    app.run(host="0.0.0.0", port=5000)
