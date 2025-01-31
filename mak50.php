<?php
/*تم تطوير الملف بواسطه ناميرو @s_p_p1
- القناه @Bots_5
- اقسم بالله ما اسامح اي حد يغير الحقوق ليوم الدين */
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}
$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;$type = $message->chat->type;
$message_id = $message->message_id;
$name = $message->from->first_name.' '.$message->from->last_name;
$user = strtolower($message->from->username);
$t =$message->chat->title; 
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = strtolower($up->from->username); 
$name = $up->from->first_name.' '.$up->from->last_name;
$message_id = $up->message->message_id;
$mes_id = $update->callback_query->inline_message_id; 
$data = $up->data;
}
if(isset($update->inline_query)){
$chat_id = $update->inline_query->chat->id;
$from_id = $update->inline_query->from->id;
$name = $update->inline_query->from->first_name.' '.$update->inline_query->from->last_name;
$text_inline = $update->inline_query->query;
$mes_id = $update->inline_query->inline_message_id; 
$user = strtolower($update->inline_query->from->username); 
}
$baageel = file_get_contents("baageel.txt");
  if($data ==  'SALEHuu' && $baageel == "❎"){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
   'message_id'=>$message_id,
'text'=>"
*• مرحبا بك عزيزي $name 🌴

• في لوحة تحكم الادمن الخاصه بالبوت يمكنك التحكم في كل اوامر البوت من الكيبورد 🔰
----------------------------*
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
        [['text'=>'أخر تحديثات البوت 💧','url'=>"https://t.me/@HJ_I_N"]],
        [['text'=>"قسم الشحن التلقائي ⚙️",'callback_data'=>"NAMERO77"]],
[['text'=>"عمل البوت : ✅",'callback_data'=>"SALEHuu"],['text'=>"اشعار الدخول : $tnbih",'callback_data'=>"tnbih"]],
[['text'=>"الردود",'callback_data'=>"redd"],['text'=>"تعديل الازرار",'callback_data'=>"azrarSALEH"],['text'=>"توجيه الرسائل  ",'callback_data'=>"FAFAF"]],
[['text'=>"رساله الترحيب (start)",'callback_data'=>"start"]],
[['text'=>"قسم الاشتراك الاجباري",'callback_data'=>"agbary"],['text'=>"قسم الادمنية ",'callback_data'=>"admins"]], 
[['text'=>"الاشتراك المدفوع 👜️",'callback_data'=>"NAMERO78"]],
[['text'=>"قسم الاذاعة ",'callback_data'=>"bbcybhu"],['text'=>"قسم الاحصائيات ",'callback_data'=>"sendmgddyessage"]],
[['text'=>" اعدادات بوت ناميرو فلور ",'callback_data'=>"sitingbots"]],
]
])
]);
file_put_contents("baageel.txt","✅");
}
if($data ==  'SALEHuu' && $baageel == "✅"){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
   'message_id'=>$message_id,
'text'=>"
*• مرحبا بك عزيزي $name 🌴

• في لوحة تحكم الادمن الخاصه بالبوت يمكنك التحكم في كل اوامر البوت من الكيبورد 🔰
----------------------------*
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
        [['text'=>'أخر تحديثات البوت 💧','url'=>"https://t.me/@HJ_I_N"]],
        [['text'=>"قسم الشحن التلقائي ⚙️",'callback_data'=>"NAMERO77"]],
[['text'=>"عمل البوت : ✅",'callback_data'=>"SALEHuu"],['text'=>"اشعار الدخول : $tnbih",'callback_data'=>"tnbih"]],
[['text'=>"الردود",'callback_data'=>"redd"],['text'=>"تعديل الازرار",'callback_data'=>"azrarSALEH"],['text'=>"توجيه الرسائل  ",'callback_data'=>"FAFAF"]],
[['text'=>"رساله الترحيب (start)",'callback_data'=>"start"]],
[['text'=>"قسم الاشتراك الاجباري",'callback_data'=>"agbary"],['text'=>"قسم الادمنية ",'callback_data'=>"admins"]], 
[['text'=>"الاشتراك المدفوع 👜️",'callback_data'=>"NAMERO78"]],
[['text'=>"قسم الاذاعة ",'callback_data'=>"bbcybhu"],['text'=>"قسم الاحصائيات ",'callback_data'=>"sendmgddyessage"]],
[['text'=>" اعدادات بوت ناميرو فلور ",'callback_data'=>"sitingbots"]],
]
])
]);
file_put_contents("baageel.txt","❎");
}
if($data == "ban"){
$infosudo["info"]["SALEH"]="ban";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال أيدي العضو لحظره",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);
}
if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="ban" and in_array($from_id,$sudo) and is_numeric($text)){
if(!in_array($text,$ban)){
file_put_contents("sudo/ban.txt","$text\n",FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حظر العضو بنجاح 
$text",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- عودة  ",'callback_data'=>"home"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$text, 
'text'=>"❌ لقد قام الادمن بحظرك من استخدام البوت",
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🚫 العضو محظور مسبقاً",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- عودة  ",'callback_data'=>"home"]],
]
])
]);
}
$infosudo["info"]["SALEH"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
#الغاء الحظر
if($data == "unban"){
$infosudo["info"]["SALEH"]="unban";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال أيدي العضو للإلغاء الحظر عنه",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);
}

if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="unban" and in_array($from_id,$sudo) and is_numeric($text)){
if(in_array($text,$ban)){
$str=file_get_contents("sudo/ban.txt");
$str=str_replace("$text\n",'',$str);
file_put_contents("sudo/ban.txt",$str);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم الغاء حظر العضو بنجاح 
$text",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- عودة  ",'callback_data'=>"home"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$text, 
'text'=>"✅ لقد قام الادمن بالغاء الحظر عنك  .",
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🚫 العضو ليسِ محظور مسبقاً",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- عودة  ",'callback_data'=>"home"]],
]
])
]);
}
$infosudo["info"]["SALEH"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}

if($data == "unbanall"){
if($countban>0){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم مسح قائمة المحظورين بنجاح ",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);
}else{
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"🚫 ليس لديك اعضاء محظورين ",
        'show_alert'=>true
        ]);

}
}
if($data == "klish_sil"){
$infosudo["info"]["SALEH"]="klish_sil";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال كليشة الاشتراك الاجباريي 
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);

}
if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="klish_sil" and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حفظ كليشة الاشتراك الاجباري 
-الكليشة : 
$text ",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- عودة  ",'callback_data'=>"home"]],
]
])
]);
$infosudo["info"]["SALEH"]="null";
$infosudo["info"]["klish_sil"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
}
if($data == "addchannel"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$count=count($orothe);
if($count<4){
$infosudo["info"]["amr"]="addchannel";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>"- اذا كانت القناة التي تريد اضافتها عامة قم بارسال معرفها .
* اذا كانت خاصة قم بإعادة توجية منشور من القناة إلى هنا .",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •  ",'callback_data'=>"home"]],
]
])
]);
}else{
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- 🚫 لا يمكنك اضافة اكثر من  3 قنوات للإشتراك الاجباري ",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •  ",'callback_data'=>"home"]],
]
])
]);
}
}
if($text  and $text !="/start" and $infosudo["info"]["amr"]=="addchannel" and in_array($from_id,$sudo) and !$message->forward_from_chat ){
$ch_id = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->id;
$idchan=$ch_id;
if($ch_id != null){
  $checkadmin = getChatstats($text,$token);
  if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->title;
$infosudo["info"]["channel"][$ch_id]["st"]="عامة";
$infosudo["info"]["channel"][$ch_id]["user"]="$text";
$infosudo["info"]["channel"][$ch_id]["name"]="$namechannel";
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅ تم إضافة القناة بنجاح عزيزي الادمن 
info channel 
user : $text 
name : $namechannel
id : $ch_id
 ",
 'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"- إضافة قناة آخرى  ",'callback_data'=>"addchannel"]],
 ]])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ البوت ليس ادمن في القناة 
- قم برفع البوت اولا لكي تتمكن من إضافتها 
 ",
'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- إعادة المحاولة   ",'callback_data'=>"addchannel"]],
 ]])
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
❌ لم تتم إضافة القناة لا توجد قناة تمتلك هذا المعرف 
$text ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"• رجوع •   ",'callback_data'=>"home"]],
 ]])
]);
}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
if($message->forward_from_chat and $infosudo["info"]["amr"]=="addchannel" and in_array($from_id, $sudo)){
$id_channel= $message->forward_from_chat->id;
if($id_channel != null){
  $checkadmin = getChatstats($id_channel,$token);
  if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$id_channel"))->result->title;
$infosudo["info"]["channel_id"]="$id_channel";
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅ تم إضافة القناة بنجاح عزيزي الادمن 
info channel 
user : • قناة خاصة • 
name : $namechannel
id : $id_channel

*يجب عليك ارسال رابط القناة الخاص قم بارسالة الان",
 'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"• رجوع • ",'callback_data'=>"addchannel"]],
 ]])
 ]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ البوت ليس ادمن في القناة 
- قم برفع البوت اولا لكي تتمكن من إضافتها 
 ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"- إعادة المحاولة   ",'callback_data'=>"addchannel"]],
 ]])
]);
}
}
$infosudo["info"]["amr"]="channel_id";
file_put_contents("sudo.json", json_encode($infosudo));
}
$channel_id=$infosudo["info"]["channel_id"];
if($text  and $text !="/start" and $infosudo["info"]["amr"]=="channel_id" and in_array($from_id,$sudo) and !$message->forward_from_chat ){
  $checkadmin = getChatstats($channel_id,$token);
  if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$channel_id"))->result->title;
$infosudo["info"]["channel"][$channel_id]["st"]="خاصة";
$infosudo["info"]["channel"][$channel_id]["user"]="$text";
$infosudo["info"]["channel"][$channel_id]["name"]="$namechannel";
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅ تم إضافة القناة بنجاح عزيزي الادمن 

info channel 
link : $text 
name : $namechannel
id : $channel_id
 ",
 'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- إضافة قناة آخرى  ",'callback_data'=>"addchannel"]],
 ]])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ البوت ليس ادمن في القناة 
- قم برفع البوت اولا لكي تتمكن من إضافتها 
 ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"- إعادة المحاولة   ",'callback_data'=>"addchannel"]],
 ]])
]);
}
$infosudo["info"]["amr"]="null";
$infosudo["info"]["channel_id"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
if($data == "viwechannel" and in_array($from_id, $sudo)){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$keyboard["inline_keyboard"]=[];
foreach($orothe as $co ){
$namechannel= $co["name"];
$st= $co["st"];
$userchannel= $co["user"];
if($namechannel!=null){
	$keyboard["inline_keyboard"][] = [['text'=>$namechannel,'callback_data'=>'null']];
if($st=="خاصة"){
$userchannel="null";
}
$keyboard["inline_keyboard"][] =
[['text'=>$userchannel,'callback_data'=>'cull'],['text'=>$st,'callback_data'=>'null']];
}}
	$keyboard["inline_keyboard"][] = [['text'=>"• رجوع •  ",'callback_data'=>"home"]];
$reply_markup=json_encode($keyboard);
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>"- هذة هي قنوات الاشتراك الاجباري الخاصة بك 
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>$reply_markup
]);
}
if($data == "delchannel" and in_array($from_id, $sudo)){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$keyboard["inline_keyboard"]=[];
foreach($orothe as $co=>$s ){
$namechannel= $s["name"];
$st= $s["st"];
$userchannel= $s["user"];
if($namechannel!=null){
	$keyboard["inline_keyboard"][] = [['text'=>$namechannel,'callback_data'=>'null']];
if($st=="خاصة"){
$userchannel="null";
}
$keyboard["inline_keyboard"][] =
[['text'=>'🚫 حذف','callback_data'=>'deletchannel '.$co],['text'=>$st,'callback_data'=>'null']];
}}
	$keyboard["inline_keyboard"][] = [['text'=>"• رجوع •  ",'callback_data'=>"home"]];
$reply_markup=json_encode($keyboard);
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>"- قم بالضغط على خيار الحذف بالاسفل 
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>$reply_markup
]);
}
if(preg_match('/^(deletchannel) (.*)/s', $data)){
$nn = str_replace('deletchannel ',"",$data);
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حذف القناة بنجاح 
-id $nn
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"• رجوع •  ",'callback_data'=>"delchannel"]],
 ]])
]);
unset($infosudo["info"]["channel"][$nn]);
file_put_contents("sudo.json", json_encode($infosudo));
}
$cdiamlaadf=file_get_contents("edid/cdiamlaadf.txt");
if($cdiamlaadf==null){
$cdiamlaadf="نقاط";
}
$cdiamlao=file_get_contents("edid/cdiamlaadf.txt");
if($cdiamlao==null){
$cdiamlao="نقاطك";
}
$cdiamlanoo=file_get_contents("edid/cdiamlaadf.txt");
if($cdiamlanoo==null){
$cdiamlanoo="نقطة";
}
if ($user != null) {
    $user = "@" . $user;
} else {
    $user = "لا يوجد";
}
if($update and !in_array($from_id,$member)){file_put_contents("sudo/member.txt","$from_id\n",FILE_APPEND);
if($from_id != $admin){
if($tnbih == "✅" ){
bot("sendmessage",[
"chat_id"=>$blp,
"text"=>"
*٭ تم دخول شخص  الى البوت الخاص بك* 👾
            *-----------------------*    
_• معلومات العضو الجديد ._

• الاسم :  [$name](tg://user?id=$from_id)
• المعرف : [$user]
• الايدي : `$from_id`
*            ----------------------- *   
• عدد الاعضاء الكلي : *$cunte*
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]);
}}}
if($countban<=0){
$countban="0";
}
if($message and $baageel =="❎" and $chat_id != $admin ){
 bot("sendmessage",[
 "chat_id"=>$chat_id,
 "text"=>"البوت تحت الصيانة حالياً"
 ]);return false;
}
if($text == "/start" && $baageel == "❎" and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
*• مرحبا بك عزيزي $name 🌴

• في لوحة تحكم الادمن الخاصه بالبوت يمكنك التحكم في كل اوامر البوت من الكيبورد 🔰
----------------------------*
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
        [['text'=>'أخر تحديثات البوت 💧','url'=>"https://t.me/@HJ_I_N"]],
        [['text'=>"قسم الشحن التلقائي ⚙️",'callback_data'=>"NAMERO77"]],
[['text'=>"عمل البوت : ✅",'callback_data'=>"SALEHuu"],['text'=>"اشعار الدخول : $tnbih",'callback_data'=>"tnbih"]],
[['text'=>"الردود",'callback_data'=>"redd"],['text'=>"تعديل الازرار",'callback_data'=>"azrarSALEH"],['text'=>"توجيه الرسائل  ",'callback_data'=>"FAFAF"]],
[['text'=>"رساله الترحيب (start)",'callback_data'=>"start"]],
[['text'=>"قسم الاشتراك الاجباري",'callback_data'=>"agbary"],['text'=>"قسم الادمنية ",'callback_data'=>"admins"]], 
[['text'=>"الاشتراك المدفوع 👜️",'callback_data'=>"NAMERO78"]],
[['text'=>"قسم الاذاعة ",'callback_data'=>"bbcybhu"],['text'=>"قسم الاحصائيات ",'callback_data'=>"sendmgddyessage"]],
[['text'=>" اعدادات بوت ناميرو فلور ",'callback_data'=>"sitingbots"]],
]
])
]); 
}
if($text == "/start" && $baageel == null and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
*• مرحبا بك عزيزي $name 🌴

• في لوحة تحكم الادمن الخاصه بالبوت يمكنك التحكم في كل اوامر البوت من الكيبورد 🔰
----------------------------*
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
        [['text'=>'أخر تحديثات البوت 💧','url'=>"https://t.me/@HJ_I_N"]],
        [['text'=>"قسم الشحن التلقائي ⚙️",'callback_data'=>"NAMERO77"]],
[['text'=>"عمل البوت : ✅",'callback_data'=>"SALEHuu"],['text'=>"اشعار الدخول : $tnbih",'callback_data'=>"tnbih"]],
[['text'=>"الردود",'callback_data'=>"redd"],['text'=>"تعديل الازرار",'callback_data'=>"azrarSALEH"],['text'=>"توجيه الرسائل  ",'callback_data'=>"FAFAF"]],
[['text'=>"رساله الترحيب (start)",'callback_data'=>"start"]],
[['text'=>"قسم الاشتراك الاجباري",'callback_data'=>"agbary"],['text'=>"قسم الادمنية ",'callback_data'=>"admins"]], 
[['text'=>"الاشتراك المدفوع 👜️",'callback_data'=>"NAMERO78"]],
[['text'=>"قسم الاذاعة ",'callback_data'=>"bbcybhu"],['text'=>"قسم الاحصائيات ",'callback_data'=>"sendmgddyessage"]],
[['text'=>" اعدادات بوت ناميرو فلور ",'callback_data'=>"sitingbots"]],
]
])
]); 
}
if($text == "/start" && $baageel == "✅" and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
*• مرحبا بك عزيزي $name 🌴

• في لوحة تحكم الادمن الخاصه بالبوت يمكنك التحكم في كل اوامر البوت من الكيبورد 🔰
----------------------------*
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
        [['text'=>'أخر تحديثات البوت 💧','url'=>"https://t.me/@HJ_I_N"]],
        [['text'=>"قسم الشحن التلقائي ⚙️",'callback_data'=>"NAMERO77"]],
[['text'=>"عمل البوت : ✅",'callback_data'=>"SALEHuu"],['text'=>"اشعار الدخول : $tnbih",'callback_data'=>"tnbih"]],
[['text'=>"الردود",'callback_data'=>"redd"],['text'=>"تعديل الازرار",'callback_data'=>"azrarSALEH"],['text'=>"توجيه الرسائل  ",'callback_data'=>"FAFAF"]],
[['text'=>"رساله الترحيب (start)",'callback_data'=>"start"]],
[['text'=>"قسم الاشتراك الاجباري",'callback_data'=>"agbary"],['text'=>"قسم الادمنية ",'callback_data'=>"admins"]], 
[['text'=>"الاشتراك المدفوع 👜️",'callback_data'=>"NAMERO78"]],
[['text'=>"قسم الاذاعة ",'callback_data'=>"bbcybhu"],['text'=>"قسم الاحصائيات ",'callback_data'=>"sendmgddyessage"]],
[['text'=>" اعدادات بوت ناميرو فلور ",'callback_data'=>"sitingbots"]],
]
])
]); 
}
if($data == "AHAHAHQH"  && $baageel == "✅"  ){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"
*• مرحبا بك عزيزي $name 🌴

• في لوحة تحكم الادمن الخاصه بالبوت يمكنك التحكم في كل اوامر البوت من الكيبورد 🔰
----------------------------*
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
        [['text'=>'أخر تحديثات البوت 💧','url'=>"https://t.me/@HJ_I_N"]],
        [['text'=>"قسم الشحن التلقائي ⚙️",'callback_data'=>"NAMERO77"]],
[['text'=>"عمل البوت : ✅",'callback_data'=>"SALEHuu"],['text'=>"اشعار الدخول : $tnbih",'callback_data'=>"tnbih"]],
[['text'=>"الردود",'callback_data'=>"redd"],['text'=>"تعديل الازرار",'callback_data'=>"azrarSALEH"],['text'=>"توجيه الرسائل  ",'callback_data'=>"FAFAF"]],
[['text'=>"رساله الترحيب (start)",'callback_data'=>"start"]],
[['text'=>"قسم الاشتراك الاجباري",'callback_data'=>"agbary"],['text'=>"قسم الادمنية ",'callback_data'=>"admins"]], 
[['text'=>"الاشتراك المدفوع 👜️",'callback_data'=>"NAMERO78"]],
[['text'=>"قسم الاذاعة ",'callback_data'=>"bbcybhu"],['text'=>"قسم الاحصائيات ",'callback_data'=>"sendmgddyessage"]],
[['text'=>" اعدادات بوت ناميرو فلور ",'callback_data'=>"sitingbots"]],
]
])
]); 
}
function sendwataw($chat_id,$message_id){	
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$member = explode("\n",file_get_contents("sudo/member.txt"));
$baageel = file_get_contents("baageel.txt");
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban)-1;
if($countban<=0){
$countban="0";
}	
bot('EditMessageText',[
'chat_id'=>$chat_id, 
     'message_id'=>$message_id,
'text'=>"
*• مرحبا بك عزيزي $name 🌴

• في لوحة تحكم الادمن الخاصه بالبوت يمكنك التحكم في كل اوامر البوت من الكيبورد 🔰
----------------------------*
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
        [['text'=>'أخر تحديثات البوت 💧','url'=>"https://t.me/@HJ_I_N"]],
        [['text'=>"قسم الشحن التلقائي ⚙️",'callback_data'=>"NAMERO77"]],
[['text'=>"عمل البوت : ✅",'callback_data'=>"SALEHuu"],['text'=>"اشعار الدخول : $tnbih",'callback_data'=>"tnbih"]],
[['text'=>"الردود",'callback_data'=>"redd"],['text'=>"تعديل الازرار",'callback_data'=>"azrarSALEH"],['text'=>"توجيه الرسائل  ",'callback_data'=>"FAFAF"]],
[['text'=>"رساله الترحيب (start)",'callback_data'=>"start"]],
[['text'=>"قسم الاشتراك الاجباري",'callback_data'=>"agbary"],['text'=>"قسم الادمنية ",'callback_data'=>"admins"]], 
[['text'=>"الاشتراك المدفوع 👜️",'callback_data'=>"NAMERO78"]],
[['text'=>"قسم الاذاعة ",'callback_data'=>"bbcybhu"],['text'=>"قسم الاحصائيات ",'callback_data'=>"sendmgddyessage"]],
[['text'=>" اعدادات بوت ناميرو فلور ",'callback_data'=>"sitingbots"]],
]
])
]);
}
if($data == "home" and in_array($from_id,$sudo)){
$infosudo["info"]["SALEH"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
if($data == "AHAHAHQH"  && $baageel == "❎"  ){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>"
*• مرحبا بك عزيزي $name 🌴

• في لوحة تحكم الادمن الخاصه بالبوت يمكنك التحكم في كل اوامر البوت من الكيبورد 🔰
----------------------------*
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
        [['text'=>'أخر تحديثات البوت 💧','url'=>"https://t.me/@HJ_I_N"]],
        [['text'=>"قسم الشحن التلقائي ⚙️",'callback_data'=>"NAMERO77"]],
[['text'=>"عمل البوت : ✅",'callback_data'=>"SALEHuu"],['text'=>"اشعار الدخول : $tnbih",'callback_data'=>"tnbih"]],
[['text'=>"الردود",'callback_data'=>"redd"],['text'=>"تعديل الازرار",'callback_data'=>"azrarSALEH"],['text'=>"توجيه الرسائل  ",'callback_data'=>"FAFAF"]],
[['text'=>"رساله الترحيب (start)",'callback_data'=>"start"]],
[['text'=>"قسم الاشتراك الاجباري",'callback_data'=>"agbary"],['text'=>"قسم الادمنية ",'callback_data'=>"admins"]], 
[['text'=>"الاشتراك المدفوع 👜️",'callback_data'=>"NAMERO78"]],
[['text'=>"قسم الاذاعة ",'callback_data'=>"bbcybhu"],['text'=>"قسم الاحصائيات ",'callback_data'=>"sendmgddyessage"]],
[['text'=>" اعدادات بوت ناميرو فلور ",'callback_data'=>"sitingbots"]],
]
])
]); 
}
$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;$type = $message->chat->type;
$message_id = $message->message_id;
$name = $message->from->first_name.' '.$message->from->last_name;
$user = strtolower($message->from->username);
$t =$message->chat->title; 
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = strtolower($up->from->username); 
$name = $up->from->first_name.' '.$up->from->last_name;
$message_id = $up->message->message_id;
$mes_id = $update->callback_query->inline_message_id; 
$data = $up->data;
}
if(isset($update->inline_query)){
$chat_id = $update->inline_query->chat->id;
$from_id = $update->inline_query->from->id;
$name = $update->inline_query->from->first_name.' '.$update->inline_query->from->last_name;
$text_inline = $update->inline_query->query;
$mes_id = $update->inline_query->inline_message_id; 
$user = strtolower($update->inline_query->from->username); 
}
$nambot=file_get_contents("edid/nambot.txt");
if($nambot==null){
$nambot="Namero Flor";
}
$start =file_get_contents("start.txt");
if($start==null){
$start="• مرحبا بك في بوت $nambot 👜
💧] $cdiamlao : #points 
🌴] ايديك : #id";
}
$bajabiabi = file_get_contents("bajabiabi.txt");
  if($data ==  'start'  && $bajabiabi == null){
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id,
     'message_id'=>$message_id,
        'text'=>"
*• مرحبا بك في قسم رساله الترحيب (*/start*)* 🌾
- ستظهر هذه الرساله عند ارسال *(*/start*)* الى البوت الخاص بك 

- ارساله الحاليه : `$start`
",
                'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الاختصارات",'callback_data'=>"comm"]],
[['text'=>" الازرار الشفافة   ",'callback_data'=>"azrarSALEH"]],
[['text'=>" تعين الرساله  ",'callback_data'=>"VFTGKKCSS"],['text'=>" مسح الرساله   ",'callback_data'=>"dcnhrc"]],
[['text'=>" رد على الرسائل : ✅  ",'callback_data'=>"bajnobabiab"]],
[['text'=>" • رجوع •  ",'callback_data'=>"home"]],
]])
]);
}
  if($data ==  'bysajabiab' ){
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id,
     'message_id'=>$message_id,
        'text'=>"
*• مرحبا بك في قسم رساله الترحيب (*/start*)* 🌾
- ستظهر هذه الرساله عند ارسال *(*/start*)* الى البوت الخاص بك 

- ارساله الحاليه : `$start`
",
                'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الاختصارات",'callback_data'=>"comm"]],
[['text'=>" الازرار الشفافة   ",'callback_data'=>"azrarSALEH"]],
[['text'=>" تعين الرساله  ",'callback_data'=>"VFTGKKCSS"],['text'=>" مسح الرساله   ",'callback_data'=>"dcnhrc"]],
[['text'=>" رد على الرسائل : ✅  ",'callback_data'=>"bajnobabiab"]],
[['text'=>" • رجوع •  ",'callback_data'=>"home"]],
]])
]);
file_put_contents("bajabiabi $bajabiabi.txt","ys");
}
  if($data ==  'start'  && $bajabiabi == "no"){
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id,
     'message_id'=>$message_id,
        'text'=>"
*• مرحبا بك في قسم رساله الترحيب (*/start*)* 🌾
- ستظهر هذه الرساله عند ارسال *(*/start*)* الى البوت الخاص بك 

- ارساله الحاليه : `$start`
",
                'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الاختصارات",'callback_data'=>"comm"]],
[['text'=>" الازرار الشفافة   ",'callback_data'=>"azrarSALEH"]],
[['text'=>" تعين الرساله  ",'callback_data'=>"VFTGKKCSS"],['text'=>" مسح الرساله   ",'callback_data'=>"dcnhrc"]],
[['text'=>" رد على الرسائل : ❎  ",'callback_data'=>"bysajabiab"]],
[['text'=>" • رجوع •  ",'callback_data'=>"home"]],
]])
]);
}
  if($data ==  'start'  && $bajabiabi == "ys"){
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id,
     'message_id'=>$message_id,
        'text'=>"
*• مرحبا بك في قسم رساله الترحيب (*/start*)* 🌾
- ستظهر هذه الرساله عند ارسال *(*/start*)* الى البوت الخاص بك 

- ارساله الحاليه : `$start`
",
                'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الاختصارات",'callback_data'=>"comm"]],
[['text'=>"الاختصارات",'callback_data'=>"comm"]],
[['text'=>" الازرار الشفافة   ",'callback_data'=>"azrarSALEH"]],
[['text'=>" تعين الرساله  ",'callback_data'=>"VFTGKKCSS"],['text'=>" مسح الرساله   ",'callback_data'=>"dcnhrc"]],
[['text'=>" رد على الرسائل : ✅  ",'callback_data'=>"bajabiab"]],
[['text'=>" • رجوع •  ",'callback_data'=>"home"]],
]])
]);
}
  if($data ==  'bajnobabiab' ){
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id,
     'message_id'=>$message_id,
        'text'=>"
*• مرحبا بك في قسم رساله الترحيب (*/start*)* 🌾
- ستظهر هذه الرساله عند ارسال *(*/start*)* الى البوت الخاص بك 

- ارساله الحاليه : `$start`
",
                'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الاختصارات",'callback_data'=>"comm"]],
[['text'=>" الازرار الشفافة   ",'callback_data'=>"azrarSALEH"]],
[['text'=>" تعين الرساله  ",'callback_data'=>"VFTGKKCSS"],['text'=>" مسح الرساله   ",'callback_data'=>"dcnhrc"]],
[['text'=>" رد على الرسائل : ❎  ",'callback_data'=>"bysajabiab"]],
[['text'=>" • رجوع •  ",'callback_data'=>"home"]],
]])
]);
file_put_contents("bajabiabi $bajabiabi.txt","no");
}
if($data == "admins" and $chat_id != $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
   'message_id'=>$message_id,
'text'=>"*• لا يمكنك الدخول الى هذه القسم !* ً",
'parse_mode'=>markdown,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •  ",'callback_data'=>"home"]],
]
])
]); return false;}
$comm = json_decode(file_get_contents("comm.json"),true);
if($data == 'comm'){
 if(in_array($chat_id,$comm['comm']['admins']) or $chat_id == $admin){
$reply_markup = [];
  foreach($comm['com'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['com1'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'dellll×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'مسح جميع الاختصارات','callback_data'=>'deleda'],['text'=>'اضافه اختصار','callback_data'=>'adddcd']];
  $reply_markup['inline_keyboard'][] = [['text'=>'رجوع','callback_data'=>'home']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'*• مرحبا بك في قسم الاختصارات ✨*

- يمكنك وضع اوامر مختصره في البوت من خلال هاذا القسم',
'parse_mode'=>markdown,
    'reply_markup'=>$json
  ]);
  exit;
 }
 }
  $ex = explode('×',$data);
 if($ex[0] == "dellll"){
 if(in_array($chat_id,$comm['comm']['admins']) or $chat_id == $admin){
  if($comm['com'][$ex[1]] != null){
  unset($comm['com'][$ex[1]]);
  $comm['modee'] = null;
  file_put_contents('comm.json', json_encode($comm));
$comm = json_decode(file_get_contents('comm.json'),true);
$reply_markup = [];
  foreach($comm['com'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['com1'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'dellll×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'مسح جميع الاختصارات','callback_data'=>'deleda'],['text'=>'اضافه اختصار','callback_data'=>'adddcd']];
  $reply_markup['inline_keyboard'][] = [['text'=>'رجوع','callback_data'=>'home']];
$json = json_encode($reply_markup);
bot('setmyCommands');
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'*• مرحبا بك في قسم الاختصارات ✨*

- يمكنك وضع اوامر مختصره في البوت من خلال هاذا القسم',
'parse_mode'=>markdown,
    'reply_markup'=>$json,
  ]);
  $delatb = $sale['com1'];
 bot('answercallbackquery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"تم مسح الاختصار : $delatb",
'show_alert'=>true,
  ]);
 }else{
 $reply_markup = [];
foreach($comm['com'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['com1'],'callback_data'=>"s"],['text'=>'🗑️','callback_data'=>'dellll×'.$code]];
  }
  $reply_markup['inline_keyboard'][] = [['text'=>'مسح جميع الاختصارات','callback_data'=>'deleda'],['text'=>'اضافه اختصار','callback_data'=>'adddcd']];
  $reply_markup['inline_keyboard'][] = [['text'=>'رجوع','callback_data'=>'home']];
$json = json_encode($reply_markup);
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'عذرا الاختصار ليس موجود',
    'reply_markup'=>$json
  ]);
 }
 }
 }
  if($data == 'adddcd'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'*• ارسل الاختصار الان بالشكل التالي : *
`start - رساله البدء`',
'parse_mode'=>markdown,
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع','callback_data'=>'home']]
      ]
    ])
  ]);
  $comm['modee'] = 'add';
  file_put_contents('comm.json', json_encode($comm));
  exit;
 }
 $ex2 = explode(' - ',$text);
 if($text != '/start' and $text != null and $comm['modee'] == 'add'){
 if(in_array($chat_id,$comm['comm']['admins']) or $chat_id == $admin){
$code = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,7);
$set = $text;
$ex = explode("\n",$set);
foreach($ex as $ex1){
$ex2 = explode(" - ",$ex1);
$Commands[] = ['command'=>$ex2[0],'description'=>$ex2[1]];
}
bot('setMyCommands',[
'commands'=>json_encode($Commands)
]);
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'• تم الحفظ !',
'reply_to_message_id'=>$message->message_id, 
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'رجوع','callback_data'=>'home']]
      ]
    ])
  ]);
  $comm['com'][$code]['com1'] = $ex2[0];
  $comm['com'][$code]['com2'] = $ex2[1];
  unset($comm['modee']);
  file_put_contents('comm.json', json_encode($comm));
  exit;
 }
 }
if($data == "deleda"){
bot('setmyCommands');
bot('EditMessageText',[
'chat_id'=>$chat_id, 
   'message_id'=>$message_id,
'text'=>"*• مرحبا بك في قسم الاختصارات ✨*

- يمكنك وضع اوامر مختصره في البوت من خلال هاذا القسم",
'parse_mode'=>markdown,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'مسح جميع الاختصارات','callback_data'=>'deleda'],['text'=>'اضافه اختصار','callback_data'=>'adddcd']],
[['text'=>"• رجوع •  ",'callback_data'=>"home"]],
]
])
]); 
unlink("comm.json");
 bot('answercallbackquery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"تم مسح جميع الاختصارات ⏱",
'show_alert'=>true,
  ]);return false;}
if($data == "admins" and $from_id ==$admin){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["admins"];
$keyboard["inline_keyboard"]=[];
foreach($orothe as $co=>$sss ){
if($co!=null and $co!=$admin ){
$keyboard["inline_keyboard"][] =
[['text'=>"$sss",'url'=>'tg://openmessage?user_id=$sss'],['text'=>' 🗑','callback_data'=>'deleteadmin '.$co.'#'.$sss]];
}}
$keyboard["inline_keyboard"][] = [['text'=>"• اضافه ادمن جديد •  ",'callback_data'=>"addadmin"]];
$keyboard["inline_keyboard"][] = [['text'=>"• رجوع •  ",'callback_data'=>"home"]];
$reply_markup=json_encode($keyboard);
bot('EditMessageText',[
'chat_id'=>$chat_id, 
   'message_id'=>$message_id,
'text'=>"
*• مرحبا بك في الادمنيه 👮‍♀️*
- يمكنك رفع 5 ادمنيه في البوت او حذفهم 

- يمكن للادمنيه تحكم في لوحه البوت مثلك ولا يمكنهم رفع ادمنيه او استلام رسائل الموجهة او سايت او تواصل .",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>$reply_markup
]);
}
if($data == "addadmin" and $from_id ==$admin){
$infosudo["info"]["SALEH"]="addadmin";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
     'message_id'=>$message_id,
'text'=>"• ارسل ايدي الشخص الان او معرف الشخص ! ",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •  ",'callback_data'=>"home"]],
]
])
]);
}
if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="addadmin" and $from_id ==$admin and is_numeric($text)){
if(!in_array($text,$admins)){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$count=count($orothe);
if($count<6){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"• تم الاضافه الى الادمنيه بنجاح ",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •  ",'callback_data'=>"admins"]],
]
])
]);
$infosudo["info"]["admins"][]="$text";
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🚫 لايمكنك اضافة اكثر من 5 ادمنية ً",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •  ",'callback_data'=>"admins"]],
]
])
]);
}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ⚠ الادمن مضاف مسبقاً",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •  ",'callback_data'=>"admins"]],
]
])
]);
}
$infosudo["info"]["SALEH"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
if(preg_match('/^(deleteadmin) (.*)/s', $data)){
$nn = str_replace('deleteadmin ',"",$data);
$ex=explode('#',$nn);
$id=$ex[1];
$n=$ex[0];
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["admins"];
$keyboard["inline_keyboard"]=[];
foreach($orothe as $co=>$sss ){
if($co!=null and $co!=$admin ){
$keyboard["inline_keyboard"][] =
[['text'=>"$sss",'url'=>'tg://openmessage?user_id=$sss'],['text'=>' 🗑','callback_data'=>'deleteadmin '.$co.'#'.$sss]];
}}
	$keyboard["inline_keyboard"][] = [['text'=>"• اضافه ادمن جديد •  ",'callback_data'=>"addadmin"]];
	$keyboard["inline_keyboard"][] = [['text'=>"• رجوع •  ",'callback_data'=>"home"]];
$reply_markup=json_encode($keyboard);
bot('EditMessageText',[
'chat_id'=>$chat_id, 
   'message_id'=>$message_id,
'text'=>"
*• مرحبا بك في الادمنيه 👮‍♀️*
- يمكنك رفع 5 ادمنيه في البوت او حذفهم 

- يمكن للادمنيه تحكم في لوحه البوت مثلك ولا يمكنهم رفع ادمنيه او استلام رسائل الموجهة او سايت او تواصل .
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>$reply_markup
 
]);
unset($infosudo["info"]["admins"][$n]);
file_put_contents("sudo.json", json_encode($infosudo));
}
if($data == "azrarSALEH") {
    $lines = file('edid/aklSALEHnmo.txt', FILE_IGNORE_NEW_LINES);
    $key = ['inline_keyboard' => []];
    $shown_texts = [];
    foreach ($lines as $line) {
        $namezer = $line;
        $deletzzr = file_get_contents("edid/aklSALEHnmo.txt");
        if ($deletzzr == null) {
            $deletzzr = "";
        } else {
            $deletzzr = "🗑";
            if (!in_array($namezer, $shown_texts)) {
                $key['inline_keyboard'][] = [['text' => "$namezer", 'callback_data' => "null"], ['text' => "$deletzzr", 'callback_data' => "deletzernm#$namezer"]];
                $shown_texts[] = $namezer;
            }
        }
    }
    $key['inline_keyboard'][] = [['text' => "تعديل اسماء الازرار", 'callback_data' => "serzer"]];
    $key['inline_keyboard'][] = [['text' => "قسم الازرار الشفافة", 'callback_data' => "zrar"]];
    $key['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "home"]];
    bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*• مرحبا بك في قسم تعديل ازرار البوت 👋🏼*
        
- يمكنك اضافة تعديلات للازرار وحذفها 
*ـ اضغط على الزر لعرض محتوي قسم الزر .*",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode($key),
    ]);
}
$ex = explode("#",$data);
if($ex[0] == "deletzernm"){
$file_path = "edid/aklSALEHnmo.txt";
$deleted_text = "$ex[1]";
$file_content = file_get_contents($file_path);
$file_content = preg_replace("/^.*?$deleted_text.*?\R?/m", "", $file_content);
file_put_contents($file_path, $file_content);
$lines = file('edid/aklSALEHnmo.txt', FILE_IGNORE_NEW_LINES);
$key = ['inline_keyboard' => []];
foreach ($lines as $line) {
$namezer = $line;
$i = $line;
$key['inline_keyboard'][] = [['text' => "$namezer", 'callback_data' =>"null"],['text' => "🗑", 'callback_data' => "deletzernm#$namezer"]];
}
$key['inline_keyboard'][] = [['text' => "تعديل اسماء الازرار", 'callback_data' => "serzer"]];
$key['inline_keyboard'][] = [['text' => "قسم الازرار الشفافة", 'callback_data' => "zrar"]];
$key['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "home"]];
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• مرحبا بك في قسم تعديل ازرار البوت 👋🏼*

- يمكنك اضافه تعديلات للازرار وحذفها 
*ـ اضغط على الزر لعرض محتوي قسم الزر .*",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode($key),]);
$namzeon = file_get_contents("edid/$ex[1].txt");
unlink("edid/$namzeon");
unlink("edid/$ex[1].txt");
}
$aklSALEHnm1=file_get_contents("edid/aklSALEHnm1.txt");
if($aklSALEHnm1==null){
$aklSALEHnm1="قسم الخدمات 📚";
}
$aklSALEHnm2=file_get_contents("edid/aklSALEHnm2.txt");
if($aklSALEHnm2==null){
$aklSALEHnm2="تجميع النقاط 💧";
}
$aklSALEHnm3=file_get_contents("edid/aklSALEHnm3.txt");
if($aklSALEHnm3==null){
$aklSALEHnm3="ضبط الحساب ⚙️️";
}
$aklSALEHnm4=file_get_contents("edid/aklSALEHnm4.txt");
if($aklSALEHnm4==null){
$aklSALEHnm4="استخدام كرت 🪪";
}
$aklSALEHnm5=file_get_contents("edid/aklSALEHnm5.txt");
if($aklSALEHnm5==null){
$aklSALEHnm5="تحويل رصيد 🗳";
}
$aklSALEHnm6=file_get_contents("edid/aklSALEHnm6.txt");
if($aklSALEHnm6==null){
$aklSALEHnm6="حالة الطلب 🛍";
}
$aklSALEHnm7=file_get_contents("edid/aklSALEHnm7.txt");
if($aklSALEHnm7==null){
$aklSALEHnm7="جميع طلباتي 🔰";
}
$aklSALEHnm8=file_get_contents("edid/aklSALEHnm8.txt");
if($aklSALEHnm8==null){
$aklSALEHnm8="قناة التحديثات 📣";
}
$aklSALEHnm33=file_get_contents("edid/aklSALEHnm33.txt");
if($aklSALEHnm33==null){
$aklSALEHnm33="الاحصائيات 📊";
}
$aklSALEHnm9=file_get_contents("edid/aklSALEHnm9.txt");
if($aklSALEHnm9==null){
$aklSALEHnm9="شحن رصيدك 👜";
}
$aklSALEHnm10=file_get_contents("edid/aklSALEHnm10.txt");
if($aklSALEHnm10==null){
$aklSALEHnm10="تعليمات البوت 🌴";
}
$aklSALEHnm11=file_get_contents("edid/aklSALEHnm11.txt");
if($aklSALEHnm11==null){
$SALEHorders = count(file("akl/orders.txt"));
$aklSALEHnm11="طلبات مكتمله : $SALEHorders 👥";
}
if($data == 'serzer'){
$reply_markup[] =   [['text'=>"$aklSALEHnm1",'callback_data'=>'serzer1']];
$reply_markup[] =   [['text'=>"$aklSALEHnm2",'callback_data'=>'serzer2'],['text'=>"$aklSALEHnm3",'callback_data'=>'serzer3']];
$reply_markup[] =   [['text'=>"$aklSALEHnm4",'callback_data'=>'serzer4'],['text'=>"$aklSALEHnm5",'callback_data'=>'serzer5']];
$reply_markup[] =   [['text'=>"$aklSALEHnm6",'callback_data'=>'serzer6'],['text'=>"$aklSALEHnm7",'callback_data'=>'serzer7']];
$reply_markup[] =   [['text'=>"$aklSALEHnm8",'callback_data'=>"serzer8"],['text'=>"$aklSALEHnm33",'callback_data'=>"serzer33"]];
$reply_markup[] =   [['text'=>"$aklSALEHnm9",'callback_data'=>'serzer9'],['text'=>"$aklSALEHnm10",'callback_data'=>'serzer10']];
$reply_markup[] =   [['text'=>"$aklSALEHnm11",'callback_data'=>'serzer11']];
$reply_markup[] = [['text'=>"رجوع",'callback_data'=>"home"]];
$reply_markup = json_encode(['inline_keyboard'=>$reply_markup,]);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*مرحبا بك عزيزي 👋🏼*

اختار الزر المراد تغير اسمه من خلال الازرار *التالية*",
'parse_mode'=>"markdown",
 'reply_markup'=>$reply_markup,              
]);
}
if($data == 'serzer1'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*قوم بارسال اسم الزر الجديد الان*👜",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])]);
file_put_contents("edid/serzeron.txt","serzer1");
}
if($text and file_get_contents("edid/serzeron.txt") == "serzer1" and $text != '/start'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'home']],]])
]);
unlink("edid/serzeron.txt");
file_put_contents("edid/aklSALEHnm1.txt",$text);
file_put_contents("edid/$text.txt",'aklSALEHnm1.txt');
file_put_contents("edid/aklSALEHnmo.txt","$text\n",FILE_APPEND);
}
if($data == 'serzer2'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*قوم بارسال اسم الزر الجديد الان*👜",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])]);
file_put_contents("edid/serzeron.txt","serzer2");
}
if($text and file_get_contents("edid/serzeron.txt") == "serzer2" and $text != '/start'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'home']],]])
]);
unlink("edid/serzeron.txt");
file_put_contents("edid/aklSALEHnm2.txt",$text);
file_put_contents("edid/$text.txt",'aklSALEHnm2.txt');
file_put_contents("edid/aklSALEHnmo.txt","$text\n",FILE_APPEND);
}
if($data == 'serzer3'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*قوم بارسال اسم الزر الجديد الان*👜",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])]);
file_put_contents("edid/serzeron.txt","serzer3");
}
if($text and file_get_contents("edid/serzeron.txt") == "serzer3" and $text != '/start'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'home']],]])
]);
unlink("edid/serzeron.txt");
file_put_contents("edid/aklSALEHnm3.txt",$text);
file_put_contents("edid/$text.txt",'aklSALEHnm3.txt');
file_put_contents("edid/aklSALEHnmo.txt","$text\n",FILE_APPEND);
}
if($data == 'serzer4'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*قوم بارسال اسم الزر الجديد الان*👜",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])]);
file_put_contents("edid/serzeron.txt","serzer4");
}
if($text and file_get_contents("edid/serzeron.txt") == "serzer4" and $text != '/start'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'home']],]])
]);
unlink("edid/serzeron.txt");
file_put_contents("edid/aklSALEHnm4.txt",$text);
}
if($data == 'serzer5'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*قوم بارسال اسم الزر الجديد الان*👜",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])]);
file_put_contents("edid/serzeron.txt","serzer5");
}
if($text and file_get_contents("edid/serzeron.txt") == "serzer5" and $text != '/start'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'home']],]])
]);
unlink("edid/serzeron.txt");
file_put_contents("edid/aklSALEHnm5.txt",$text);
}
if($data == 'serzer6'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*قوم بارسال اسم الزر الجديد الان*👜",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])]);
file_put_contents("edid/serzeron.txt","serzer6");
}
if($text and file_get_contents("edid/serzeron.txt") == "serzer6" and $text != '/start'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'home']],]])
]);
unlink("edid/serzeron.txt");
file_put_contents("edid/aklSALEHnm6.txt",$text);
}
if($data == 'serzer7'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*قوم بارسال اسم الزر الجديد الان*👜",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])]);
file_put_contents("edid/serzeron.txt","serzer7");
}
if($text and file_get_contents("edid/serzeron.txt") == "serzer7" and $text != '/start'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'home']],]])
]);
unlink("edid/serzeron.txt");
file_put_contents("edid/aklSALEHnm7.txt",$text);
}
if($data == 'serzer8'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*قوم بارسال اسم الزر الجديد الان*👜",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])]);
file_put_contents("edid/serzeron.txt","serzer8");
}
if($text and file_get_contents("edid/serzeron.txt") == "serzer8" and $text != '/start'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'home']],]])
]);
unlink("edid/serzeron.txt");
file_put_contents("edid/aklSALEHnm8.txt",$text);
}
if($data == 'serzer33'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*قوم بارسال اسم الزر الجديد الان*👜",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])]);
file_put_contents("edid/serzeron.txt","serzer33");
}
if($text and file_get_contents("edid/serzeron.txt") == "serzer33" and $text != '/start'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'home']],]])
]);
unlink("edid/serzeron.txt");
file_put_contents("edid/aklSALEHnm33.txt",$text);
}
if($data == 'serzer9'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*قوم بارسال اسم الزر الجديد الان*👜",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])]);
file_put_contents("edid/serzeron.txt","serzer9");
}
if($text and file_get_contents("edid/serzeron.txt") == "serzer9" and $text != '/start'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'home']],]])
]);
unlink("edid/serzeron.txt");
file_put_contents("edid/aklSALEHnm9.txt",$text);
}
if($data == 'serzer10'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*قوم بارسال اسم الزر الجديد الان*👜",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])]);
file_put_contents("edid/serzeron.txt","serzer10");
}
if($text and file_get_contents("edid/serzeron.txt") == "serzer10" and $text != '/start'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'home']],]])
]);
unlink("edid/serzeron.txt");
file_put_contents("edid/aklSALEHnm10.txt",$text);
}
if($data == 'serzer11'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*قوم بارسال اسم الزر الجديد الان*👜",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])]);
file_put_contents("edid/serzeron.txt","serzer11");
}
if($text and file_get_contents("edid/serzeron.txt") == "serzer11" and $text != '/start'){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'home']],]])
]);
unlink("edid/serzeron.txt");
file_put_contents("edid/aklSALEHnm11.txt",$text);
}
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$txt = $message->caption;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$new = $message->new_chat_members;
$message_id = $message->message_id;
$type = $message->chat->type;
$name = $message->from->first_name;
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$message_id = $up->message->message_id;
$data = $up->data;
$namebot = "@".$getbot->username;
}
$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;$type = $message->chat->type;
$message_id = $message->message_id;
$name = $message->from->first_name.' '.$message->from->last_name;
$user = strtolower($message->from->username);
$t =$message->chat->title; 
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = strtolower($up->from->username); 
$name = $up->from->first_name.' '.$up->from->last_name;
$message_id = $up->message->message_id;
$mes_id = $update->callback_query->inline_message_id; 
$data = $up->data;
}
 $button  = json_decode(file_get_contents('button.json'),true);
 $sttings = json_decode(file_get_contents("CEPO/hiim.json"),1);
function save($array){
file_put_contents('button.json', json_encode($array,128|34|256));
}
if($user != null){
$use = "@$user";
}else
if($user == null){
$use = "لا يوجد معرف";
}
$zerasase = file_get_contents("edid/zerasase.txt");
if($data == "zrar"){
$SALEHorders = count(file("akl/orders.txt"));
@$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$coin = $cuser["userfild"]["$from_id"]["coin"];
$reply_markup[] =   [['text'=>"$aklSALEHnm1",'callback_data'=>'null']];
$reply_markup[] =   [['text'=>"$aklSALEHnm2",'callback_data'=>'null'],['text'=>"$aklSALEHnm3",'callback_data'=>'null']];
$reply_markup[] =   [['text'=>"$aklSALEHnm4",'callback_data'=>'null'],['text'=>"$aklSALEHnm5",'callback_data'=>'null']];
$reply_markup[] =   [['text'=>"$aklSALEHnm6",'callback_data'=>'null'],['text'=>"$aklSALEHnm7",'callback_data'=>'null']];
$reply_markup[] =   [['text'=>"$aklSALEHnm8",'callback_data'=>"null"],['text'=>"$aklSALEHnm33",'callback_data'=>"null"]];
$reply_markup[] =   [['text'=>"$aklSALEHnm9",'callback_data'=>'null'],['text'=>"$aklSALEHnm10",'callback_data'=>'null']];
$reply_markup[] =   [['text'=>"$aklSALEHnm11",'callback_data'=>'null']];
      foreach($button['codzer'] as $f5f7 => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>'zh|'.$f5f7]];
}
      foreach($button['buttons'] as $f5f7 => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>'zh|'.$f5f7]];
}
foreach($button['links'] as $f5f7 => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>'zh|'.$f5f7]];
}
$reply_markup[] = [['text'=>"+",'callback_data'=>"addbtn"]];
$reply_markup[] = [['text'=>"قسم تعديل الازرار",'callback_data'=>"serzer"],['text'=>"الازرار الاساسية : $zerasase",'callback_data'=>"zerasase"]];
$reply_markup[] = [['text'=>"رجوع",'callback_data'=>"home"]];
$reply_markup = json_encode(['inline_keyboard'=>$reply_markup,]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
• مرحبا بك في قسم الازرار الشفافة ✨
*
- يمكنك اضافه ازرار شفافة او حذفها ( لا يمكنك حذف الازرار الاساسية ولاكن يمكنك تعديلها من قسم تعديل الازرار )
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"markdown",
 'reply_markup'=>$reply_markup,
]);
file_put_contents("set.txt",".");
$button['n'] = null;
$button['mode'] = null;
save($button);
  }
if($data ==  'zerasase' and $zerasase =='✅'){
$SALEHorders = count(file("akl/orders.txt"));
$zerasase = file_get_contents("edid/zerasase.txt");
@$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$coin = $cuser["userfild"]["$from_id"]["coin"];
$reply_markup[] =   [['text'=>"قسم الخدمات 📚",'callback_data'=>'null']];
$reply_markup[] =   [['text'=>"تجميع النقاط 💧",'callback_data'=>'null'],['text'=>"ضبط الحساب ⚙️️",'callback_data'=>'null']];
$reply_markup[] =   [['text'=>"استخدام كرت 🪪",'callback_data'=>'null'],['text'=>"تحويل رصيد 🗳",'callback_data'=>'null']];
$reply_markup[] =   [['text'=>"حالة الطلب 🛍",'callback_data'=>'null'],['text'=>"جميع طلباتي 🔰",'callback_data'=>'null']];
$reply_markup[] =   [['text'=>"قناة التحديثات 📣",'callback_data'=>'null'],['text'=>"الاحصائيات 📊",'callback_data'=>"null"]];
$reply_markup[] =   [['text'=>"شحن رصيدك 👜",'callback_data'=>'null'],['text'=>"تعليمات البوت 🌴",'callback_data'=>'null']];
$reply_markup[] =   [['text'=>"طلبات مكتمله : $SALEHorders 👥",'callback_data'=>'null']];
      foreach($button['codzer'] as $f5f7 => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>'zh|'.$f5f7]];
}
      foreach($button['buttons'] as $f5f7 => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>'zh|'.$f5f7]];
}
foreach($button['links'] as $f5f7 => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>'zh|'.$f5f7]];
}
$reply_markup[] = [['text'=>"+",'callback_data'=>"addbtn"]];
$reply_markup[] = [['text'=>"قسم تعديل الازرار",'callback_data'=>"serzer"],['text'=>"الازرار الاساسية : ❌",'callback_data'=>"zerasase"]];
$reply_markup[] =[['text'=>"رجوع",'callback_data'=>"home"]];
$reply_markup = json_encode(['inline_keyboard'=>$reply_markup,]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
• مرحبا بك في قسم الازرار الشفافة ✨
*
- يمكنك اضافه ازرار شفافة او حذفها ( لا يمكنك حذف الازرار الاساسية ولاكن يمكنك تعديلها من قسم تعديل الازرار )
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"markdown",
 'reply_markup'=>$reply_markup,
]);
file_put_contents("edid/zerasase.txt","❌");
file_put_contents("edid/zerasaseon.txt","❌");
file_put_contents("set.txt",".");
$button['n'] = null;
$button['mode'] = null;
save($button);
  }
if($data ==  'zerasase' and $zerasase =='❌'){
$SALEHorders = count(file("akl/orders.txt"));
$zerasase = file_get_contents("edid/zerasase.txt");
@$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$coin = $cuser["userfild"]["$from_id"]["coin"];
$reply_markup[] =   [['text'=>"قسم الخدمات 📚",'callback_data'=>'null']];
$reply_markup[] =   [['text'=>"تجميع النقاط 💧",'callback_data'=>'null'],['text'=>"ضبط الحساب ⚙️️",'callback_data'=>'null']];
$reply_markup[] =   [['text'=>"استخدام كرت 🪪",'callback_data'=>'null'],['text'=>"تحويل رصيد 🗳",'callback_data'=>'null']];
$reply_markup[] =   [['text'=>"حالة الطلب 🛍",'callback_data'=>'null'],['text'=>"جميع طلباتي 🔰",'callback_data'=>'null']];
$reply_markup[] =   [['text'=>"قناة التحديثات 📣",'callback_data'=>'null'],['text'=>"الاحصائيات 📊",'callback_data'=>"null"]];
$reply_markup[] =   [['text'=>"شحن رصيدك 👜",'callback_data'=>'null'],['text'=>"تعليمات البوت 🌴",'callback_data'=>'null']];
$reply_markup[] =   [['text'=>"طلبات مكتمله : $SALEHorders 👥",'callback_data'=>'null']];
      foreach($button['codzer'] as $f5f7 => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>'zh|'.$f5f7]];
}
      foreach($button['buttons'] as $f5f7 => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>'zh|'.$f5f7]];
}
foreach($button['links'] as $f5f7 => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>'zh|'.$f5f7]];
}
$reply_markup[] = [['text'=>"+",'callback_data'=>"addbtn"]];
$reply_markup[] = [['text'=>"قسم تعديل الازرار",'callback_data'=>"serzer"],['text'=>"الازرار الاساسية : ✅",'callback_data'=>"zerasase"]];
$reply_markup[] =[['text'=>"رجوع",'callback_data'=>"home"]];
$reply_markup = json_encode(['inline_keyboard'=>$reply_markup,]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
• مرحبا بك في قسم الازرار الشفافة ✨
*
- يمكنك اضافه ازرار شفافة او حذفها ( لا يمكنك حذف الازرار الاساسية ولاكن يمكنك تعديلها من قسم تعديل الازرار )
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"markdown",
 'reply_markup'=>$reply_markup,
]);
file_put_contents("edid/zerasase.txt","✅");
file_put_contents("edid/zerasaseon.txt","✅");
file_put_contents("set.txt",".");
$button['n'] = null;
$button['mode'] = null;
save($button);
  }
$zhend = explode("|",$data);
if($data == "zh|$zhend[1]"){
$pri = $button['buttons'][$zhend[1]]['mo'];
$prilinks = $button['links'][$zhend[1]]['mo'];
$prilicodzer = $button['codzer'][$zhend[1]]['mo'];
$name = $button['buttons'][$zhend[1]]['name'];
$namezera = $button['codzer'][$zhend[1]]['name'];
$namelinks = $button['links'][$zhend[1]]['name'];
$Type = $button['buttons'][$zhend[1]]['Type'];
$Tyyrj = $button['codzer'][$zhend[1]]['tymyzr'];
if($Type == "EditMessageText"){
$offer = "تعديل الرساله";
}
if($Type == "sendMessage"){
$offer = "رساله جديده";
}
if($Type == "answercallbackquery"){
$offer = "همسة";
}
if($Tyyrj == "زر مختصر"){
$offer = "زر مختصر";
}
$fro = "محتوى نصي";
if(strpos($prilinks, "http://") === 0 || strpos($prilinks, "https://") === 0){
bot('editMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"*• اسم الزر : $namelinks*

- مسار الزر : home

نوع الزر : *رابط (*$prilinks*)*
",
      'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"markdown",
      'disable_web_page_preview'=> true ,
     'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"مسح الزر",'callback_data'=>'delete|'.$zhend[1]]],
[['text'=>"رجوع",'callback_data'=>"zrar"]],
]
])]);exit;}
if(strpos($offer, "زر ") === 0){
bot('editMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"*• اسم الزر : $namezera*

- مسار الزر : home

نوع الزر : *(زر مختصر)*
",
      'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"markdown",
      'disable_web_page_preview'=> true ,
     'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"مسح الزر",'callback_data'=>'delete|'.$zhend[1]]],
[['text'=>"رجوع",'callback_data'=>"zrar"]],
]
])]);exit;}
bot('editMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"*• اسم الزر : $name*

- مسار الزر : home

- نوع الزر : *$fro* *($pri)*
",
      'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"markdown",
      'disable_web_page_preview'=> true ,
     'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"مسح الزر",'callback_data'=>'delete|'.$zhend[1]]],
[['text'=>"طريقة عرض النص : ".$offer,'callback_data'=>'offer|'.$zhend[1]]],
[['text'=>"رجوع",'callback_data'=>"zrar"]],
]
])]);}
$EditMes=file_get_contents("edid/EditMes.txt");
if($EditMes==null){
$EditMes='EditMes';
}
$zoffer = explode("|",$data);
if($data == "offer|$zoffer[1]"){
$pri = $button['buttons'][$zoffer[1]]['mo'];
$prilinks = $button['links'][$zoffer[1]]['mo'];
$name = $button['buttons'][$zoffer[1]]['name'];
$namelinks = $button['links'][$zoffer[1]]['name'];
$Type = $button['buttons'][$zoffer[1]]['Type'];
$fro = "محتوى نصي";
if($EditMes == "EditMes"){
bot('answerCallbackQuery',[
   'callback_query_id'=>$update->callback_query->id,
        'text'=>'تعديل الرساله',
      ]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• اسم الزر : $name*

- مسار الزر : home

- نوع الزر : *$fro*


$pri
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"مسح الزر",'callback_data'=>'delete|'.$zhend[1]]],
[['text'=>"طريقة عرض النص : تعديل الرساله",'callback_data'=>'offer|'.$zhend[1]]],
[['text'=>"رجوع",'callback_data'=>"zrar"]],
]])
]);    
$iu = "EditMessageText";
$button['buttons'][$zoffer[1]]['Type'] = $iu;
file_put_contents('button.json', json_encode($button,128|34|256));
file_put_contents("edid/EditMes.txt","sendMessage");
}else{
if($EditMes == "sendMessage"){
bot('answerCallbackQuery',[
   'callback_query_id'=>$update->callback_query->id,
        'text'=>'رساله جديده',
      ]);
$iu ="sendMessage";
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• اسم الزر : $name*

- مسار الزر : home

- نوع الزر : *$fro*


$pri
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"مسح الزر",'callback_data'=>'delete|'.$zhend[1]]],
[['text'=>"طريقة عرض النص : رساله جديده",'callback_data'=>'offer|'.$zhend[1]]],
[['text'=>"رجوع",'callback_data'=>"zrar"]],
]])
]);    
$button['buttons'][$zoffer[1]]['Type'] = $iu;
file_put_contents('button.json', json_encode($button,128|34|256));
file_put_contents("edid/EditMes.txt","answercallbackquery");
}else{
if($EditMes == "answercallbackquery"){
bot('answerCallbackQuery',[
   'callback_query_id'=>$update->callback_query->id,
        'text'=>'همسة',
      ]);
file_put_contents("edid/EditMes.txt","EditMes");
$iu ="answercallbackquery";
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• اسم الزر : $name*

- مسار الزر : home

- نوع الزر : *$fro*


$pri
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"مسح الزر",'callback_data'=>'delete|'.$zhend[1]]],
[['text'=>"طريقة عرض النص : همسة",'callback_data'=>'offer|'.$zhend[1]]],
[['text'=>"رجوع",'callback_data'=>"zrar"]],
]])
]);    
$button['buttons'][$zoffer[1]]['Type'] = $iu;
file_put_contents('button.json', json_encode($button,128|34|256));
}}}}
///////حذف الزر////
$zdelete = explode("|",$data);
if($data == "delete|$zdelete[1]"){    
$name = $button['buttons'][$zdelete[1]]['name'];
$namelinks = $button['links'][$zdelete[1]]['name'];
$namezera = $button['codzer'][$zdelete[1]]['name'];
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>
"
*• اسم الزر : $name"."$namelinks "."$namezera

- تم مسح الزر
*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"zrar"]],
]
])
]);
unset($button['links'][$zdelete[1]]);
unset($button['buttons'][$zdelete[1]]);
unset($button['codzer'][$zdelete[1]]);
file_put_contents("button.json",json_encode($button,128|34|256));
}
if($data == "addbtn"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>
"*• ارسل اسم الزر الراد اضافته*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"zrar"]],
]
])
]);
$button['mode'] = 'add';
save($button,128|34|256);
exit;
}
if($text != '/start' and $text != null and $button['mode'] == 'add'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*• ارسل الان المحتوى المراد اضافته الى الزر *

- يمكنك ارسل كليشة نصية (يمكنك استخدام الماركداون) 
- يمكنك ارسل رابط مباشر يبدء (https://....) لكي يصبح الزر يحتوي على رابط
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
]);
$zhgo ='co:9u7ehcde55tak3m06
co:644ffh76sin4hf6ntk9b
co:gd53hd48dh6dmds4o
co:b89ckihdrsfdgfngu469
co:bfr68agaddhybvotrk7in
co:nd567bsa5onf90h4h6d
co:che57r7bsa5onmf906d
co:bxry8kcs56bbkahr6ydloj
co:opfrfbsfbbty66jgdfsrd
co:yatuno756dfbddk6srd';
file_put_contents("aeradd.txt","$zhgo");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"•  يمكنك وضع بعض الاضافات الى كليشه من خلال استخدام الاهاشتاكات التاليه :

1. `#name` : لوضع اسم شخص  
2. `#username` : لوضع اسم مستخدم الشخص مع اضافه @ 
3. `#id` : لوضع ايدي الشخص ",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*• يمكنك استخدام الازرار الاساسية في عمل الزر الجديد *

- لكي تحصل على كود الازرار ارسل '`مشاهدة الازرار`' بالرد على اي كليشة تحتوي على ازرار",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
]);
$button['n'] = $text;
$button['mode'] = 'addm';
save($button,128|34|256);
exit;}
if (strpos($text, "http://") === 0 || strpos($text, "https://") === 0 and $button['mode'] == 'addm'){
$code = $button['n'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*• تم حفظ الزر (رابط)*

- مسار الزر : home
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"zrar"]],
]
])
]);
$button['links'][$code]['name'] = $button['n'];
$button['links'][$code]['mo'] = $text;
$button['links'][$code]['Type'] = "رابط";
$button['n'] = null;
$button['mode'] = null;
save($button,128|34|256);
file_put_contents("sends.txt","");
exit;}
if($text != '/start' and $button['mode'] == 'addm' && $text != 'مشاهدة الازرار'){
$file = 'aeradd.txt';
$fileContent = file_get_contents($file);
if (strpos($fileContent, $text) !== false) {
$code = $button['n'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*• تم حفظ الزر (زر مختصر)*

- مسار الزر : home
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"zrar"]],
]
])
]);
if (strpos($text, 'co:9u7ehcde55tak3m06') !== false) {$datacodSALEH = "takemember";}
if (strpos($text, 'co:644ffh76sin4hf6ntk9b') !== false) {$datacodSALEH = "takecoinn";}
if (strpos($text, 'co:gd53hd48dh6dmds4o') !== false) {$datacodSALEH = "accont";}
if (strpos($text, 'co:b89ckihdrsfdgfngu469') !== false) {$datacodSALEH = "SALEH6";}
if (strpos($text, 'co:bfr68agaddhybvotrk7in') !== false) {$datacodSALEH = "sendcoin";}
if (strpos($text, 'co:nd567bsa5onf90h4h6d') !== false) {$datacodSALEH = "SALEH4";}
if (strpos($text, 'co:che57r7bsa5onmf906d') !== false) {$datacodSALEH = "SALEH5";}
if (strpos($text, 'co:bxry8kcs56bbkahr6ydloj') !== false) {$datacodSALEH = "SALEH2";}
if (strpos($text, 'co:opfrfbsfbbty66jgdfsrd') !== false) {$datacodSALEH = "SALEH1";}
if (strpos($text, 'co:yatuno756dfbddk6srd') !== false) {$datacodSALEH = "null";}
$button['codzer'][$code]['name'] = $button['n'];
$button['codzer'][$code]['mo'] = $datacodSALEH;
$button['codzer'][$code]['Type'] = "EditMessageText";
$button['codzer'][$code]['tymyzr'] = "زر مختصر";
$button['n'] = null;
$button['mode'] = null;
save($button,128|34|256);
file_put_contents("sends.txt","");
exit;}}
if($text != '/start' and $button['mode'] == 'addm' &&$text !=  'مشاهدة الازرار'){
$code = $button['n'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• تم حفظ الزر (محتوى نصي)*
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"zrar"]],
]
])
]);
$button['buttons'][$code]['name'] = $button['n'];
$button['buttons'][$code]['mo'] = $text;
$button['buttons'][$code]['Type'] = "EditMessageText";
$button['n'] = null;
$button['mode'] = null;
save($button,128|34|256);
file_put_contents("sends.txt","");
}
$st = "$start";
$price = $button['buttons'][$data]['mo'];
$price = str_replace('#name', "[$name](tg://user?id=$from_id)",$price);
$price = str_replace('#username', "[$use]",$price);
$price = str_replace('#id', "$from_id",$price);
$name = $button['buttons'][$data]['name'];
$Type = $button['buttons'][$data]['Type'];
if($Type == "EditMessageText"){
$reply_p[] = [['text'=>"رجوع",'callback_data'=>"panel"]];
$reply_p = json_encode(['inline_keyboard'=>$reply_p,]);
}
if($price != null){
if($Type == "answercallbackquery"){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
            'text' => "$price",
            'show_alert' =>true
        ]);exit;}}
if($price != null){
bot($Type,[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>$price,
      'reply_to_message_id'=>$message->message_id,

 'reply_markup'=>$reply_p,
      ]);
  }
date_default_timezone_set("Asia/Cero");
$getbot = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getme"))->result;
$me = $getbot->username;
$namebot = "@".$getbot->username;
$update = json_decode(file_get_contents('php://input'));
if($update->message){
$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}
$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;$type = $message->chat->type;
$message_id = $message->message_id;
$name = $message->from->first_name.' '.$message->from->last_name;
$user = strtolower($message->from->username);
$t =$message->chat->title; 
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = strtolower($up->from->username); 
$name = $up->from->first_name.' '.$up->from->last_name;
$message_id = $up->message->message_id;
$mes_id = $update->callback_query->inline_message_id; 
$data = $up->data;
}
 $replies  = json_decode(file_get_contents('replies.json'),true);
 $sttings = json_decode(file_get_contents("CEPO/hiim.json"),1);
function save_replies($array){
file_put_contents('replies.json', json_encode($array,128|34|256));
}
if($user != null){
$use = "@$user";
}else
if($user == null){
$use = "لا يوجد معرف";
}
if($data == "redd"){
      foreach($replies['replies'] as $f5f7 => $repliess){
$reply_markup[] = [['text'=>$repliess['name'],'callback_data'=>"null"],['text'=>"🗑",'callback_data'=>'add_red|'.$f5f7]];
}
foreach($replies['links'] as $f5f7 => $repliess){
$reply_markup[] = [['text'=>$repliess['name'],'url'=>$f5f7]];
}
$reply_markup[] = [['text'=>"+",'callback_data'=>"add_red"]];
$reply_markup[] =[['text'=>"• رجوع •",'callback_data'=>"home"]];
$reply_markup = json_encode(['inline_keyboard'=>$reply_markup,]);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*• مرحبا بك في قسم الردود 👮‍♀️*
- يمكنك اضافه ردود وحذفها ",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"markdown",
 'reply_markup'=>$reply_markup,
]);
file_put_contents("set.txt",".");
$replies['n'] = null;
$replies['mode'] = null;
save_replies($replies);
  }
$zdelete = explode("|",$data);
if($data == "add_red|$zdelete[1]"){    
$name = $replies['replies'][$zdelete[1]]['name'];
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>
"*
تم مسح الرد بنجاح
*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"redd"]],
]
])
]);
unset($replies['replies'][$zdelete[1]]);
file_put_contents("replies.json",json_encode($replies,128|34|256));
}
if($data == "add_red"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
• ارسل الكلمة الان .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"redd"]],
]
])
]);
$replies['mode'] = 'add';
save_replies($replies,128|34|256);
exit;
}
if($text != '/start' and $text != null and $replies['mode'] == 'add'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
• ارسل الرد الان , النص
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
]);
$replies['n'] = $text;
$replies['mode'] = 'addm';
save_replies($replies,128|34|256);
exit;
}
if($text != '/start' and $replies['mode'] == 'addm'){
$code = $replies['n'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*- تم حفط الرد بنجاح*
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• اضافة رد جديد •",'callback_data'=>"add_red"]],
[['text'=>"• رجوع •",'callback_data'=>"redd"]],
]
])
]);
$replies['replies'][$code]['name'] = $replies['n'];
$replies['replies'][$code]['mo'] = $text;
$replies['n'] = null;
$replies['mode'] = null;
save_replies($replies,128|34|256);
file_put_contents("sends.txt","");
}
if($replies['replies'][$text]!=null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$replies['replies'][$text]['mo'],
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
}
if($data=="dcnhrc"){
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id,
     'message_id'=>$message_id,
'text'=>"
• تم مسح رساله start والرجوع الى الرساله الاصلية !
 ",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>" • رجوع •  ",'callback_data'=>"home"]],
]
])
]);
$infosudo["info"]["SALEH"]="null";
unlink("start.txt");
file_put_contents("sudo.json", json_encode($infosudo));
}
if($data == "VFTGKKCSS"){
$infosudo["info"]["SALEH"]="start";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>"• ارسال الان الكليشه .

- يمكنك وضع بعض الاضافات الى كليشه الstart من خلال استخدام الاهاشتاكات التاليه :
  
1. `#nambot` : لوضع اسم  البوت
2. `#name` : لوضع اسم الشخص
3. `#id` : لوضع ايدي الشخص 
4. `#points` : لوضع عدد $cdiamlaadf الشخص

*يمكنك تعين نص ماركداون في البوت , عند كتابه معرف قناتك او معرفك قم بوضع [] بين المعرف .*", 
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •  ",'callback_data'=>"home"]],
]
])
]);
}
if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="start" and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"• مثال على الرساله : 
 
$text ",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"• تم الحفظ بنجاح",
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •  ",'callback_data'=>"home"]],
]
])
]);
$infosudo["info"]["SALEH"]="null";
file_put_contents("start.txt","$text");
file_put_contents("sudo.json", json_encode($infosudo));
}
if($message and $fwrmember=="✅" and $from_id != $admin){
bot('ForwardMessage',[
 'chat_id'=>$admin,
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
]);
}
if($data == "FAFAF" and $chat_id != $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
   'message_id'=>$message_id,
'text'=>"*• لا يمكنك الدخول الى هذه القسم !* ً",
'parse_mode'=>markdown,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •  ",'callback_data'=>"home"]],
]
])
]); return false;}
if($data ==  'FAFAF'){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
'text'=>"
*• مرحبا بك في قسم  جميع الرسائل التي يتم ارسالها الى البوت 🚸
*
",
'parse_mode'=>"MARKDOWN",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                   [['text'=>"نوع التوجية",'callback_data'=>'ppshshsj'],['text'=>"$fwrmember",'callback_data'=>'fwrmember']],
				   [['text'=>"• رجوع • ",'callback_data'=>'home']],
                     ]
               ])
			   ]);
			}
function FAFAF($chat_id,$message_id){	
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$fwrmember=$infosudo["info"]["fwrmember"];
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• مرحبا بك في قسم  جميع الرسائل التي يتم ارسالها الى البوت 🚸*",
'parse_mode'=>"MARKDOWN",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                   [['text'=>"نوع التوجية",'callback_data'=>'ppshshsj'],['text'=>"$fwrmember",'callback_data'=>'fwrmember']],
				   [['text'=>"• رجوع • ",'callback_data'=>'home']],
                     ]
               ])
			   ]);
			}
$info_tokens = json_decode($info_token);
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text           = $message->text;
$data = $up->data;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = $admin;
$bot_id = bot('getme',['bot'])->result->id;
$from_id     = $message->from->id;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;
mkdir("SALEHakl");
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = strtolower($up->from->username); 
$name = $up->from->first_name.' '.$up->from->last_name;
$message_id = $up->message->message_id;
$mes_id = $update->callback_query->inline_message_id; 
$data = $up->data;
} 
$gp_get = file_get_contents("SALEHakl/groups.txt");
$groups = explode("\n", $gp_get);
$SALEHakl6 = file_get_contents("SALEHakl/SALEHaklts.txt");
$pirvate = explode("\n",file_get_contents("SALEHakl/pirvate.txt"));
$gtobn = explode("\n",file_get_contents("SALEHakl/groups.txt"));
$forward = $update->message->forward_from;
$SALEHQQPl = count($pirvate)-1;
$SALEHQQP = count($groups)-1;
$AMLMP = $SALEHQQP + $SALEHQQPl;
if($data == "AMAMALT1"){
    file_put_contents("SALEHakl/SALEHaklts.txt","SALEHaklts");
  bot('editmessagetext',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
    'text'=>"
• ارسال الان الرساله !
",
'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"bbcybhu"]],
]])
]);
}
if($message and $SALEHakl6 == "SALEHaklts" and $from_id == $sudo && $text !='/start' ){
	        bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"• جاري الاذاعه .....",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
          'reply_to_message_id'=>$message->message_id
]);
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("SALEHakl/SALEHaklts.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"
• تم الاذاعة بنجاح 🎉

• الاعضاء الذين شاهدو الاذاعه {*$SALEHQQPl*} عضو 
• الكروبات الذي تم الاذاعه لهم {*$SALEHQQP*}

• عدد العضاء الكلي : {*$AMLMP*}
",
                'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])
]); return false;
}
if($text and $type == "private" and !in_array($from_id, $pirvate)){
file_put_contents("SALEHakl/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and !in_array($chat_id, $groups)) {
file_put_contents("SALEHakl/groups.txt", "$chat_id\n",FILE_APPEND);
}
$bot_id = bot('getme',['bot'])->result->id;
$new = $message->new_chat_member;
if($new and $new->id == $bot_id) {
file_put_contents("SALEHakl/groups.txt", "$chat_id\n",FILE_APPEND);
}
if($data == "AMAMALT2"){
    file_put_contents("SALEHakl/SALEHaklts.txt","SALEHakl3ff");
  bot('editmessagetext',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
    'text'=>"
• ارسال الان الرساله !
",
'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"bbcybhu"]],
]])
]);
}
if($message and $SALEHakl6 == "SALEHakl3ff" and $from_id == $sudo && $text !='/start' ){
	        bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"• جاري الاذاعه .....",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
          'reply_to_message_id'=>$message->message_id
]);
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("SALEHakl/SALEHaklts.txt");
} 
$SALEHQQPl = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"
• تم الاذاعة بنجاح 🎉

• الاعضاء الذين شاهدو الاذاعه {*$SALEHQQPl*} عضو 
• الكروبات الذي تم الاذاعه لهم {*$SALEHQQP*}

• عدد العضاء الكلي : {*$AMLMP*}
",
                'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])
]); return false;
}
if($data == "AMAMALT3"){
    file_put_contents("SALEHakl/SALEHaklts.txt","SALEHakl3");
  bot('editmessagetext',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
    'text'=>"
• ارسال الان الرساله !
",
'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"bbcybhu"]],
]])
]);
}
if($message and $SALEHakl6 == "SALEHakl3" and $from_id == $sudo && $text !='/start' ){
	        bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"• جاري الاذاعه .....",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
          'reply_to_message_id'=>$message->message_id
]);
for($i=0;$i<count($gtobn);$i++){
bot('forwardMessage',[
 'chat_id'=>$gtobn[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("SALEHakl/SALEHaklts.txt");
} 
$SALEHQMMK = count($gtobn)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"
• تم الاذاعة بنجاح 🎉

• الاعضاء الذين شاهدو الاذاعه {*$SALEHQMMK*} عضو 
• الكروبات الذي تم الاذاعه لهم {*$SALEHQQP*}

• عدد العضاء الكلي : {*$AMLMP*}
",
                'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])
]); return false;
}
if($data == "AMAlMAL"){
	file_put_contents("SALEHakl/SALEHaklts.txt","V5YY5");
  bot('editmessagetext',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
    'text'=>"*
• ارسال الان الرساله ( نص او جميع الميديا ) 
• يمكنك استخدام كود جاهز في الاذاعه او يمكنك استخدام الماركداون*",
'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"bbcybhu"]],
]])
]);
  }
if($message and $SALEHakl6 == "V5YY5" and $from_id == $sudo && $text !='/start' ){
	        bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"• جاري الاذاعه .....",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
          'reply_to_message_id'=>$message->message_id
]);
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("SALEHakl/SALEHaklts.txt","juMSALEHQQPl");
} 
$SALEHQQPl = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"
• تم الاذاعة بنجاح 🎉

• الاعضاء الذين شاهدو الاذاعه {*$SALEHQQPl*} عضو 
• الكروبات الذي تم الاذاعه لهم {*$SALEHQQP*}

• عدد العضاء الكلي : {*$SALEHQQPl*}
",
                'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])
]); return false;
}
}
if($data == "AMAMALp"){
	file_put_contents("SALEHakl/SALEHaklts.txt","V5YY5");
  bot('editmessagetext',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
    'text'=>"*
• ارسال الان الرساله ( نص او جميع الميديا ) 
• يمكنك استخدام كود جاهز في الاذاعه او يمكنك استخدام الماركداون*",
'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"bbcybhu"]],
]])
]);
  }
if($message and $SALEHakl6 == "V5YY5" and $from_id == $sudo && $text !='/start' ){
	        bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"• جاري الاذاعه .....",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
          'reply_to_message_id'=>$message->message_id
]);
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("SALEHakl/SALEHaklts.txt","BBI4FD");
} 
$SALEHQQPl = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"
• تم الاذاعة بنجاح 🎉

• الاعضاء الذين شاهدو الاذاعه {*$SALEHQQPl*} عضو 

• عدد العضاء الكلي : {*$SALEHQQPl*}
",
                'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])
]); return false;
}
if($data == "SALEHAZLpm"){
	file_put_contents("SALEHakl/SALEHaklts.txt","ECOZTS");
  bot('editmessagetext',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
    'text'=>"*
• ارسال الان الرساله ( نص او جميع الميديا ) 
• يمكنك استخدام كود جاهز في الاذاعه او يمكنك استخدام الماركداون*",
'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"bbcybhu"]],
]])
]);
  }
if($message and $SALEHakl6 == "ECOZTS" and $from_id == $sudo && $text !='/start' ){
	        bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"• جاري الاذاعه .....",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
          'reply_to_message_id'=>$message->message_id
]);
    for ($i=0; $i<count($gtobn); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$gtobn[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("SALEHakl/SALEHaklts.txt","BBI4FD");
} 
$gtobnSALEH = count($gtobn)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"
• تم الاذاعة بنجاح 🎉

• الكروبات الذين شاهدو الاذاعه {*$gtobnSALEH*} كروب

• عدد الكروبات الكلي : {*$gtobnSALEH*}
",
                'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])
]); return false;
}
$gdbyj =file_get_contents("gdbyj $alnhjm.txt");
if($data =='bbcybhu' && $gdbyj == null){
	  	$vvcvhg = $SALEHQQPl + $SALEHQQP;
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id,
     'message_id'=>$message_id,
        'text'=>"
        *• مرحبا بك في قسم الاذاعه 🔥
*
- عدد المسخدمين الكلي :* $vvcvhg*
- عدد الخاص : *$SALEHQQPl*
- عدد الكروبات والقنوات :* $SALEHQQP*

- عدد المحظورين : *0*
",
                'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"تثبيت الاذاعه : ❌",'callback_data'=>"MLpAPK"]],
[['text'=>"اذاعه للكل",'callback_data'=>"AMAlMAL"],['text'=>"اذاعه توجيه للكل",'callback_data'=>"AMAMALT1"]],
[['text'=>"اذاعه للخاص",'callback_data'=>"AMAMALp"],['text'=>"اذاعه توجيه للخاص",'callback_data'=>"AMAMALT2"]],
[['text'=>"اذاعه كروبات",'callback_data'=>"SALEHAZLpm"],['text'=>"اذاعه توجيه للكروبات",'callback_data'=>"AMAMALT3"]],
[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])
]);
}
if($data == "bbcybhu" && $gdbyj == "on") {
$vvcvhg = $SALEHQQPl + $SALEHQQP;
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id,
     'message_id'=>$message_id,
        'text'=>"
        *• مرحبا بك في قسم الاذاعه 🔥
*
- عدد المسخدمين الكلي :* $vvcvhg*
- عدد الخاص : *$SALEHQQPl*
- عدد الكروبات والقنوات :* $SALEHQQP*

- عدد المحظورين : *0*
",
                'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"تثبيت الاذاعه : ✅",'callback_data'=>"MLAPK"]],
[['text'=>"اذاعه للكل",'callback_data'=>"AMAlMAL"],['text'=>"اذاعه توجيه للكل",'callback_data'=>"AMAMALT1"]],
[['text'=>"اذاعه للخاص",'callback_data'=>"AMAMALp"],['text'=>"اذاعه توجيه للخاص",'callback_data'=>"AMAMALT2"]],
[['text'=>"اذاعه كروبات",'callback_data'=>"SALEHAZLpm"],['text'=>"اذاعه توجيه للكروبات",'callback_data'=>"AMAMALT3"]],
[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])
]);
}
if($data == "bbcybhu" && $gdbyj == "off") {
  	$vvcvhg = $SALEHQQPl + $SALEHQQP;
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id,
     'message_id'=>$message_id,
        'text'=>"
        *• مرحبا بك في قسم الاذاعه 🔥
*
- عدد المسخدمين الكلي :* $vvcvhg*
- عدد الخاص : *$SALEHQQPl*
- عدد الكروبات والقنوات :* $SALEHQQP*

- عدد المحظورين : *0*
",
                'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"تثبيت الاذاعه : ❌",'callback_data'=>"MLpAPK"]],
[['text'=>"اذاعه للكل",'callback_data'=>"AMAlMAL"],['text'=>"اذاعه توجيه للكل",'callback_data'=>"AMAMALT1"]],
[['text'=>"اذاعه للخاص",'callback_data'=>"AMAMALp"],['text'=>"اذاعه توجيه للخاص",'callback_data'=>"AMAMALT2"]],
[['text'=>"اذاعه كروبات",'callback_data'=>"SALEHAZLpm"],['text'=>"اذاعه توجيه للكروبات",'callback_data'=>"AMAMALT3"]],
[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])
]);
}
if($data == "MLpAPK") {
$vvcvhg = $SALEHQQPl + $SALEHQQP;
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id,
     'message_id'=>$message_id,
        'text'=>"
        *• مرحبا بك في قسم الاذاعه 🔥
*
- عدد المسخدمين الكلي :* $vvcvhg*
- عدد الخاص : *$SALEHQQPl*
- عدد الكروبات والقنوات :* $SALEHQQP*

- عدد المحظورين : *0*
",
                'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"تثبيت الاذاعه : ✅",'callback_data'=>"MLAPK"]],
[['text'=>"اذاعه للكل",'callback_data'=>"AMAlMAL"],['text'=>"اذاعه توجيه للكل",'callback_data'=>"AMAMALT1"]],
[['text'=>"اذاعه للخاص",'callback_data'=>"AMAMALp"],['text'=>"اذاعه توجيه للخاص",'callback_data'=>"AMAMALT2"]],
[['text'=>"اذاعه كروبات",'callback_data'=>"SALEHAZLpm"],['text'=>"اذاعه توجيه للكروبات",'callback_data'=>"AMAMALT3"]],
[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])
]);
file_put_contents("gdbyj $alnhjm.txt","on");
}
if($data == "MLAPK") {
$vvcvhg = $SALEHQQPl + $SALEHQQP;
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id,
     'message_id'=>$message_id,
        'text'=>"
        *• مرحبا بك في قسم الاذاعه 🔥
*
- عدد المسخدمين الكلي :* $vvcvhg*
- عدد الخاص : *$SALEHQQPl*
- عدد الكروبات والقنوات :* $SALEHQQP*

- عدد المحظورين : *0*
",
                'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"تثبيت الاذاعه : ❌",'callback_data'=>"MLpAPK"]],
[['text'=>"اذاعه للكل",'callback_data'=>"AMAlMAL"],['text'=>"اذاعه توجيه للكل",'callback_data'=>"AMAMALT1"]],
[['text'=>"اذاعه للخاص",'callback_data'=>"AMAMALp"],['text'=>"اذاعه توجيه للخاص",'callback_data'=>"AMAMALT2"]],
[['text'=>"اذاعه كروبات",'callback_data'=>"SALEHAZLpm"],['text'=>"اذاعه توجيه للكروبات",'callback_data'=>"AMAMALT3"]],
[['text'=>"• رجوع •",'callback_data'=>"home"]],
]])
]);
file_put_contents("gdbyj $alnhjm.txt","off");}
$d = date('D');
$day = explode("\n",file_get_contents($d.".txt"));
$todayuser = count($day);
if($d == "Sat"){
unlink("Fri.txt");
}
if($d == "Sun"){
unlink("Sat.txt");
}
if($d == "Mon"){
unlink("Sun.txt");
}
if($d == "Tue"){
unlink("Mon.txt");
}
if($d == "Wed"){
unlink("The.txt");
}
if($d == "Thu"){
unlink("Wedtxt");
}
if($d == "Fri"){
unlink("Thu.txt");
}
if($message and !in_array($from_id, $day)){ 
file_put_contents($d.".txt",$from_id. "\n",FILE_APPEND);
}
 $dd = explode("\n",file_get_contents("sudo/member.txt"));
$k =1;
foreach (array_slice($dd, -6, 5,true)  as $sendmgddyessage) {
$sendmgddyessag = "[$sendmgddyessage](tg://user?id=$sendmgddyessage)";
$a = $a.$k.". ".$sendmgddyessag."\n";
$k++;
}
if($data== "sendmgddyessage"){
  $all = count($user["channellist"]);
  $order = count($user["channellist"]);
  $SALEHyui = $cunte + $order;
bot('EditMessageText',[
'chat_id'=>$chat_id,
     'message_id'=>$message_id,
'text'=>"
*مرحبا بك في قسم الاحصائيات 📊*

• عدد المسخدمين الكلي : *$SALEHyui*
- عدد المستخدمين في الخاص : *$cunte*
- عدد الكروبات والقنوات : *$order*

• عدد المحظورين : *$countban*

• عدد المتفاعلين اليوم : *$todayuser*
- قائمة اخر الاعضاء الذين شتركوا :
$a",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
 'reply_to_message_id'=>$message->message_id, 
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
[['text'=>"مسح قائمة الحظر",'callback_data'=>"unbanall"]],
[['text'=>"حظر شخص",'callback_data'=>"ban"],['text'=>" الغاء حظر شخص",'callback_data'=>"unban"]],
[['text'=>" قسم الاذاعة",'callback_data'=>"bbcybhu"]],
[['text'=>"• رجوع •",'callback_data'=>'home']],
]])
]);
}
  if($data ==  'agbary' ){
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id,
     'message_id'=>$message_id,
        'text'=>"*• مرحبا بك في قسم الاشتراك الاجباري 💫*

اليك التحكم عزيزي 🔥",
                'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"إضافة قناة",'callback_data'=>"addchannel"],['text'=>"مسح قناة",'callback_data'=>"delchannel"]],
[['text'=>"تعيين رسالة الاشتراك الاجباري ",'callback_data'=>"klish_sil"]],
[['text'=>"ماركدون : $silk ",'callback_data'=>"silk"]],
[['text'=>"عرض قنوات الاشتراك الاجباري ",'callback_data'=>"viwechannel"]],
[['text'=>" العودة  ",'callback_data'=>"home"]],
]])
]);
}
$bot_id = bot('getme',['bot'])->result->id;
$chat_id = $message->chat->id;
$new = $message->new_chat_member;
if($new and $new->id == $bot_id) {
 file_put_contents("t.txt",$chat_id);
}
$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;$type = $message->chat->type;
$message_id = $message->message_id;
$name = $message->from->first_name.' '.$message->from->last_name;
$user = strtolower($message->from->username);
$t =$message->chat->title; 
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = strtolower($up->from->username); 
$name = $up->from->first_name.' '.$up->from->last_name;
$message_id = $up->message->message_id;
$mes_id = $update->callback_query->inline_message_id; 
$data = $up->data;
}
if(isset($update->inline_query)){
$chat_id = $update->inline_query->chat->id;
$from_id = $update->inline_query->from->id;
$name = $update->inline_query->from->first_name.' '.$update->inline_query->from->last_name;
$text_inline = $update->inline_query->query;
$mes_id = $update->inline_query->inline_message_id; 
$user = strtolower($update->inline_query->from->username); 
}
$sudo = $admin;
$infosudo = json_decode(file_get_contents("sudo.json"),true);
if($data == "VFTGKKCSS"){
$infosudo["info"]["SALEH"]="start";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
     'message_id'=>$message_id,
'text'=>"• ارسال الان الكليشه .

- يمكنك وضع بعض الاضافات الى كليشه الstart من خلال استخدام الاهاشتاكات التاليه :
  
1. `#nambot` : لوضع اسم  البوت
2. `#name` : لوضع اسم الشخص
3. `#id` : لوضع ايدي الشخص 
4. `#points` : لوضع عدد $cdiamlaadf الشخص

*يمكنك تعين نص ماركداون في البوت , عند كتابه معرف قناتك او معرفك قم بوضع [] بين المعرف .*", 
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •  ",'callback_data'=>"home"]],
]
])
]);
}
if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="start" and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"• مثال على الرساله : 
 
$text ",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"• تم الحفظ بنجاح",
'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• رجوع •  ",'callback_data'=>"home"]],
]
])
]);
$infosudo["info"]["SALEH"]="null";
$infosudo["info"]["start"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
}

$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;$type = $message->chat->type;
$message_id = $message->message_id;
$name = $message->from->first_name.' '.$message->from->last_name;
$user = strtolower($message->from->username);
$t =$message->chat->title; 
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = strtolower($up->from->username); 
$name = $up->from->first_name.' '.$up->from->last_name;
$message_id = $up->message->message_id;
$mes_id = $update->callback_query->inline_message_id; 
$data = $up->data;
}
if(isset($update->inline_query)){
$chat_id = $update->inline_query->chat->id;
$from_id = $update->inline_query->from->id;
$name = $update->inline_query->from->first_name.' '.$update->inline_query->from->last_name;
$text_inline = $update->inline_query->query;
$mes_id = $update->inline_query->inline_message_id; 
$user = strtolower($update->inline_query->from->username); 
}
if($data == "home" and in_array($from_id,$sudo)){
$infosudo["info"]["SALEH"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
if($data == "fwrmember"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$fwrmember=$infosudo["info"]["fwrmember"];
if($fwrmember=="✅"){
$infosudo["info"]["fwrmember"]="❎";
}
if($fwrmember=="❎"){
$infosudo["info"]["fwrmember"]="✅";
}
file_put_contents("sudo.json", json_encode($infosudo));
FAFAF($chat_id,$message_id);
}
if($data == "tnbih"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$tnbih=$infosudo["info"]["tnbih"];
if($tnbih=="✅"){
$infosudo["info"]["tnbih"]="❎";
}
if($tnbih=="❎"){
$infosudo["info"]["tnbih"]="✅";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
if($data == "SALEH987"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$SALEH987=$infosudo["info"]["SALEH987"];
if($tnbih=="✅"){
$infosudo["info"]["tnbih"]="❎";
}
if($SALEH987=="❎"){
$infosudo["info"]["SALEH987"]="✅";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
if($data == "silk"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$skil=$infosudo["info"]["silk"];
if($skil=="✅"){
$infosudo["info"]["silk"]="❎";
}
if($skil=="❎"){
$infosudo["info"]["silk"]="✅";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
if($data == "allch"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$allch=$infosudo["info"]["allch"];
if($allch=="✅"){
$infosudo["info"]["allch"]="❎";
}
if($allch=="❎"){
$infosudo["info"]["allch"]="✅";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}   
$up = $update->callback_query;
$data = $up->data;
$forward_from = $update->message->forward_from;
$forward_from_id = $forward_from->id;
$forward_from_username = $forward_from->username;
$forward_from_first_name = $forward_from->first_name;
$reply = $update->message->reply_to_message->forward_from->id;
$reply_username = $update->message->reply_to_message->forward_from->username;
$reply_first = $update->message->reply_to_message->forward_from->first_name;
$membercall = $update->callback_query->id;
$tc = $update->message->chat->type;
$infobot=explode("\n",file_get_contents("info.txt"));
$usernamebot=$infobot['1'];
$channel = str_replace('@',file_get_contents("data/channelyes.txt"));
$admin = $admin;
$channelcode = str_replace('@',file_get_contents("data/channelcode.txt"));
$coins_start=file_get_contents("data/coins_start.txt");
$channel = str_replace('@',file_get_contents("data/channelyes.txt"));
$admin = $admin;
$channelcode = str_replace('@',file_get_contents("data/channelcode.txt"));
$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
$tch = $forchannel->result->status;
$forchannelq = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
$tchq = $forchannelq->result->status;
function getChatMembersCount($chat_id,$token) {
  $url = 'https://api.telegram.org/bot'.$token.'/getChatMembersCount?chat_id=@'.$chat_id;
  $result = file_get_contents($url);
  $result = json_decode ($result);
  $result = $result->result;
  return $result;
}
$username_admin=file_get_contents("data/username_admin.txt");
$admin = $admin;
$Dev = array("$admin");
$admin = $admin;
mkdir("data");
@$user = json_decode(file_get_contents("data/user.json"),true);
@$juser = json_decode(file_get_contents("data/$from_id.json"),true);
@$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
if(!in_array($from_id, $user["userlist"]) == true) {
$user["userlist"][]= $from_id;
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);}
$e=explode("|", $data) ;
$e1=str_replace("/start",null,$text); 
$akl = json_decode(file_get_contents("akl/akl.json"),true);
if($text == "/start$e1" and is_numeric($e1)) {
	if($chat_id == $sudo or $chat_id == $admin ) {
  $akl['HACKER'][$from_id] = "I";
  $akl['HACK'][$from_id] = str_replace(" ", null, $e1);
  SETJSON($akl);
}}
$akl = json_decode(file_get_contents("akl/akl.json"),true);
$Api_Tok = $akl["sToken"];
$usrbot = bot("getme")->result->username;
define("USR_BOT",$usrbot);
function SETJSON($INPUT){if($INPUT != NULL || $INPUT != "") {$F = "akl/akl.json";$N = json_encode($INPUT, JSON_PRETTY_PRINT);file_put_contents($F, $N);}
}
$info = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=".$from_id), true);
$group = $info['result']['status'];
if($message and $group == "creator"){
exit;
}
if(in_array($from_id, $user["blocklist"])) {
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"انت محظور من البوت",
'reply_markup'=>json_encode(['KeyboardRemove'=>[
],'remove_keyboard'=>true])]);}
$pro=$projson["info"]["pro"];
$SALEHorders = count(file("akl/orders.txt"));
$zr = json_decode(file_get_contents("zr.json"),true);
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = strtolower($up->from->username); 
$name = $up->from->first_name.' '.$up->from->last_name;
$message_id = $up->message->message_id;
$mes_id = $update->callback_query->inline_message_id; 
$data = $up->data;
}
if(isset($update->inline_query)){
$chat_id = $update->inline_query->chat->id;
$from_id = $update->inline_query->from->id;
$name = $update->inline_query->from->first_name.' '.$update->inline_query->from->last_name;
$text_inline = $update->inline_query->query;
$mes_id = $update->inline_query->inline_message_id; 
$user = strtolower($update->inline_query->from->username); 
$usr = strtolower($update->inline_query->from->username); 
}
$cdiamlaadf=file_get_contents("edid/cdiamlaadf.txt");
if($cdiamlaadf==null){
$cdiamlaadf="نقاط";
}
$cdiamlao=file_get_contents("edid/cdiamlaadf.txt");
if($cdiamlao==null){
$cdiamlao="نقاطك";
}
$cdiamlanoo=file_get_contents("edid/cdiamlaadf.txt");
if($cdiamlanoo==null){
$cdiamlanoo="نقطة";
}
$baageel = file_get_contents("baageel.txt");
if($data and $baageel =="❎" and $chat_id != $admin ){
 bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "البوت تحت الصيانة",
            'show_alert' =>false
         ]);return false;}
$sec = time();
$madey = json_decode(file_get_contents("time.json"),true);
$offdata =file_get_contents("SALEH/offdata $from_id.txt");
if($data && $offdata == null){
bot('answercallbackquery',[
'callback_query_id'=>$update->callback_query->ad,
'text'=>"off",
'show_alert'=>true,
]);
file_put_contents("SALEH/offdata $chat_id.txt","SALEH");
}
if($text && $offdata == 'SALEH'){unlink("SALEH/offdata $chat_id.txt");}
if($data and $offdata == 'SALEH' && $madey[$from_id]["time"] >= $sec and $chat_id !=$admin){
bot('answercallbackquery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"• لا يمكنك الضغط باستمرار انتضر 3 ثواني ⚙️
",
'show_alert'=>true,
]);
unlink("SALEH/offdata $chat_id.txt");
die;
} else {
$madey[$from_id]["time"] = time()+3;
file_put_contents("time.json", json_encode($madey));
file_put_contents("SALEH/offdata $chat_id.txt","SALEH");
}
$SALEH = json_decode(file_get_contents("SALEH.json"),true);
if($SALEH["MATH"][$from_id] != null) {
	if(explode("|", $data)[1] == $SALEH["MATH"][$from_id]) {
		bot("editMessagetext",[
                "chat_id" => $chat_id,
                "message_id" => $message_id, 
                "text" => "
                *
• تم التحقق من الحساب 👜
• تم التحقق البوت ارسل /start * 🌐
                ",
               "reply_to_message_id" => $message_id, 
               "parse_mode" => "markdown",  
            ]); 
            $SALEH["ME"][$from_id] = True ;
            unset($SALEH["MATH"][$from_id]);
            $SALEH= json_encode($SALEH,32|128|265);
            file_put_contents("SALEH.json",$SALEH);  
		} else {
			unset($SALEH["MATH"][$from_id]);
            $SALEH= json_encode($SALEH,32|128|265);
            file_put_contents("SALEH.json",$SALEH);  
            
			} 
	} 

if ($SALEH["ME"][$from_id] != true) {
    $n = rand(0, 10);
    $v = rand(0, 10);
    $s = $n + $v;
    $b1 = rand(0, 10);
    $b2 = rand(0, 10);
    $b3 = rand(0, 10);
    $g = rand(1,3);
    if($g == 1){
    	$b1 = $s;
    }elseif($g == 2){
    	$b2 = $s;
    }elseif ($g == 3){
    	$b3 = $s;
    }
    bot("sendmessage", [
        "chat_id" => $chat_id,
        "text" => "
            * 
• حل هذه المعادله لفتح بوت ناميرو فلور 🌐
Namero Flor 👥
----------------------------
⚙️- $n + $v 🗳
*
        ",
        "reply_to_message_id" => $message_id,
        "parse_mode" => "markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [
                    ['text' => " $b1 ", 'callback_data' => "bb|$b1"]],
                    [['text' => " $b2 ", 'callback_data' => "bb|$b2"]],
                    [['text' => " $b3 ", 'callback_data' => "bb|$b3"]
                ],
            ]
        ])
    ]);

    $SALEH["MATH"][$from_id] = $s;
    $SALEH = json_encode($SALEH, JSON_PRETTY_PRINT);
    file_put_contents("SALEH.json", $SALEH);
    
    return false;
}
$tc = $update->message->chat->type;
if($tc == 'group' or $tc == 'supergroup'){bot('LeaveChat',['chat_id'=>$chat_id,'message_id'=>$message_id,]);return false;}
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = strtolower($up->from->username); 
$name = $up->from->first_name.' '.$up->from->last_name;
$message_id = $up->message->message_id;
$mes_id = $update->callback_query->inline_message_id; 
$data = $up->data;
}
if(isset($update->inline_query)){
$chat_id = $update->inline_query->chat->id;
$from_id = $update->inline_query->from->id;
$name = $update->inline_query->from->first_name.' '.$update->inline_query->from->last_name;
$text_inline = $update->inline_query->query;
$mes_id = $update->inline_query->inline_message_id; 
$user = strtolower($update->inline_query->from->username); 
}
$nambot=file_get_contents("edid/nambot.txt");
if($nambot==null){
$nambot="Namero Flor";
}
$start =file_get_contents("start.txt");
if($start==null){
$start="• مرحبا بك في بوت $nambot 👜
💧] $cdiamlao : #points 
🌴] ايديك : #id";
}
$start1 =file_get_contents("start.txt");
if($start1==null){
$start1="• مرحبا بك في بوت $nambot 👜
💧] $cdiamlao : #points 
🌴] ايديك : #id";
}
$coins_start=file_get_contents("edid/coinsstart.txt");
if($coins_start==null){
$coins_start=15;
}
$adna_coins=file_get_contents("data/adna_coins.txt");
if($adna_coins==null){
$adna_coins=40;
}
$day_coins=file_get_contents("data/day_coins.txt");
if($day_coins==null){
$day_coins=20;
}
$work_add_day=file_get_contents("edid/work_add_day.txt");
if($work_add_day==null){
$work_add_day=10;
}
$add_ado=file_get_contents("edid/addado.txt");
if($add_ado==null){
$add_ado='12';
}
$add_aoc=file_get_contents("edid/add_aoc.txt");
if($add_aoc==null){
$add_aoc='5';
}
$chadmin=file_get_contents("edid/chadmin.txt");
if($chadmin==null){
$chadmin='@HJ_I_N';
}
$chadin = str_replace("@","",$chadmin);
$acont_admin=file_get_contents("edid/acont_admin.txt");
if($acont_admin==null){
$acont_admin="@s_p_p1";
}
$msgasro=file_get_contents("edid/msgasro.txt");
if($msgasro==null){
$msgasro="• مرحبا بك عزيزي $name 🌴

• في قسم شروط استخدام بوت $nambot 🌴
• نحن هنا في بوت Namero Flor نقدم لك العيد من خدمات الرش مثل فيسبوك • تيك توك • انستجرام • يوتيوب • تويتر • تلجرام • كواي • نتفلكس • سناب شات 🔰
• وايضا يجب عليك الثقه والامان لان بوتات Namero Flor لديها الكثير من المستخدمين الذين يثقون في خدماتنا ويجب علينا ايضا حمايه معلومات وخصوصيه المستخدمين من المنتحلين 🗣
• ويجب العلم ايضا ان بوتات خدمات Namero Flor تعطي لك الخدمات بارخص الاسعار لدينا ويتم تجربه كفائه الخدمات قبل عرضها للمستدمين 📜
• ويرجي العلم ايضا في حالة طلب طلبك يرجي الانتباه للطلب لانك اذا طلبت يتم خصم نقاط الخدمه من اابوت تلقائي ولا يوجد استرداد مره اخري او استبدال فيرجي الانتباه لطلبك بعنايه 🛍
• قناتنا الاساسيه هنا [$chadmin] 
• احزرو من المتحلين لانه لا يوجد لدينا سوي هذه القناه 
• مبرمج البوت  [$acont_admin] 

✨ شكرا لثقتك فينا ✨
";
}
$msgasar=file_get_contents("edid/msgasar.txt");
if($msgasar==null){
$msgasar="• مرحبا بك عزيزي $name 🌴
• اسعار نقاط بوت Namero Flor كالتالي 🗳
----------------------------
1- 1000 نقطه 1$ + 50 هديه 
2- 2000 نقطه 2$ + 75 هديه 
3- 3000 نقطه 3$ + 100 هديه 
4- 5000 نقطه 5$ + 500 هديه 
----------------------------
» نستقبل الدفع عبر الطرق التاليه 👇🏽

» 1 فودافون كاش 📂
» 2 بايير 📂
» 3 بينانس 📂
» 4 فاست بي 📂

» للشراء تواصل هنا 👍 $acont_admin";
}
$msgaspat=file_get_contents("edid/msgaspat.txt");
if($msgaspat==null){
$msgaspat="
*تم تنفيذ طلب جديد  ✅

معلومات الطلب
            -----------------------    *
ايدي العضو : #id
اسم الخدمه : #nameService
سعر الطلب : #coinService
رقم الطلب : #numberall";
}
$coin = $cuser["userfild"]["$from_id"]["coin"];
if($coin==null){
$coin='0';
}
$nzambot=file_get_contents("edid/nzambot.txt");
if($nzambot==null){
$nzambot='❌';
}
$aklSALEHnm1=file_get_contents("edid/aklSALEHnm1.txt");
if($aklSALEHnm1==null){
$aklSALEHnm1="قسم الخدمات 📚";
}
$aklSALEHnm2=file_get_contents("edid/aklSALEHnm2.txt");
if($aklSALEHnm2==null){
$aklSALEHnm2="تجميع النقاط 💧";
}
$aklSALEHnm3=file_get_contents("edid/aklSALEHnm3.txt");
if($aklSALEHnm3==null){
$aklSALEHnm3="ضبط الحساب ⚙️️";
}
$aklSALEHnm4=file_get_contents("edid/aklSALEHnm4.txt");
if($aklSALEHnm4==null){
$aklSALEHnm4="استخدام كرت 🪪";
}
$aklSALEHnm5=file_get_contents("edid/aklSALEHnm5.txt");
if($aklSALEHnm5==null){
$aklSALEHnm5="تحويل رصيد 🗳";
}
$aklSALEHnm6=file_get_contents("edid/aklSALEHnm6.txt");
if($aklSALEHnm6==null){
$aklSALEHnm6="حالة الطلب 🛍";
}
$aklSALEHnm7=file_get_contents("edid/aklSALEHnm7.txt");
if($aklSALEHnm7==null){
$aklSALEHnm7="جميع طلباتي 🔰";
}
$aklSALEHnm8=file_get_contents("edid/aklSALEHnm8.txt");
if($aklSALEHnm8==null){
$aklSALEHnm8="قناة التحديثات 📣";
}
$aklSALEHnm33=file_get_contents("edid/aklSALEHnm33.txt");
if($aklSALEHnm33==null){
$aklSALEHnm33="الاحصائيات 📊";
}
$aklSALEHnm9=file_get_contents("edid/aklSALEHnm9.txt");
if($aklSALEHnm9==null){
$aklSALEHnm9="شحن رصيدك 👜";
}
$aklSALEHnm10=file_get_contents("edid/aklSALEHnm10.txt");
if($aklSALEHnm10==null){
$aklSALEHnm10="تعليمات البوت 🌴";
}
$aklSALEHnm11=file_get_contents("edid/aklSALEHnm11.txt");
if($aklSALEHnm11==null){
$aklSALEHnm11="طلبات مكتمله : $SALEHorders 👥";
}
if(file_get_contents("edid/zerasaseon.txt") == '✅') {$aklSALEH1 = $aklSALEHnm1;}
if(file_get_contents("edid/zerasaseon.txt") == '✅') {$aklSALEH2 = "$aklSALEHnm2";}
if(file_get_contents("edid/zerasaseon.txt") == '✅') {$aklSALEH3 = "$aklSALEHnm3";}
if(file_get_contents("edid/zerasaseon.txt") == '✅') {$aklSALEH4 = "$aklSALEHnm4";}
if(file_get_contents("edid/zerasaseon.txt") == '✅') {$aklSALEH5 = "$aklSALEHnm5";}
if(file_get_contents("edid/zerasaseon.txt") == '✅') {$aklSALEH6 = "$aklSALEHnm6";}
if(file_get_contents("edid/zerasaseon.txt") == '✅') {$aklSALEH7 = "$aklSALEHnm7";}
if(file_get_contents("edid/zerasaseon.txt") == '✅') {$aklSALEH8 = "$aklSALEHnm8";}
if(file_get_contents("edid/zerasaseon.txt") == '✅') {$aklSALEH33 = "$aklSALEHnm33";}
if(file_get_contents("edid/zerasaseon.txt") == '✅') {$aklSALEH9 = "$aklSALEHnm9";}
if(file_get_contents("edid/zerasaseon.txt") == '✅') {$aklSALEH10 = "$aklSALEHnm10";}
if(file_get_contents("edid/zerasaseon.txt") == '✅') {$aklSALEH11 = "$aklSALEHnm11";}
$start = str_replace('#id',$chat_id,$start);
$start = str_replace('#points',$coin,$start);
$start = str_replace('#name',$name,$start);
$start = str_replace('#nambot',$nambot,$start);
@$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
if($text=="/start" && $tc == "private" and !preg_match("/^\/(start) (code)_(.*)/s",$text)){
if(in_array($from_id, $user["userlist"]) == true) {
$coin = $cuser["userfild"]["$from_id"]["coin"];
$reply_markup[] =   [['text'=>"$aklSALEH1",'callback_data'=>'takemember']];
$reply_markup[] =   [['text'=>"$aklSALEH2",'callback_data'=>'takecoinn'],['text'=>"$aklSALEH3",'callback_data'=>'accont']];
$reply_markup[] =   [['text'=>"$aklSALEH4",'callback_data'=>'SALEH6'],['text'=>"$aklSALEH5",'callback_data'=>'sendcoin']];
$reply_markup[] =   [['text'=>"$aklSALEH6",'callback_data'=>'SALEH4'],['text'=>"$aklSALEH7",'callback_data'=>'SALEH5']];
$reply_markup[] =   [['text'=>"$aklSALEH8",'url'=>"https://t.me/$chadin"],['text'=>"$aklSALEHnm33",'callback_data'=>"SALEH33"]]; 
$reply_markup[] =   [['text'=>"$aklSALEH9",'callback_data'=>'SALEH2'],['text'=>"$aklSALEH10",'callback_data'=>'SALEH1']];
$reply_markup[] =   [['text'=>"$aklSALEH11",'callback_data'=>'null']];
foreach($button['codzer'] as $ced => $buttonss){
$cedname = $buttonss['mo'];
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>"$cedname"]];
}
foreach($button['buttons'] as $ced => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>$ced]];
}
foreach($button['links'] as $ced => $buttonss){
$cedname = $buttonss['mo'];
$reply_markup[] = [['text'=>$buttonss['name'],'url'=>"$cedname"]];
}
$reply_markup = json_encode(['inline_keyboard'=>$reply_markup,]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$start",
 'reply_markup'=>$reply_markup,              
    	]);
$arr = $user['finance'];
$channel = array_rand($arr);
$channelincoin = $arr[$channel][1];
$channelssssss = $arr[$channel][0];
$join = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=$channelssssss&user_id=".$from_id);
if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"')) !== false){
if(!in_array($channelssssss, $juser["userfild"]["$from_id"]["channeljoin"])) {
if($channelincoin > 0){
$text_add = "انضم في القناة ".$arr[$channel][0]." 🗳
 واحصل على 10 $cdiamlaadf 🌴";
           bot('sendmessage',[
          	'chat_id'=>$chat_id,
          	'text'=>$text_add,
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
               ['text'=>"تحقق من الانظمام ♻️",'callback_data'=>"finance_".$channel]
  				   ],
                       ]
                 ])
   ]);
}else {
@$usernew = json_decode(file_get_contents("data/user.json"),true);
unset($usernew['finance'][$channel]);
$usernew = json_encode($usernew,true);
file_put_contents("data/user.json",$usernew);
}
}
}
$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
else
{
$startado = file_get_contents("edid/SALEH/$chat_id.txt");
$result = preg_match("/[0-9]/", $startado);
$messagle = "";
if ($result) {
    $messagle = "$startado";
} else {
    $messagle = "";
}
$juser = json_decode(file_get_contents("data/$from_id.json"),true);
$inuser = json_decode(file_get_contents("data/$messagle.json"),true);
$member = $inuser["userfild"]["$messagle"]["invite"];
$coin = $inuser["userfild"]["$messagle"]["coin"];
$memberplus = $member + 1;
$coinplus = $coin  + $coins_start;
$inuser["userfild"]["$messagle"]["invite"]="$memberplus";
$inuser["userfild"]["$messagle"]["coin"]="$coinplus";
$inuser = json_encode($inuser,true);
file_put_contents("data/$messagle.json",$inuser);
$juser["userfild"]["$from_id"]["inviter"]="$messagle";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
unlink("edid/SALEH/$chat_id.txt");
bot('sendmessage',[
	'chat_id'=>$messagle,
	'text'=>"• مبروك لقد حصلت علي الهديه اليوميه  $coins_start 👤 $cdiamlanoo من $name ",
 ]);
$coin = $cuser["userfild"]["$from_id"]["coin"];
$reply_markup[] =   [['text'=>"$aklSALEH1",'callback_data'=>'takemember']];
$reply_markup[] =   [['text'=>"$aklSALEH2",'callback_data'=>'takecoinn'],['text'=>"$aklSALEH3",'callback_data'=>'accont']];
$reply_markup[] =   [['text'=>"$aklSALEH4",'callback_data'=>'SALEH6'],['text'=>"$aklSALEH5",'callback_data'=>'sendcoin']];
$reply_markup[] =   [['text'=>"$aklSALEH6",'callback_data'=>'SALEH4'],['text'=>"$aklSALEH7",'callback_data'=>'SALEH5']];
$reply_markup[] =   [['text'=>"$aklSALEH8",'url'=>"https://t.me/$chadin"],['text'=>"$aklSALEHnm33",'callback_data'=>"SALEH33"]]; 
$reply_markup[] =   [['text'=>"$aklSALEH9",'callback_data'=>'SALEH2'],['text'=>"$aklSALEH10",'callback_data'=>'SALEH1']];
$reply_markup[] =   [['text'=>"$aklSALEH11",'callback_data'=>'null']];
foreach($button['codzer'] as $ced => $buttonss){
$cedname = $buttonss['mo'];
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>"$cedname"]];
}
foreach($button['buttons'] as $ced => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>$ced]];
}
foreach($button['links'] as $ced => $buttonss){
$cedname = $buttonss['mo'];
$reply_markup[] = [['text'=>$buttonss['name'],'url'=>"$cedname"]];
}
$reply_markup = json_encode(['inline_keyboard'=>$reply_markup,]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$start",
 'reply_markup'=>$reply_markup,              
    	]);
$arr = $user['finance'];
$channel = array_rand($arr);
$channelincoin = $arr[$channel][1];
$channelssssss = $arr[$channel][0];
$join = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=$channelssssss&user_id=".$from_id);
if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"')) !== false){
if(!in_array($channelssssss, $juser["userfild"]["$from_id"]["channeljoin"])) {
if($channelincoin > 0){
$text_add = "انضم في القناة ".$arr[$channel][0]." ✅
 واحصل على 10 $cdiamlaadf 💰";
           bot('sendmessage',[
          	'chat_id'=>$chat_id,
          	'text'=>$text_add,
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
               ['text'=>"تحقق من الانظمام ♻️",'callback_data'=>"finance_".$channel]
  				   ],
                       ]
                 ])
   ]);
}else {
@$usernew = json_decode(file_get_contents("data/user.json"),true);
unset($usernew['finance'][$channel]);
$usernew = json_encode($usernew,true);
file_put_contents("data/user.json",$usernew);
}
}
}
$juser = json_decode(file_get_contents("data/$from_id.json"),true);
$juser["userfild"]["$from_id"]["invite"]="0";
$juser["userfild"]["$from_id"]["coin"]="0";
$juser["userfild"]["$from_id"]["setchannel"]="لا يوجد !";
$juser["userfild"]["$from_id"]["setmember"]="لا يوجد !";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
}
elseif(strpos($text , '/start ') !== false   and !preg_match("/^\/(start) (code)_(.*)/s",$text)) {
$start2 = str_replace("/start ","",$text);
if(in_array($from_id, $user["userlist"])) {
@$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$coin = $cuser["userfild"]["$from_id"]["coin"];
$reply_markup[] =   [['text'=>"$aklSALEH1",'callback_data'=>'takemember']];
$reply_markup[] =   [['text'=>"$aklSALEH2",'callback_data'=>'takecoinn'],['text'=>"$aklSALEH3",'callback_data'=>'accont']];
$reply_markup[] =   [['text'=>"$aklSALEH4",'callback_data'=>'SALEH6'],['text'=>"$aklSALEH5",'callback_data'=>'sendcoin']];
$reply_markup[] =   [['text'=>"$aklSALEH6",'callback_data'=>'SALEH4'],['text'=>"$aklSALEH7",'callback_data'=>'SALEH5']];
$reply_markup[] =   [['text'=>"$aklSALEH8",'url'=>"https://t.me/$chadin"],['text'=>"$aklSALEHnm33",'callback_data'=>"SALEH33"]]; 
$reply_markup[] =   [['text'=>"$aklSALEH9",'callback_data'=>'SALEH2'],['text'=>"$aklSALEH10",'callback_data'=>'SALEH1']];
$reply_markup[] =   [['text'=>"$aklSALEH11",'callback_data'=>'null']];
foreach($button['codzer'] as $ced => $buttonss){
$cedname = $buttonss['mo'];
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>"$cedname"]];
}
foreach($button['buttons'] as $ced => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>$ced]];
}
foreach($button['links'] as $ced => $buttonss){
$cedname = $buttonss['mo'];
$reply_markup[] = [['text'=>$buttonss['name'],'url'=>"$cedname"]];
}
$reply_markup = json_encode(['inline_keyboard'=>$reply_markup,]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$start",
 'reply_markup'=>$reply_markup,              
    	]);
$arr = $user['finance'];
$channel = array_rand($arr);
$channelincoin = $arr[$channel][1];
$channelssssss = $arr[$channel][0];
$join = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=$channelssssss&user_id=".$from_id);
if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"')) !== false){
if(!in_array($channelssssss, $juser["userfild"]["$from_id"]["channeljoin"])) {
if($channelincoin > 0){
$text_add = "انضم في القناة ".$arr[$channel][0]." ✅
 واحصل على 10 $cdiamlaadf 💰";
           bot('sendmessage',[
          	'chat_id'=>$chat_id,
          	'text'=>$text_add,
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
               ['text'=>"تحقق من الانظمام ♻️",'callback_data'=>"finance_".$channel]
  				   ],
                       ]
                 ])
   ]);
}else {
@$usernew = json_decode(file_get_contents("data/user.json"),true);
unset($usernew['finance'][$channel]);
$usernew = json_encode($usernew,true);
file_put_contents("data/user.json",$usernew);
}
}
}
}
else
{
$start = str_replace("/start ","",$text);
$juser = json_decode(file_get_contents("data/$from_id.json"),true);
$inuser = json_decode(file_get_contents("data/$start.json"),true);
$member = $inuser["userfild"]["$start"]["invite"];
$coin = $inuser["userfild"]["$start"]["coin"];
$memberplus = $member + 1;
$coinplus = $coin  + $coins_start;
bot('sendmessage',[
	'chat_id'=>$start,
	'text'=>"• مبروك لقد حصلت علي الهديه اليوميه  $coins_start 👤 $cdiamlanoo من $name ",
 ]);
@$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$coin = $cuser["userfild"]["$from_id"]["coin"];
$reply_markup[] =   [['text'=>"$aklSALEH1",'callback_data'=>'takemember']];
$reply_markup[] =   [['text'=>"$aklSALEH2",'callback_data'=>'takecoinn'],['text'=>"$aklSALEH3",'callback_data'=>'accont']];
$reply_markup[] =   [['text'=>"$aklSALEH4",'callback_data'=>'SALEH6'],['text'=>"$aklSALEH5",'callback_data'=>'sendcoin']];
$reply_markup[] =   [['text'=>"$aklSALEH6",'callback_data'=>'SALEH4'],['text'=>"$aklSALEH7",'callback_data'=>'SALEH5']];
$reply_markup[] =   [['text'=>"$aklSALEH8",'url'=>"https://t.me/$chadin"],['text'=>"$aklSALEHnm33",'callback_data'=>"SALEH33"]]; 
$reply_markup[] =   [['text'=>"$aklSALEH9",'callback_data'=>'SALEH2'],['text'=>"$aklSALEH10",'callback_data'=>'SALEH1']];
$reply_markup[] =   [['text'=>"$aklSALEH11",'callback_data'=>'null']];
foreach($button['codzer'] as $ced => $buttonss){
$cedname = $buttonss['mo'];
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>"$cedname"]];
}
foreach($button['buttons'] as $ced => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>$ced]];
}
foreach($button['links'] as $ced => $buttonss){
$cedname = $buttonss['mo'];
$reply_markup[] = [['text'=>$buttonss['name'],'url'=>"$cedname"]];
}
$reply_markup = json_encode(['inline_keyboard'=>$reply_markup,]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$start1 
",
 'reply_markup'=>$reply_markup,              
    	]);
$arr = $user['finance'];
$channel = array_rand($arr);
$channelincoin = $arr[$channel][1];
$channelssssss = $arr[$channel][0];
$join = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=$channelssssss&user_id=".$from_id);
if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"')) !== false){
if(!in_array($channelssssss, $juser["userfild"]["$from_id"]["channeljoin"])) {
if($channelincoin > 0){
$text_add = "انضم في القناة ".$arr[$channel][0]." ✅
 واحصل على 10 $cdiamlaadf 💰";
           bot('sendmessage',[
          	'chat_id'=>$chat_id,
          	'text'=>$text_add,
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
               ['text'=>"تحقق من الانظمام ♻️",'callback_data'=>"finance_".$channel]
  				   ],
                       ]
                 ])
   ]);
}else {
@$usernew = json_decode(file_get_contents("data/user.json"),true);
unset($usernew['finance'][$channel]);
$usernew = json_encode($usernew,true);
file_put_contents("data/user.json",$usernew);
}
}
}
$inuser["userfild"]["$start"]["invite"]="$memberplus";
$inuser["userfild"]["$start"]["coin"]="$coinplus";
$inuser = json_encode($inuser,true);
file_put_contents("data/$start.json",$inuser);
$juser["userfild"]["$from_id"]["invite"]="0";
$juser["userfild"]["$from_id"]["coin"]="0";
$juser["userfild"]["$from_id"]["setchannel"]="لا يوجد !";
$juser["userfild"]["$from_id"]["setmember"]="لا يوجد !";
$juser["userfild"]["$from_id"]["inviter"]="$start";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
}
elseif($cuser["userfild"]["$from_id"]["channeljoin"] == true){
$allchannel = $cuser["userfild"]["$from_id"]["channeljoin"];
for($z = 0;$z <= count($allchannel) -1;$z++){
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$allchannel[$z]."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
break;
}
}
if($allchannel[$z] == true){
if(in_array($allchannel[$z], $user["channellist"])) {
     bot('answercallbackquery', [
              'callback_query_id' =>$membercall,
            'text' => "تم خصم 2 من $cdiamlao بسبب مغادرة @$allchannel[$z] القناة ♻️",
            'show_alert' =>false
         ]);
unset($cuser["userfild"]["$from_id"]["channeljoin"][$z]);
$cuser["userfild"]["$from_id"]["channeljoin"]=array_values($cuser["userfild"]["$from_id"]["channeljoin"]);
$coin = $cuser["userfild"]["$from_id"]["coin"];
$pluscoin = $coin - 2;
$cuser["userfild"]["$from_id"]["coin"]="$pluscoin";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
}
if($allchannel[$z] == true){
if(in_array($allchannel[$z], $user["channellist"])) {
     bot('SendMessage', [
              'chat_id'=>$chat_id,
            'text' => "♻️ عذرا عزيزي ❗️

لا يمكنك طلب اعضاء الي بعد الرجوه الي القنوات التي غادرت منها
▪️ملاحضة :- عند مغادرتك اي من القنوات يتم الخصم 2 $cdiamlanoo لكل قناة

▪️اشترك واستعيد قنواتك 🌐
@$allchannel[$z]

▪️بعدها اضغط على تحديث 🔄",
            'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"تحديث 🔄",'callback_data'=>'takecoin']]
                     ]
               ])
         ]);
unset($cuser["userfild"]["$from_id"]["channeljoin"][$z]);
$cuser["userfild"]["$from_id"]["channeljoin"]=array_values($cuser["userfild"]["$from_id"]["channeljoin"]);
$coin = $cuser["userfild"]["$from_id"]["coin"];
$pluscoin = $coin - 2;
$cuser["userfild"]["$from_id"]["coin"]="$pluscoin";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
}
}
if($data=="panel"){
$akl['3dd'][$from_id][$from_id]  = null;
$akl['mode'][$from_id]  = null;
$akl["tlbia"][$from_id] = null;
$akl["cointlb"][$from_id] += null;
$akl["s3rltlb"][$from_id] = null;
$akl['tp'][$from_id] = null;
$akl['coinn'] = null;
SETJSON($akl);
@$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$coin = $cuser["userfild"]["$from_id"]["coin"];
$reply_markup[] =   [['text'=>"$aklSALEH1",'callback_data'=>'takemember']];
$reply_markup[] =   [['text'=>"$aklSALEH2",'callback_data'=>'takecoinn'],['text'=>"$aklSALEH3",'callback_data'=>'accont']];
$reply_markup[] =   [['text'=>"$aklSALEH4",'callback_data'=>'SALEH6'],['text'=>"$aklSALEH5",'callback_data'=>'sendcoin']];
$reply_markup[] =   [['text'=>"$aklSALEH6",'callback_data'=>'SALEH4'],['text'=>"$aklSALEH7",'callback_data'=>'SALEH5']];
$reply_markup[] =   [['text'=>"$aklSALEH8",'url'=>"https://t.me/$chadin"],['text'=>"$aklSALEHnm33",'callback_data'=>"SALEH33"]]; 
$reply_markup[] =   [['text'=>"$aklSALEH9",'callback_data'=>'SALEH2'],['text'=>"$aklSALEH10",'callback_data'=>'SALEH1']];
$reply_markup[] =   [['text'=>"$aklSALEH11",'callback_data'=>'null']];
foreach($button['codzer'] as $ced => $buttonss){
$cedname = $buttonss['mo'];
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>"$cedname"]];
}
foreach($button['buttons'] as $ced => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>$ced]];
}
foreach($button['links'] as $ced => $buttonss){
$cedname = $buttonss['mo'];
$reply_markup[] = [['text'=>$buttonss['name'],'url'=>"$cedname"]];
}
$reply_markup = json_encode(['inline_keyboard'=>$reply_markup,]);
  bot('editmessagetext',[
          'chat_id'=>$chat_id,
       'message_id'=>$message_id,
'text'=>"$start",
 'reply_markup'=>$reply_markup,              
    	]);
$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$cuser["userfild"]["$from_id"]["file"]="none";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
die;}
if($data == "xdmat") {
    if($chat_id == $sudo or $chat_id == $admin ) {
      bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "
*مرحبا بك في قسم تقديم خدمات البوت 👜*
----------------------------
*في هذا القسم يمكنك اضافه خدمات و مسح خدمات و اضافه تطبيقات و مسح تطبيقات 🌐
• خدمات البوت كامله هنا ختار ما تريد ⚙️*
        ",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [["text" => "قسم خدمات الرشق 👜","callback_data"=>"qsmsa"]],
            [["text" => "الاقسام الاساسية 🌐","callback_data"=>"mr1"]],
            [["text" => " النسخ الاحطياطي ⚙️","callback_data"=>"codyser"]],
            [['text' => 'رجوع', 'callback_data' => "sitingbots"]],
          ]
        ])
      ]);
      $akl['mode'][$from_id] = null;
      $akl = json_encode($akl, 32 | 128 | 265);
      file_put_contents("akl/akl.json", $akl);
    }
  }
if($data == "codyser") {
      bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*• مرحبا بك في قسم نسخ خدمات البوت ✨*

- يمكنك نسخ خدمات البوت الخاص بك الى ملف حيث يمكن لشخص اخر استخدامها .
        ",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [["text" => "رفع نسخة","callback_data"=>"codoserue"],["text" => "عمل نسخة","callback_data"=>"codyseradd"]],
            [['text' => 'رجوع', 'callback_data' => "sitingbots"]],
          ]
        ])
      ]);
    }
  if($data == "codyseradd") {
      bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*انتظر جاري الصنع*",
        'parse_mode' => "markdown",
      ]);
       bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*- تم عمل نسخة الخدمات*",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [['text' => 'رجوع', 'callback_data' => "sitingbots"]],
          ]
        ])
     ]);
$cidSALEHa = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), -40);
$userbot = bot("getme")->result->username; 
$idbot = bot('getme',['bot'])->result->id;
$filezo = file_get_contents("../../filetos.txt");
$codosefier ="$filezo
$cidSALEHa
$idbot";
file_put_contents("$userbot.NAMER","$codosefier");
bot ("senddocument", [
"chat_id" => $chat_id, 
"document" => new CURLFile("$userbot.NAMER"),
'caption'=>"- ملف خدمات البوت  : [@$userbot]

*~ يمكنك رفع الملف في بوت اخر و سيتم نسخ الخدمات*",
'parse_mode' => "markdown",
'reply_to_message_id'=>$message->message_id, 
]);
unlink("$userbot.NAMER");
file_put_contents("fielbotco.txt","$cidSALEHa");
}
  if($data == "codoserue") {
      bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*- ارسل ملف نسخة الخدمات الان!*",
        'parse_mode' => "markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>'رجوع' ,'callback_data'=>"codyser"]],
      ]
    ])
      ]);
file_put_contents("edid/idfilebot $chat_id.txt","on");
}
if ($update->message->document && file_get_contents("edid/idfilebot $chat_id.txt") == "on") {
    $file_extension = pathinfo($update->message->document->file_name, PATHINFO_EXTENSION);
    $update = json_decode(file_get_contents("php://input"));
    $document = $update->message->document;
    $file_id = $document->file_id;
    $file_path = bot("getFile", [
        "file_id" => $file_id,
    ])->result->file_path;
    $download_link = "https://api.telegram.org/file/bot" . $token . "/" . $file_path;
    $file_content = file_get_contents($download_link);
    $lines = explode("\n", $file_content);
    $line20 = $lines[19];
    $line21 = $lines[20];
    $filecodbo = file_get_contents("../$line21/fielbotco.txt");
    $file_coodls = file_get_contents($download_link);   
if (trim($filecodbo) != trim($line20)) {
    bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "*يوجد خطاء ما في النسخه يمكنك اعاده نسخ خدماتك و ارسال الملف الجديد *",
        'reply_to_message_id' => $message_id,
         'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>'رجوع' ,'callback_data'=>"codyser"]],
    ]
    ])
    ]);
    unlink("edid/idfilebot $chat_id.txt");
    return;
}
    if ($file_extension == "NAMER") {
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "*• تم رفع نسخة الخدمات !*",
            'reply_to_message_id' => $message_id,
            'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>'رجوع' ,'callback_data'=>"codyser"]],
      ]
    ])
        ]);
        $filecoarbo = file_get_contents("../$line21/akl/akl.json");
        unlink("akl/akl.json");
        file_put_contents("akl/akl.json","$filecoarbo");
        unlink("edid/idfilebot $chat_id.txt");
    } else {
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "*• يجب ان يكون الملف .NAMER !*",
            'reply_to_message_id' => $message_id,
                     'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>'رجوع' ,'callback_data'=>"codyser"]],
      ]
    ])
        ]);
        unlink("edid/idfilebot $chat_id.txt");
    }
}
if($data == "qsmsa"){
  $key = ['inline_keyboard' => []];
  foreach ($akl['qsm'] as $i) {
    $nameq = explode("-",$i)[0];
    $i = explode("-",$i)[1];
    if($akl['IFWORK>'][$i] != "NOT"){
    $key['inline_keyboard'][] = [['text' => "$nameq", 'callback_data' => "edits|$i"], ['text' => "🗑", 'callback_data' => "delets|$i"]];
  }
}
  $key['inline_keyboard'][] = [['text' => "+ اضافه قسم جديد", 'callback_data' => "addqsm"]];
  $key['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "xdmat"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "*اقسام التطبيقات المضافه في البوت 👜*

يمكنك اضافه اقسام او مسح اقسام من هنا

*اضغط علي الخدمه للتحكم به 🗣*",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $akl['mode'][$from_id] = null;
  SETJSON($akl);
}
if(explode("|",$data)[0] == "delets"){
  $akl['IFWORK>'][explode("|",$data)[1]] = "NOT";
  $akl['mode'][$from_id] = null;
  SETJSON($akl);
  $key = ['inline_keyboard' => []];
  foreach ($akl['qsm'] as $i) {
    $nameq = explode("-",$i)[0];
    $i = explode("-",$i)[1];
    if($akl['IFWORK>'][$i] != "NOT"){
    $key['inline_keyboard'][] = [['text' => "$nameq", 'callback_data' => "edits|$i"], ['text' => "🗑", 'callback_data' => "delets|$i"]];
  }
}
  $key['inline_keyboard'][] = [['text' => "+ اضافه قسم جديد", 'callback_data' => "addqsm"]];
  $key['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "xdmat"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "*اقسام التطبيقات المضافه في البوت 👜*

يمكنك اضافه اقسام او مسح اقسام من هنا

*اضغط علي الخدمه للتحكم به 🔰*",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
}

if(explode("|",$data)[0]=="edits"){
  $key = ['inline_keyboard' => []];
  $vv = rand(100,900);
  foreach ( $akl['xdmaxs'][explode("|",$data)[1]] as $hjjj => $i) {
    $key['inline_keyboard'][] = [['text' => "$i", 'callback_data' => "editss|".explode("|",$data)[1]."|$hjjj"], ['text' => "🗑", 'callback_data' => "delets|".explode("|",$data)[1]."|$hjjj"]];
  }

  $bbot = explode("|",$data)[1];
  $key['inline_keyboard'][] = [['text' => "+ اضافه خدمات الي هذا القسم", 'callback_data' => "add|$bbot"]];
  $key['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "xdmat"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    خدمات قسم *".$akl['NAMES'][explode("|",$data)[1]]."*
    
    يمكنك الضغط علي اي خدمه للتعديل
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $akl['mode'][$from_id] = null;
  $akl['idTIMER'][$vv] = $akl['NAMES'][explode("|",$data)[1]];
  SETJSON($akl);
}

if(explode("|",$data)[0]=="editss"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "تعيين السعر", 'callback_data' => "setprice|".explode("|",$data)[1]."|".explode("|",$data)[2]],['text' => "تعيين الايدي", 'callback_data' =>  "setid|".explode("|",$data)[1]."|".explode("|",$data)[2]]];
  $key['inline_keyboard'][] = [['text' => "تعيين ادني حد ", 'callback_data' =>  "setmin|".explode("|",$data)[1]."|".explode("|",$data)[2]]];
  $key['inline_keyboard'][] = [['text' => "تعيين اقصي حد ", 'callback_data' =>  "setmix|".explode("|",$data)[1]."|".explode("|",$data)[2]]];
  $key['inline_keyboard'][] = [['text' => "تعيين الوصف", 'callback_data' =>  "setdes|".explode("|",$data)[1]."|".explode("|",$data)[2]]];
  $key['inline_keyboard'][] = [['text' => "حذف الخدمه", 'callback_data' =>  "delt|".explode("|",$data)[1]."|".explode("|",$data)[2]]];
  $key['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "xdmat"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
     خدمه ".$akl['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]."

 في قسم ".$akl['NAMES'][explode("|",$data)[1]]."

يمكنك التعديل علي الخدمه من هنا
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $akl['mode'][$from_id] = null;
  SETJSON($akl);
}

if(explode("|",$data)[0]=="delt"){
  $key = ['inline_keyboard' => []];
  $vv = rand(100,900);

  foreach ( $akl['xdmaxs'][explode("|",$data)[1]] as $hjjj => $i) {

    $key['inline_keyboard'][] = [['text' => "$i", 'callback_data' => "editss|".explode("|",$data)[1]."|$hjjj"], ['text' => "🗑", 'callback_data' => "delets|".explode("|",$data)[1]."|$hjjj"]];
  }

  $bbot = explode("|",$data)[1];
  $key['inline_keyboard'][] = [['text' => "+ اضافه خدمات الي هذا القسم", 'callback_data' => "add|$bbot"]];
  $key['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "sitingbots"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    خدمات قسم *".$akl['NAMES'][explode("|",$data)[1]]."*
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $akl['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]] = null;
  $akl['mode'][$from_id] = null;
  $akl['idTIMER'][$vv] = $akl['NAMES'][explode("|",$data)[1]];
  SETJSON($akl);
}

$akl = json_decode(file_get_contents("akl/akl.json"),true);
if(explode("|",$data)[0]=="setprice"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "sitingbots"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
     خدمه ".$akl['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]." 

في قسم ".$akl['NAMES'][explode("|",$data)[1]]."
    ارسل سعر الخدمه الان ؟
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $akl['mode'][$from_id] = "setprice";
  $akl['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($akl);
}
if(explode("|",$data)[0]=="setmin"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "sitingbots"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
     خدمه ".$akl['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]." 

في قسم ".$akl['NAMES'][explode("|",$data)[1]]."
    ارسل ادني عدد للخدمه الان؟ 
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $akl['mode'][$from_id] = "setmin";
  $akl['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($akl);
}

if(is_numeric($text) and $akl['mode'][$from_id] == "setmin"){
  if($chat_id == $sudo or $chat_id == $admin ) {
    $bA = $text / 1000;
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين ادني حد *". $akl['xdmaxs'][explode("|",$akl['MGS'][$from_id])[1]][explode("|",$akl['MGS'][$from_id])[2]]."* في قسم *".$akl['NAMES'][explode("|",$akl['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
    ]);
    $akl['mode'][$from_id] = null;
    $akl['min'][explode("|",$akl['MGS'][$from_id])[1]][explode("|",$akl['MGS'][$from_id])[2]] = $text ;
    $akl['MGS'][$from_id] = null;
    SETJSON($akl);
  }
}

if(explode("|",$data)[0]=="setkey"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "sitingbots"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
     خدمه ".$akl['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]." 

في قسم ".$akl['NAMES'][explode("|",$data)[1]]."
    ارسل API KEY الموقع الان؟ 
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $akl['mode'][$from_id] = "setkey";
  $akl['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($akl);
}
$akl = json_decode(file_get_contents("akl/akl.json"),true);
if($text and $akl['mode'][$from_id] == "setkey"){
  if($chat_id == $sudo or $chat_id == $admin ) {
    $bA = $text / 1000;
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين API KEY *". $akl['xdmaxs'][explode("|",$akl['MGS'][$from_id])[1]][explode("|",$akl['MGS'][$from_id])[2]]."* في قسم *".$akl['NAMES'][explode("|",$akl['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
    ]);
    $akl['mode'][$from_id] = null;
    $akl['key'][explode("|",$akl['MGS'][$from_id])[1]][explode("|",$akl['MGS'][$from_id])[2]] = $text ;
    $akl['MGS'][$from_id] = null;
    SETJSON($akl);
  }
}
if(explode("|",$data)[0]=="setmix"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "sitingbots"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
     خدمه ".$akl['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]." 

في قسم ".$akl['NAMES'][explode("|",$data)[1]]."
    ارسل اقصي حد للخدمه الان؟ 
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $akl['mode'][$from_id] = "setmix";
  $akl['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($akl);
}

if(is_numeric($text) and $akl['mode'][$from_id] == "setmix"){
  if($chat_id == $sudo or $chat_id == $admin ) {
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين اقصي حد *". $akl['xdmaxs'][explode("|",$akl['MGS'][$from_id])[1]][explode("|",$akl['MGS'][$from_id])[2]]."* في قسم *".$akl['NAMES'][explode("|",$akl['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
    ]);
    $akl['mode'][$from_id] = null;
    $akl['mix'][explode("|",$akl['MGS'][$from_id])[1]][explode("|",$akl['MGS'][$from_id])[2]] = $text ;
    $akl['MGS'][$from_id] = null;
    SETJSON($akl);
  }
}
if(is_numeric($text) and $akl['mode'][$from_id] == "setprice"){
  if($chat_id == $sudo or $chat_id == $admin ) {
    $bA = $text / 1000;
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين سعر *". $akl['xdmaxs'][explode("|",$akl['MGS'][$from_id])[1]][explode("|",$akl['MGS'][$from_id])[2]]."* في قسم *".$akl['NAMES'][explode("|",$akl['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
    ]);
    $akl['mode'][$from_id] = null;
    $akl['S3RS'][explode("|",$akl['MGS'][$from_id])[1]][explode("|",$akl['MGS'][$from_id])[2]] = $bA;
    $akl['MGS'][$from_id] = null;
    SETJSON($akl);
  }
}

if(explode("|",$data)[0]=="setWeb"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "sitingbots"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
     خدمه ".$akl['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]." 

في قسم ".$akl['NAMES'][explode("|",$data)[1]]."

    ارسل رابط الموقع؟ 
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $akl['mode'][$from_id] = "setWeb";
  $akl['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($akl);
}

if($text and $akl['mode'][$from_id] == "setWeb"){
  if($chat_id == $sudo or $chat_id == $admin ) {
$IMbot = parse_url($text);
$INbot = $IMbot['host'];
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين ربط موقع *". $akl['xdmaxs'][explode("|",$akl['MGS'][$from_id])[1]][explode("|",$akl['MGS'][$from_id])[2]]."* في قسم *".$akl['NAMES'][explode("|",$akl['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
    ]);
    $akl['mode'][$from_id] = null;
    $akl['Web'][explode("|",$akl['MGS'][$from_id])[1]][explode("|",$akl['MGS'][$from_id])[2]] = $INbot;
    $akl['MGS'][$from_id] = null;
    SETJSON($akl);
  }
}
if(explode("|",$data)[0]=="setdes"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "sitingbots"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
     خدمه ".$akl['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]." 

في قسم ".$akl['NAMES'][explode("|",$data)[1]]."

    ارسل وصف الخدمه الان؟
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $akl['mode'][$from_id] = "setdes";
  $akl['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($akl);
}

if($text and $akl['mode'][$from_id] == "setdes"){
  if($chat_id == $sudo or $chat_id == $admin ) {
    
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين وصف *". $akl['xdmaxs'][explode("|",$akl['MGS'][$from_id])[1]][explode("|",$akl['MGS'][$from_id])[2]]."* في قسم *".$akl['NAMES'][explode("|",$akl['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
    ]);
    $akl['mode'][$from_id] = null;
    $akl['WSF'][explode("|",$akl['MGS'][$from_id])[1]][explode("|",$akl['MGS'][$from_id])[2]] = $text;
    $akl['MGS'][$from_id] = null;
    SETJSON($akl);
  }
}
if(explode("|",$data)[0]=="setid"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "sitingbots"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
     خدمه ".$akl['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]." 

في قسم ".$akl['NAMES'][explode("|",$data)[1]]."

    ارسل ايدي الخدمه الان ؟
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $akl['mode'][$from_id] = explode("|",$data)[0];
  $akl['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($akl);
}
if(is_numeric($text) and $akl['mode'][$from_id] == "setid"){
  if($chat_id == $sudo or $chat_id == $admin ) {
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين ايدي خدمه *". $akl['xdmaxs'][explode("|",$akl['MGS'][$from_id])[1]][explode("|",$akl['MGS'][$from_id])[2]]."* في قسم *".$akl['NAMES'][explode("|",$akl['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
    ]);
    $akl['mode'][$from_id] = null;
    $akl['IDSSS'][explode("|",$akl['MGS'][$from_id])[1]][explode("|",$akl['MGS'][$from_id])[2]] = $text;
    $akl['MGS'][$from_id] = null;
    SETJSON($akl);
  }
}
  if($data == "addqsm") {
    if($chat_id == $sudo or $chat_id == $admin ) {
      bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "
        *
        ارسل اسم القسم الان مثلا خدمات تيليجرام
        *
        ",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [['text' => 'رجوع', 'callback_data' => "xdmat"]],
          ]
        ])
      ]);
      $akl['mode'][$from_id] = $data;
      $akl = json_encode($akl, 32 | 128 | 265);
      file_put_contents("akl/akl.json", $akl);
    }
  }
  if($text and $akl["mode"][$from_id] == "addqsm") {
    if($chat_id == $sudo or $chat_id == $admin ) {
      $bbot = "bot" . rand(0, 999999999999999);
      bot("sendmessage", [
        "chat_id" => $chat_id,
        "text" => "*تم اضافه القسم بنجاح
        
        - اسم القسم *: [$text]
",
        "parse_mode" => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [['text' => 'للدخول لهذا القسم', 'callback_data' => "mSALEHmr|$bbot"]],
          ]
        ])
      ]);
      $akl['qsm'][] = $text . '-' . $bbot;
      $akl['NAMES'][$bbot] = $text;
      $akl['mode'][$from_id] = null;
      $akl = json_encode($akl, 32 | 128 | 265);
      file_put_contents("akl/akl.json", $akl);
    }
  }
if($data=="mr1"){
$ggu = file_get_contents("edid/mr_ggu.txt");
$insta = file_get_contents("edid/mr_insta.txt");
$tektok = file_get_contents("edid/mr_tektok.txt");
$telegram =file_get_contents("edid/mr_telegram.txt");
$yoteop =file_get_contents("edid/mr_yoteop.txt");
$faesbook =file_get_contents("edid/mr_faesbook.txt");
$twetr =file_get_contents("edid/mr_twetr.txt");
$free =file_get_contents("edid/mr_free.txt");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*مرحبا بك في قسم الخدمات الاساسية 

يمكنك من هنا فتح و قفل الاقسام المراد اظهاره من تضمن الخدمات
*",
"parse_mode" => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
          [['text'=>"سناب شات 💧 : $ggu",'callback_data'=>"null"],['text'=>"فتح",'callback_data'=>'open_ggu'],['text'=>"قفل",'callback_data'=>'off_ggu']],       
    [['text'=>"انستغرام 💧 : $insta",'callback_data'=>"null"],['text'=>"فتح",'callback_data'=>'open_insta'],['text'=>"قفل",'callback_data'=>'off_insta']],       
    [['text'=>"تيكتوك 💧 : $tektok",'callback_data'=>"null"],['text'=>"فتح",'callback_data'=>'open_tektok'],['text'=>"قفل",'callback_data'=>'off_tektok']],
    [['text'=>"تيليغرام 💧 : $telegram",'callback_data'=>"null"],['text'=>"فتح",'callback_data'=>'open_telegram'],['text'=>"قفل",'callback_data'=>'off_telegram']],
    [['text'=>"يوتيوب 💧 : $yoteop",'callback_data'=>"null"],['text'=>"فتح",'callback_data'=>'open_yoteop'],['text'=>"قفل",'callback_data'=>'off_yoteop']],
    [['text'=>"فيسبوك 💧 : $faesbook",'callback_data'=>"null"],['text'=>"فتح",'callback_data'=>'open_faesbook'],['text'=>"قفل",'callback_data'=>'off_faesbook']],
    [['text'=>"تويتر 💧 : $twetr",'callback_data'=>"null"],['text'=>"فتح",'callback_data'=>'open_twetr'],['text'=>"قفل",'callback_data'=>'off_twetr']],
    [['text'=>"المجانية 👜 : $free",'callback_data'=>"null"],['text'=>"فتح",'callback_data'=>'open_free'],['text'=>"قفل",'callback_data'=>'off_free']],
    [['text'=>" • رجوع •  ",'callback_data'=>"home"]],
]
])]);
}
$bbot = "bot" . rand(0, 999999999999999);
if($data == 'open_ggu'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"تم بنجاح فتح القسم ✅",
 'show_alert'=>true,
]);
file_put_contents("edid/mr_ggu.txt","✅");
file_put_contents("edid/cood_ggu.txt","$bbot");
$akl['qsm'][] = "سناب شات 💧" . '-' . $bbot;
$akl['NAMES'][$bbot] = "سناب شات 💧";
$akl['mode'][$from_id] = null;
$akl = json_encode($akl, 32 | 128 | 265);
file_put_contents("akl/akl.json", $akl);
}
if($data == 'off_ggu'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"تم بنجاح قفل القسم ❌",
 'show_alert'=>true,
]); 
file_put_contents("edid/mr_ggu.txt","❌");
unlink("edid/cood_ggu.txt");
}
if($data == 'open_insta'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"تم بنجاح فتح القسم ✅",
 'show_alert'=>true,
]);
file_put_contents("edid/mr_insta.txt","✅");
file_put_contents("edid/cood_insta.txt","$bbot");
$akl['qsm'][] = "انستغرام 💧" . '-' . $bbot;
$akl['NAMES'][$bbot] = "انستغرام 💧";
$akl['mode'][$from_id] = null;
$akl = json_encode($akl, 32 | 128 | 265);
file_put_contents("akl/akl.json", $akl);
}
if($data == 'off_insta'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"تم بنجاح قفل القسم ❌",
 'show_alert'=>true,
]); 
file_put_contents("edid/mr_insta.txt","❌");
unlink("edid/cood_insta.txt");
}
if($data == 'open_tektok'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"تم بنجاح فتح القسم ✅",
 'show_alert'=>true,
]); 
file_put_contents("edid/mr_tektok.txt","✅");
file_put_contents("edid/cood_tektok.txt","$bbot");
$akl['qsm'][] = 'تيكتوك 💧' . '-' . $bbot;
$akl['NAMES'][$bbot] = 'تيكتوك 💧';
$akl['mode'][$from_id] = null;
$akl = json_encode($akl, 32 | 128 | 265);
file_put_contents("akl/akl.json", $akl);
}
if($data == 'off_tektok'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"تم بنجاح قفل القسم ❌",
 'show_alert'=>true,
]); 
file_put_contents("edid/mr_tektok.txt","❌");
unlink("edid/cood_tektok.txt");
}
if($data == 'open_telegram'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"تم بنجاح فتح القسم ✅",
 'show_alert'=>true,
]);
file_put_contents("edid/mr_telegram.txt","✅");
file_put_contents("edid/cood_telegram.txt","$bbot");
$akl['qsm'][] = 'تيليغرام 💧' . '-' . $bbot;
$akl['NAMES'][$bbot] = 'تيليغرام 💧';
$akl['mode'][$from_id] = null;
$akl = json_encode($akl, 32 | 128 | 265);
file_put_contents("akl/akl.json", $akl);
}
if($data == 'off_telegram'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"تم بنجاح قفل القسم ❌",
 'show_alert'=>true,
]);
file_put_contents("edid/mr_telegram.txt","❌");
unlink("edid/cood_telegram.txt");
}
if($data == 'open_yoteop'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"تم بنجاح فتح القسم ✅",
 'show_alert'=>true,
]);
file_put_contents("edid/mr_yoteop.txt","✅");
file_put_contents("edid/cood_yoteop.txt","$bbot");
$akl['qsm'][] = 'يوتيوب 💧' . '-' . $bbot;
$akl['NAMES'][$bbot] = 'يوتيوب 💧';
$akl['mode'][$from_id] = null;
$akl = json_encode($akl, 32 | 128 | 265);
file_put_contents("akl/akl.json", $akl);
}
if($data == 'off_yoteop'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"تم بنجاح قفل القسم ❌",
 'show_alert'=>true,
]);
file_put_contents("edid/mr_yoteop.txt","❌");
unlink("edid/cood_yoteop.txt");
}
if($data == 'open_faesbook'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"تم بنجاح فتح القسم ✅",
 'show_alert'=>true,
]);
file_put_contents("edid/mr_faesbook.txt","✅");
file_put_contents("edid/cood_faesbook.txt","$bbot");
$akl['qsm'][] = 'فيسبوك 💧' . '-' . $bbot;
$akl['NAMES'][$bbot] = 'فيسبوك 💧';
$akl['mode'][$from_id] = null;
$akl = json_encode($akl, 32 | 128 | 265);
file_put_contents("akl/akl.json", $akl);
}
if($data == 'off_faesbook'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"تم بنجاح قفل القسم ❌",
 'show_alert'=>true,
]);
file_put_contents("edid/mr_faesbook.txt","❌");
unlink("edid/cood_faesbook.txt");
}
if($data == 'open_twetr'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"تم بنجاح فتح القسم ✅*
",
 'show_alert'=>true,
]);
file_put_contents("edid/mr_twetr.txt","✅");
file_put_contents("edid/cood_twetr.txt","$bbot");
$akl['qsm'][] = 'تويتر 💧' . '-' . $bbot;
$akl['NAMES'][$bbot] = 'تويتر 💧';
$akl['mode'][$from_id] = null;
$akl = json_encode($akl, 32 | 128 | 265);
file_put_contents("akl/akl.json", $akl);
}
if($data == 'off_twetr'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"تم بنجاح قفل القسم ❌",
 'show_alert'=>true,
]); 
file_put_contents("edid/mr_twetr.txt","❌");
unlink("edid/cood_twetr.txt");
}
if($data == 'open_free'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"تم بنجاح فتح القسم ✅",
 'show_alert'=>true,
]); 
file_put_contents("edid/mr_free.txt","✅");
file_put_contents("edid/cood_free.txt","$bbot");
$akl['qsm'][] = 'خدمات الرشق المجانيه 👜' . '-' . $bbot;
$akl['NAMES'][$bbot] = 'خدمات الرشق المجانيه 👜';
$akl['mode'][$from_id] = null;
$akl = json_encode($akl, 32 | 128 | 265);
file_put_contents("akl/akl.json", $akl);
}
if($data == 'off_free'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"تم بنجاح قفل القسم ❌",
 'show_alert'=>true,
]);
file_put_contents("edid/cood_free.txt","❌");
unlink("edid/cood_free.txt");
}
  $UUS = explode("|", $data);
  if($UUS[0] == "mSALEHmr") {
    if($chat_id == $sudo or $chat_id == $admin ) {
      $bbot = $UUS[1];
      if($akl['NAMES'][$bbot] != null) {
        $key = ['inline_keyboard' => []];
        foreach ($akl['xdmaxs'][$bbot] as $i) {
          $name = $akl['nam'][$i];
          $ids = $akl['ids'][$i];
          $key['inline_keyboard'][] = [['text' => "$name", 'callback_data' => "edits:$i"], ['text' => "🗑", 'callback_data' => "edits:$i"]];
        }
        $key['inline_keyboard'][] = [['text' => "+ اضافه خدمه", 'callback_data' => "add|$bbot"]];
        $key['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "xdmat"]];
       
        bot('EditMessageText', [
          'chat_id' => $chat_id,
          'message_id' => $message_id,
          'text' => "
          *
          مرحبا بك في هذا القسم " . $akl['NAMES'][$bbot] . "
          *
          ",
          'parse_mode' => "markdown",
          'reply_markup' => json_encode($key),
        ]);
      }
    }
  }

  if($UUS[0]=="add"){
    if($chat_id == $sudo or $chat_id == $admin ) {
      bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "
        *        ارسل اسم الخدمه لاضافاتها *
        ",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [['text' => 'رجوع', 'callback_data' => "xdmat"]],
          ]
        ])
      ]);
      $akl['mode'][$from_id] = "adders";
      $akl['idxs'][$from_id] = $UUS[1];
      $akl = json_encode($akl, 32 | 128 | 265);
      file_put_contents("akl/akl.json", $akl);
    }
  }

if($text and  $akl['mode'][$from_id] == "adders" &&  $text !='/start'){
  if($chat_id == $sudo or $chat_id == $admin ) {
    $bbot = $akl['idxs'][$from_id];
    $bsf = rand(33,33333);
    $j=1;
    foreach ( $akl['xdmaxs'][$bbot] as $hjjj => $i) {
$j+=1;
    }
    bot("sendmessaGE",[
      "chat_id" => $chat_id,
      "text" => "
      تم اضافه هذا الخدمه الي قسم *".$akl['NAMES'][$bbot]."*
      ",
      "parse_mode" => "markdown",
      'reply_markup' => json_encode([
        'inline_keyboard' => [
          [['text' => 'دخول الي الخدمه', 'callback_data' => "editss|".$bbot."|$hjjj"]],
          [['text' => 'رجوع', 'callback_data' => "xdmat"]],
        ]
      ])
    ]);
    $akl['mode'][$from_id] = null;
    $akl['idxs'][$from_id] = null;
    $akl['xdmaxs'][$bbot][] = $text;
    $akl= json_encode($akl,32|128|265);
    file_put_contents("akl/akl.json",$akl);
  }
}
if($data == "token" ) {
if($chat_id == $sudo or $chat_id == $admin ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*قوم بارسال التوكن الان ⚙️*",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"sitingbots" ]],
      ]
    ])
]);
$akl['mode'][$from_id]  = "sToken";
SETJSON($akl);
} 
}
$rnd=rand(999,99999);
if($text and $akl['mode'][$from_id] == "sToken" &&  $text !='/start' ) {
	if($chat_id == $sudo or $chat_id == $admin ){
	
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"*تم الحفظ ✅*", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"sitingbots" ]],
      ]
    ])
]);
$akl['mode'][$from_id]  = null;
$akl["sToken"]  = $text;
SETJSON($akl);
}return false;}
if($data == "SiteDomen"  ) {
if($chat_id == $sudo or $chat_id == $admin ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*قوم بارسال موقع الرشق الان 👜*

• مثل : kd1s.com",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"sitingbots" ]],
      ]
    ])
]);
$akl['mode'][$from_id]  = "SiteDomen";
SETJSON($akl);
} 
}
$rnd=rand(999,99999);
if($text and $akl['mode'][$from_id] == "SiteDomen" &&  $text !='/start' ) {
	if($chat_id == $sudo or $chat_id == $admin ){
	$adomenbot = str_replace("http:// ","",$text);
	$adomenbott = str_replace("https:// ","",$adomenbot);
	$IMbot = parse_url($adomenbott);
    $INbot = $IMbot['host'];
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"*تم الحفظ ✅*", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رجوع",'callback_data'=>"sitingbots" ]],
      ]
    ])
]);
$akl['mode'][$from_id]  = null;
$akl["sSite"]  = $adomenbott;
SETJSON($akl);
}return false;}
$akl = json_decode(file_get_contents("akl/akl.json"),true);
 if($data == "takemember" and $nzambot == '❌') {
 	    foreach ($akl['qsm'] as $i) {
      $nameq = explode("-",$i)[0];
      $i = explode("-",$i)[1];
            $ggu = file_get_contents("edid/cood_ggu.txt");
      $insta = file_get_contents("edid/cood_insta.txt");
      $tektok = file_get_contents("edid/cood_tektok.txt");
      $telegram = file_get_contents("edid/cood_telegram.txt");
      $yoteop = file_get_contents("edid/cood_yoteop.txt");
      $faesbook = file_get_contents("edid/cood_faesbook.txt");
      $twetr = file_get_contents("edid/cood_twetr.txt");
      $free = file_get_contents("edid/cood_free.txt");
          $key = ['inline_keyboard' => []];
    if(file_exists("edid/cood_ggu.txt")) {
    $mr_ggu = "سناب شات 💧";
}
    $key = ['inline_keyboard' => []];
    if(file_exists("edid/cood_insta.txt")) {
    $mr_insta = "انستغرام 💧";
}
    if(file_exists("edid/cood_tektok.txt")) {
    $mr_tektok = "تيكتوك 💧";
}
if(file_exists("edid/cood_telegram.txt")) {
    $mr_telegram = "تيليغرام 💧";
}
if(file_exists("edid/cood_yoteop.txt")) {
    $mr_yoteop = "يوتيوب 💧";
}
if(file_exists("edid/cood_faesbook.txt")) {
    $mr_faesbook = "فيسبوك 💧";
}
if(file_exists("edid/cood_twetr.txt")) {
    $mr_twetr = "تويتر 💧";
}
if(file_exists("edid/cood_free.txt")) {
    $mr_free = "خدمات الرشق المجانيه 👜";
}
$key['inline_keyboard'][] = [['text'=>"$mr_ggu",'callback_data'=>"botENT|$ggu"]];
    $key['inline_keyboard'][] = [['text'=>"$mr_insta",'callback_data'=>"botENT|$insta"],['text'=>"$mr_tektok",'callback_data'=>"botENT|$tektok"]];
    $key['inline_keyboard'][] = [['text'=>"$mr_telegram",'callback_data'=>"botENT|$telegram"]];
    $key['inline_keyboard'][] = [['text'=>"$mr_yoteop",'callback_data'=>"botENT|$yoteop"],['text'=>"$mr_faesbook",'callback_data'=>"botENT|$faesbook"]];
    $key['inline_keyboard'][] = [['text'=>"$mr_twetr",'callback_data'=>"botENT|$twetr"]];
    $key['inline_keyboard'][] = [['text'=>"$mr_free",'callback_data'=>"botENT|$free"]];
    foreach ($akl['qsm'] as $i) {
      $nameq = explode("-",$i)[0];
      $i = explode("-",$i)[1];
      $wordsToRemove = array("سناب شات 💧"," انستغرام 💧", "تيليغرام 💧", "تيكتوك 💧", "يوتيوب 💧", "فيسبوك 💧", "تويتر 💧", "خدمات الرشق المجانيه 👜");
      $nameq = str_ireplace($wordsToRemove, "", $nameq);
      $nameq = $nameq;
      if($akl['IFWORK>'][$i] != "NOT"){
      $key['inline_keyboard'][] = [['text' => "$nameq", 'callback_data' => "botENT|$i"]];
    }
  }}
    $key['inline_keyboard'][] =  [['text'=>"✨ تمويل قناتك اعضاء حقيقين ✨",'callback_data'=>'takememberto']];
    $key['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "panel"]];
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
💧] $cdiamlao : $coin
🌴] ايديك : $from_id 
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode($key),
]);
} 
$tmwel=file_get_contents("edid/tmwel.txt");
 if($data == "takemember" and $nzambot == '✅') {
 if($tmwel == '✅'){
if($coin >= $adna_coins){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"♻️] ارفع البوت ادمن في قناتك

و ارسل معرف القناة مثل : $chadmin",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
$cuser["userfild"]["$from_id"]["file"]="setchannel";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
return false;}
else
{
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"
• عليك تجميع $cdiamlaadf اكثر من $adna_coins $cdiamlanoo ♻️
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
            [['text'=>"تجميع $cdiamlaadf💰",'callback_data'=>'takecoinn']],
            [['text'=>"رجوع ➡️",'callback_data'=>'panel']],
                                 ]
               ])
			   ]);
}}else{
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"*نعتذر تم قفل استقبال القنوات في الوقت الحالي عد بعد قليل ❌*",
               'parse_mode' => "markdown",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
            [['text'=>"رجوع ➡️",'callback_data'=>'panel']],
                                 ]
               ])
			   ]);}}

if(explode("|",$data)[0]=="botENT"){
  $key = ['inline_keyboard' => []];
  $vv = rand(100,900);
  foreach ( $akl['xdmaxs'][explode("|",$data)[1]] as $hjjj => $i) {
    $key['inline_keyboard'][] = [['text' => "$i", 'callback_data' => "type|".explode("|",$data)[1]."|$hjjj"]];
  }
  $bbot = explode("|",$data)[1];
  $key['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "panel"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "• مرحبا بك عزيزي $name 🌴
    • يمكنك اختيار ما تشاء من الخدمات",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $akl['mode'][$from_id] = null;
  SETJSON($akl);
}
$akl = json_decode(file_get_contents("akl/akl.json"),true);
if($e[0] == "type"){
	$akl = json_decode(file_get_contents("akl/akl.json"),true);
	if($e[1] == "thbt" or $e[1] == "mthbt" or $e[1] == "hq" ) {
		$typee = "متابعين" ;
		} elseif($e[1] == "view"){
			$typee = "مشاهدات";
			}elseif($e[1] == "like"){
				$typee = "لايكات";
				}
		
		if($e[1] == "thbt") {
			$s3r = 1;
			
			}
			if($e[1] == "mthbt") {
			$s3r = 2;
			}
			if($e[1] == "hq") {
			$s3r = 0.2;
			}
			if($e[1] == "view") {
			$s3r = 25;
			}
			
			if($e[1] == "like") {
			$s3r = 18;
			}
			
			if($akl["s3rr"][$e[1]] !=null) {
			$s3r = $akl["s3rr"][$e[1]] ;
			}
        $akl = json_decode(file_get_contents("akl/akl.json"),true);
        $s3r = $akl['S3RS'][explode("|",$data)[1]][explode("|",$data)[2]];
        $web = ($akl['Web'][explode("|",$data)[1]][explode("|",$data)[2]]??$akl["sSite"]) ;
        $s3r = ($s3r ?? "1");
        $key = ($akl['key'][explode("|",$data)[1]][explode("|",$data)[2]] ?? $akl["sToken"]);
        $mix = ($akl['mix'][explode("|",$data)[1]][explode("|",$data)[2]] ?? "1000");
        $min = ($akl['min'][explode("|",$data)[1]][explode("|",$data)[2]] ?? "100");
        $g= $s3r * 1000;
        $akl = json_decode(file_get_contents("akl/akl.json"),true);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"✳️] اسم الخدمة : ".$akl['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]."

💧] السعر : ". $g ." $cdiamlanoo لكل 1000

👥] اقل طلب  : $min

👥] اكبر طلب : $mix

*️👜] ارسل الكمية التي تريد طلبها ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"panel"]],
]])
]);
$akl['IDX'][$from_id]  =  $akl['IDSSS'][explode("|",$data)[1]][explode("|",$data)[2]];
$akl['WSFV'][$from_id]  =  $akl['WSF'][explode("|",$data)[1]][explode("|",$data)[2]];
$akl['S3RS'][$from_id]  =  $s3r;
$akl['web'][$from_id]  =  $web;
$akl['key'][$from_id]  =  $key;
$akl['min_mix'][$from_id]  = "$min|$mix" ;
$akl['SB1'][$from_id]  =  explode("|",$data)[1];
$akl['mode'][$from_id]  =  "SETd";
$akl['SB2'][$from_id]  =  explode("|",$data)[2];
$akl["="][$from_id] = $akl['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]];
SETJSON($akl);
} 
if($e[0] == "kmiat"){
$s3r = $akl['S3RS'][$from_id];
$s3r = ($s3r ?? "1");
$g= $s3r * 1000;
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
🔰] اسم الخدمة : ".$akl['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]."

💧] السعر : ". $g ." $cdiamlanoo لكل 1000

🛍] اختر الكمية التي تريد طلبها 
", 
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
  [['text'=>'السعر' ,'callback_data'=>"type|$thbt"], ['text'=>'العدد' ,'callback_data'=>"type|$mthbt"]],
  [['text'=>"$ ".$nm.$s3r*1000,'callback_data'=>"to|1000|$e[1]"], ['text'=>'1000 $' ,'callback_data'=>"to|1000|$e[1]"]],
  [['text'=>"$ ".$nm.$s3r*2000,'callback_data'=>"to|2000|$e[1]"], ['text'=>'2000 $' ,'callback_data'=>"to|2000|$e[1]"]],
  [['text'=>"$ ".$nm.$s3r*4000,'callback_data'=>"to|4000|$e[1]"], ['text'=>'4000 $' ,'callback_data'=>"to|4000|$e[1]"]],
  [['text'=>"$ ".$nm.$s3r*8000,'callback_data'=>"to|8000|$e[1]"], ['text'=>'8000 $' ,'callback_data'=>"to|8000|$e[1]"]],
  [['text'=>"$ ".$nm.$s3r*10000,'callback_data'=>"to|10000|$e[1]"], ['text'=>'10000 $' ,'callback_data'=>"to|10000|$e[1]"]],
  [['text'=>"$ ".$nm.$s3r*20000,'callback_data'=>"to|20000|$e[1]"], ['text'=>'20000 $' ,'callback_data'=>"to|400|$e[1]"]],  
  [['text'=>'رجوع' ,'callback_data'=>"type|". $akl['SB1'][$from_id]."|".$akl['SB2'][$from_id]]],
]])
]);
} 
$akl = json_decode(file_get_contents("akl/akl.json"),true);
if(is_numeric($text) and $akl['mode'][$from_id]  ==  "SETd") {
$s3r = $akl['S3RS'][$from_id];
$e[1] = $text;
$s3r = $s3r * $text;
$min = explode("|", $akl['min_mix'][$from_id])[0];
$mix = explode("|", $akl['min_mix'][$from_id])[1];
if($text >= $min){
if($text <= $mix){
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
".$akl['WSFV'][$from_id]."
ارسل الرابط الان :
",
'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
  [['text'=>'رجوع' ,'callback_data'=>"tobon"]],
  ]])
]);
    $akl['3dd'][$from_id][$from_id]  = $e[1];
    $akl['mode'][$from_id]  = "MJK";
    $akl["tlbia"][$from_id] = $tlbia;
    $akl["s3rltlb"][$from_id] = $s3r;
    $akl['tp'][$from_id] = $e[2];
    $akl['coinn'] = $s3r;
SETJSON($akl); 
return false;} else {
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"ارسل عدد بين $min و $mix",
      ]);
	} 
  } else {
    bot('sendmessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"ارسل عدد بين $min و $mix",
      ]);
  }
} 
if($text and $akl['mode'][$from_id]  == "MJK" and $text !="/start") {
    	$s3r = $akl['S3RS'][$from_id];
        $s3r = ($s3r ?? "1");
        $g= $s3r * $akl['3dd'][$from_id][$from_id]  ;
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"✅] هل أنت متأكد 
        
📚] ايدي الخدمة : ".rand(999,999999)."
💧] الى : $text
👜] الكمية : ".$akl['3dd'][$from_id][$from_id]."
        ",
        'reply_markup'=>json_encode([
             'inline_keyboard'=>[
             [['text'=>"موافق ✅",'callback_data'=>"YESS|$from_id" ],['text'=>"الغاء ❌",'callback_data'=>"panel" ]],
              ]
            ])
        ]);
        $akl['LINKS_$from_id'] = $text;
        $akl['mode'][$from_id] = "PROG";
        $akl= json_encode($akl,32|128|265);
        file_put_contents("akl/akl.json",$akl);
}
$akl["sSite"] = ($akl['web'][$from_id]?? $akl["sSite"]) ;
$Api_Tok = ($akl['key'][$from_id]?? $akl["sToken"]) ;
$aklaft =$akl['bot_tlb']+1;
if(explode("|",$data)[0] == "YESS" and $akl['mode'][$from_id]  == "PROG") {
	$akl = json_decode(file_get_contents("akl/akl.json"),true);
	$coin3aa = $akl['3dd'][$from_id][$from_id];
	$s3r = $akl['S3RS'][$from_id];
	$s3r = $s3r * $coin3aa;
	if($coin >= $s3r){
      $akl['S3RS'][$from_id] =  $akl["s3rltlb"][$from_id];
      $inid = $akl['IDX'][$from_id];
      $text = $akl['LINKS_$from_id'];
      $cuser["userfild"]["$from_id"]["coin"]-=$akl["s3rltlb"][$from_id];
      $jsonString = file_get_contents("https://".$akl["sSite"]."/api/v2?key=$Api_Tok&action=add&service=$inid&link=$text&quantity=". $akl['3dd'][$from_id][$from_id]);
      $requst = $jsonString;
      $rnd = json_decode($jsonString)->order;
      $idreq = json_decode($jsonString)->order;
      $cuser = json_encode($cuser,true);
      file_put_contents("data/$from_id.json",$cuser);
	bot('editmessagetext',[
   'chat_id'=>$chat_id,
   "message_id" => $message_id,
   'text'=>"
   👜] تم انشاء طلب بنجاح : 
        
   👥] ايدي الطلب : $rnd
   💧] تم الطلب الى : $text",   
'disable_web_page_preview'=>true,
]);
$reply_markup[] =   [['text'=>"$aklSALEH1",'callback_data'=>'takemember']];
$reply_markup[] =   [['text'=>"$aklSALEH2",'callback_data'=>'takecoinn'],['text'=>"$aklSALEH3",'callback_data'=>'accont']];
$reply_markup[] =   [['text'=>"$aklSALEH4",'callback_data'=>'SALEH6'],['text'=>"$aklSALEH5",'callback_data'=>'sendcoin']];
$reply_markup[] =   [['text'=>"$aklSALEH6",'callback_data'=>'SALEH4'],['text'=>"$aklSALEH7",'callback_data'=>'SALEH5']];
$reply_markup[] =   [['text'=>"$aklSALEH8",'url'=>"https://t.me/$chadin"]];
$reply_markup[] =   [['text'=>"$aklSALEH9",'callback_data'=>'SALEH2'],['text'=>"$aklSALEH10",'callback_data'=>'SALEH1']];
$reply_markup[] =   [['text'=>"$aklSALEH11",'callback_data'=>'null']];
foreach($button['codzer'] as $ced => $buttonss){
$cedname = $buttonss['mo'];
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>"$cedname"]];
}
foreach($button['buttons'] as $ced => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>$ced]];
}
foreach($button['links'] as $ced => $buttonss){
$cedname = $buttonss['mo'];
$reply_markup[] = [['text'=>$buttonss['name'],'url'=>"$cedname"]];
}
$reply_markup = json_encode(['inline_keyboard'=>$reply_markup,]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$start",
 'reply_markup'=>$reply_markup,              
    	]);
 $userbot = bot("getme")->result->username;
 $chidaspat = file_get_contents("edid/aspatchid1.txt");
 $name_user = "الاسم : [$name](tg://user?id=$chat_id)";
 $nameService = $akl["="][$from_id];
 $coinService = $akl["s3rltlb"][$from_id];
 $numberLink = $akl['3dd'][$from_id][$from_id];
 $msgaspat = str_replace('#nameService',$nameService,$msgaspat);
 $msgaspat = str_replace('#coinService',$coinService,$msgaspat);
 $msgaspat = str_replace('#numberall',$aklaft,$msgaspat);
 $msgaspat = str_replace('#Link',$text,$msgaspat);
 $msgaspat = str_replace('#name_user',$name_user,$msgaspat);
 $msgaspat = str_replace('#numberLink',$numberLink,$msgaspat);
 $msgaspat = str_replace('#id',$chat_id,$msgaspat);
   bot('sendMessage',[
   'chat_id'=>$chidaspat,
   'text'=>"$msgaspat", 
 'parse_mode'=>"markdown",
 'disable_web_page_preview'=>true,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"دخول البوت",'url'=>"https://t.me/$userbot?start=$admin"]],
                     ]
               ])
]);
bot('sendMessage',[
   'chat_id'=>$admin,
   'text'=>"
*طلب جديد 👜*

*معلومات العضو *
            *-----------------------*    
الاسم : [$name](tg://user?id=$chat_id)
ايدي : `$from_id`
معرف : [@$user]
رصيد العضو : $coin
            *-----------------------*    
*معلومات الطلب*
            *-----------------------*    
            
اسم الخدمه : ".$akl["="][$from_id]."
سعر الطلب :". $akl["s3rltlb"][$from_id]. "
ايدي الطلب : $rnd
الرقم التسلسلي للطلب : *". $aklaft." * 
العدد المطلوب : " . $akl['3dd'][$from_id][$from_id] . " $tp
الرابط :  : [$text]  ", 
 'parse_mode'=>"markdown",
 'disable_web_page_preview'=>true,
]);
mkdir("SALEH/$chat_id");
$addrl = $akl['s3rltlb'][$from_id];
$addlro = file_get_contents("SALEH/$chat_id/coirlt.txt");
$addrlad = $addrl + $addlro;
file_put_contents("SALEH/$chat_id/coirlt.txt",$addrlad);
file_put_contents("akl/orders.txt","$idreq\n",FILE_APPEND);
file_put_contents("akl/akltlep.txt","$idreq\n",FILE_APPEND);
$rnn = "
- - - - - - - - - -
ا] 🎁 ".$akl["="][$from_id]." 🎁
ا] $rnd
- - - - - - - - - -";
$akl["coin"][$from_id] -=  $akl["s3rltlb"][$from_id];
$akl['S3RS'][$from_id] = 0;
$akl["orders"][$from_id][]= "$rnn";
$akl["order"][$rnd]= $idreq;
$akl["ordn"][$idreq]= $akl["="][$from_id];
$akl["sites"][$idreq]= $web;
$akl["keys"][$idreq]= $Api_Tok;
$akl["tlby"][$from_id] += 1;
$akl["cointlb"][$from_id] +=  $akl["s3rltlb"][$from_id];
$akl['3dd'][$from_id][$from_id]  = null;
$akl['mode'][$from_id]  = null;
$akl['bot_tlb']+= 1;
   SETJSON($akl);
return false;} else{
        bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "لا يوجد لديك $cdiamlaadf كافيه 👜",
            'show_alert' =>true
        ]);
$reply_markup[] =   [['text'=>"$aklSALEH1",'callback_data'=>'takemember']];
$reply_markup[] =   [['text'=>"$aklSALEH2",'callback_data'=>'takecoinn'],['text'=>"$aklSALEH3",'callback_data'=>'accont']];
$reply_markup[] =   [['text'=>"$aklSALEH4",'callback_data'=>'SALEH6'],['text'=>"$aklSALEH5",'callback_data'=>'sendcoin']];
$reply_markup[] =   [['text'=>"$aklSALEH6",'callback_data'=>'SALEH4'],['text'=>"$aklSALEH7",'callback_data'=>'SALEH5']];
$reply_markup[] =   [['text'=>"$aklSALEH8",'url'=>"https://t.me/$chadin"]];
$reply_markup[] =   [['text'=>"$aklSALEH9",'callback_data'=>'SALEH2'],['text'=>"$aklSALEH10",'callback_data'=>'SALEH1']];
$reply_markup[] =   [['text'=>"$aklSALEH11",'callback_data'=>'null']];
foreach($button['codzer'] as $ced => $buttonss){
$cedname = $buttonss['mo'];
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>"$cedname"]];
}
foreach($button['buttons'] as $ced => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>$ced]];
}
foreach($button['links'] as $ced => $buttonss){
$cedname = $buttonss['mo'];
$reply_markup[] = [['text'=>$buttonss['name'],'url'=>"$cedname"]];
}
$reply_markup = json_encode(['inline_keyboard'=>$reply_markup,]);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"$start",
 'reply_markup'=>$reply_markup,              
    	]);
}return false;}
elseif($data=="takecoinn" ){
@$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$coin = $cuser["userfild"]["$from_id"]["coin"];
  bot('editmessagetext',[
       'chat_id'=>$chat_id,
       'message_id'=>$message_id,
                 'text'=>"• مرحبا بك عزيزي $name 🌴
• في قسم تجميع النقاط من خلال المهام التاليه 📚
1- الهديه اليوميه 💧
2- الاشتراك في القنوات 💧
3- نضام الاحاله 💧
",
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				  [['text'=>"$add_aoc 💧",'callback_data'=>'oin'], ['text'=>"الاشتراك في القنوات 🔰",'callback_data'=>'takecoin']],
                     [['text'=>"$coins_start 💧",'callback_data'=>'oin'],['text'=>"• نظام الاحاله 🗣",'callback_data'=>'link_add']],
                     [['text'=>"$day_coins 💧",'callback_data'=>'oin'],['text'=>"الهديه اليوميه 🎁",'callback_data'=>'kk']],
                     [['text'=>"رجوع ➡️",'callback_data'=>'panel']],
  [
  				   ],
                       ]
                 ])
  	]);
}
if($text == '/id'){
bot('sendmessage',[
'chat_id'=>$chat_id, 
    'text'=>$chat_id,
 'reply_to_message_id'=>$message->message_id,
 ]);
 }
if($data == 'link_add'){
$invite = $cuser["userfild"]["$from_id"]["invite"];
$userbot = bot("getme")->result->username;
  bot('editMessageText',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id,
    'text'=>"
• مرحبا بك عزيزي $name 🌴
• في قسم تجميع النقاط من خلال نضام الاحاله 💧
----------------------------

• عدد احلاتك : $invite 👤

• رابط الاحاله
https://t.me/$userbot?start=$chat_id

• نقاط الاحاله $coins_start $cdiamlanoo 💧
",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
                     [['text'=>"رجوع ➡️",'callback_data'=>'panel']],
 ] 
   ])
  ]);
 }
if($data == 'SALEH1'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id,
    'text'=>$msgasro,
           'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
                     [['text'=>"رجوع ➡️",'callback_data'=>'panel']],
 ] 
   ])
  ]);
 }
if($text == 'مشاهدة الازرار'){
$reply = $message->reply_to_message; 
$message_reply = $reply->message->text;
$dhf =  $update->message->reply_to_message->text;
if (strpos($dhf, "$coin") !== false) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*• الازرار :*

- *$aklSALEH1* ~> `co:9u7ehcde55tak3m06`
- *$aklSALEH2* ~> `co:644ffh76sin4hf6ntk9b`
- *$aklSALEH3* ~> `co:gd53hd48dh6dmds4o`
- *$aklSALEH4* ~> `co:b89ckihdrsfdgfngu469`
- *$aklSALEH5* ~> `co:bfr68agaddhybvotrk7in`
- *$aklSALEH6* ~> `co:nd567bsa5onf90h4h6d`
- *$aklSALEH7* ~> `co:che57r7bsa5onmf906d`
- *$aklSALEH8* ~> `co:nd567bsa5onsalehf90d`
- *$aklSALEH33* ~> `co:nd567bsa554onsale0d`
- *$aklSALEH9* ~> `co:bxry8kcs56bbkahr6ydloj`
- *$aklSALEH10* ~> `co:opfrfbsfbbty66jgdfsrd`
- *$aklSALEH11* ~> `co:yatuno756dfbddk6srd`

*• اضغط على الكود للنسخ 💧..*

",'parse_mode'=>"Markdown",'reply_to_message_id'=>$message->message_id,]);}}
if($data == 'SALEH2'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id,
    'text'=>$msgasar,
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
                     [['text'=>"رجوع ➡️",'callback_data'=>'panel']],
 ] 
   ])
  ]);
 }
$akl = json_decode(file_get_contents("akl/akl.json"),true);
if($data == "SALEH4"){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id,
'text'=>"👜- ارسل الايدي الخاص بالطلب", 
'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
                     [['text'=>"رجوع ➡️",'callback_data'=>'panel']],
]])
]);
$akl['mode'][$from_id]  = 'infotlb';
SETJSON($akl);
}
$akl = json_decode(file_get_contents("akl/akl.json"),true);
$akl["sSite"] = ($akl["sites"][$text]??$akl["sSite"]) ;
$Api_Tok = ($akl["keys"][$text]?? $akl["sToken"]) ;
if(is_numeric($text) and $akl['mode'][$from_id] == "infotlb"){
if($text != null){
$SALEH = json_decode(file_get_contents("https://".$akl["sSite"]."/api/v2?key=$Api_Tok&action=status&order=".$text));
$startcc = $SALEH->start_count; 
$status = $SALEH->remains; 
if($status == "0"){
$sers= "مكتمل ✅";
}else{
$sers="قيد المراجعة ⏳";
}
if($SALEH) {
$open = file_get_contents('akl/akltlep.txt');
$arr = explode("\n", $open);
if(in_array($text, $arr)){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
   ️⃣] معلومات عن الطلب :

- 👜] اسم الخدمة : ".$akl["ordn"][$text]."
- 💧] ايدي الطلب : `$text`
- 🔰] حالة الطلب : $sers
- 📣] المتبقي : $status
  ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>'رجوع' ,'callback_data'=>"panel"]],
      ]
    ])
]);
$akl['mode'][$from_id]  = null;
SETJSON($akl);
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
️• عزرا عزيزي لم اعثر علي هذا الطلب يرجي التحقق من الايدي الخاص بالطلب 📜
  ", 
 'parse_mode'=>"markdown",
]);
} 
}
}}
$akl = json_decode(file_get_contents("akl/akl.json"),true);
if($data == "SALEH5"){
foreach($akl["orders"][$from_id] as $m){
  $b=$b."\n$m";
}
mkdir("SALEH/$chat_id");
$fIleadd = "SALEH/$chat_id/orders.txt";
file_put_contents($fIleadd,$b);
$file = fopen($fIleadd, "r"); 
if($file) {
$mrorders = "";
for ($i = 1; $i <= 20; $i++) {
if(($line = fgets($file)) !== false) {
$mrorders .= $line;
}else {break;}}fclose($file); 
}
if(empty($mrorders)) {
$result = "لا يوجد لديك اي طلبات حتي الان 📚";
} else {
$result = $mrorders;
}
bot('editmessagetext',[
  'chat_id'=>$chat_id,
  'message_id' => $message_id,
  'text'=>"• مرحبا بك عزيزي $name 🌴
• يمكنك مشاهدة اخر 5 طلبات من هنا 👇🏽

$result
 ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"ارسال ملف الطلبات 📂",'callback_data'=>"sendMeTxt" ]],
     [['text'=>"رجوع",'callback_data'=>"panel" ]],
      ]
    ])
]); 
}
if($data =="sendMeTxt"){
$akl = json_decode(file_get_contents("akl/akl.json"),true);
foreach($akl["orders"][$chat_id] as $m){
  $b=$b."\n$m";
}
if(empty($b)) {
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text' =>"لا يوجد لديك اي طلبات حتي الان 📚",
        'show_alert'=>true,
]);
} else {
mkdir("SALEH/$chat_id");
file_put_contents("SALEH/$chat_id/orders.txt",$b);
bot ("senddocument", [
"chat_id" => $chat_id, 
"document" => new CURLFile("SALEH/$chat_id/orders.txt") 
]) ;
unlink("SALEH/$chat_id/orders.txt");
rmdir("SALEH/$chat_id");
  }}
$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;$type = $message->chat->type;
$message_id = $message->message_id;
$name = $message->from->first_name.' '.$message->from->last_name;
$user = strtolower($message->from->username);
$t =$message->chat->title; 
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = strtolower($up->from->username); 
$name = $up->from->first_name.' '.$up->from->last_name;
$message_id = $up->message->message_id;
$mes_id = $update->callback_query->inline_message_id; 
$data = $up->data;
}
if(isset($update->inline_query)){
$chat_id = $update->inline_query->chat->id;
$from_id = $update->inline_query->from->id;
$name = $update->inline_query->from->first_name.' '.$update->inline_query->from->last_name;
$text_inline = $update->inline_query->query;
$mes_id = $update->inline_query->inline_message_id; 
$user = strtolower($update->inline_query->from->username); 
}
@$user = json_decode(file_get_contents("data/user.json"),true);
@$juser = json_decode(file_get_contents("data/$from_id.json"),true);
@$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
if(!in_array($from_id, $user["userlist"]) == true) {
$user["userlist"][]= $from_id;
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
if($data == 'SALEH6'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id,
    'text'=>"• مرحبا بك عزيزي $name 🌴
    
♻️- ارسل الكود الخاص بالكارت 🪪 ",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
                     [['text'=>"الغاء ورجوع ♻️",'callback_data'=>'panel']],
] 
])]);
file_put_contents("SALEH/SALEH $chat_id.txt","SALEH");
}
if($text and file_get_contents("SALEH/SALEH $chat_id.txt") == "SALEH"){
    $codematch = $text;
    $code = $user["codecoin"];
    $howcodead = file_get_contents("edid/howcodeadd $code.txt");
    $howcodea = count(file("edid/howcdead $code.txt"));
    $howrcode = file_get_contents("edid/howcdead $code.txt");
    file_put_contents("SALEH/SALEH $chat_id.txt","SALEH1");
    if($codematch != $code) {
        unlink("SALEH/SALEH $chat_id.txt");
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"• الكارت خطأ او تم شحنه من قبل 🪪",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [
                        ['text'=>"رجوع ➡️",'callback_data'=>'panel']
                    ]
                ]
            ])
        ]);
        return false;
    }
    if($howcodead <= $howcodea) {
        unlink("SALEH/SALEH $chat_id.txt");
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"• الكارت خطأ او تم شحنه من قبل 🪪",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [
                        ['text'=>"رجوع ➡️",'callback_data'=>'panel']
                    ]
                ]
            ])
        ]);
        unlink("edid/howcdead $code.txt");
        unlink("edid/howcode $code.txt");
        unlink("edid/howcodeadd $code.txt");
        unset($user["codecoin"]);
        unset($user["howcoincode"]);
        return false;
    }
    $arr = explode("\n", $howrcode);
    if(in_array($chat_id, $arr)){
        unlink("SALEH/SALEH $chat_id.txt");
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"• لايمكنك شحن الكرت مرتين ♻️",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [
                        ['text'=>"رجوع ➡️",'callback_data'=>'panel']
                    ]
                ]
            ])
        ]);
        return false;
    }
    $coincode = $user["howcoincode"];
    if($text and file_get_contents("SALEH/SALEH $chat_id.txt") == "SALEH1"){
       bot('sendmessage',[
            'chat_id'=>$admin,
            'text'=>"
* قام احد بشحن كارت *🪪

*معلومات العضو *

 الاسم : [$name]
 ايدي : $chat_id
 
*معلومات الكارت *

عدد ال$cdiamlaadf : $coincode
الكارت المستخدم : $code
عدد المحاولات : $howcodea
",
'parse_mode'=>"markdown",
        ]);
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"تم شحن الكارت وتم اضافة $coincode $cdiamlanoo الى حسابك ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [
                        ['text'=>"رجوع ➡️",'callback_data'=>'panel']
                    ]
                ]
            ])
        ]);
        unlink("SALEH/SALEH $chat_id.txt");
        $user = json_encode($user,true);
        file_put_contents("data/user.json",$user);
        $juser = json_decode(file_get_contents("data/$from_id.json"), true);
        $coin = $juser["userfild"]["$from_id"]["coin"];
        $coinplus = $coin + $coincode;
        $juser["userfild"]["$from_id"]["coin"] = $coinplus;
        $juser = json_encode($juser,true);
        file_put_contents("data/$from_id.json",$juser);
        file_put_contents("edid/howcdead $code.txt","$from_id\n",FILE_APPEND);
    }
}
if($data=="takecoin" ){
$rules = $cuser["userfild"]["$from_id"]["acceptrules"];
$llaml = file_get_contents("edid/asttacbot.txt");
if($rules == false and $llaml == "✅"){	
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"*• مرحبا بك عزيزي $name 🌴
• في قسم الاشتراك في القنوات مقابل ال$cdiamlaadf القنوات التي في هذا القسم هيه القنوات التي يتم تمويله اعضاء حقيقيه من خلال قسم طلب التمويل الحقيقي اذا كنت تريد اضافته قناتك هنا قوم بزياره القسم اذا كنت ترغب بلاستمرار للاشتراك في القنوات اضغط اسفل *",
               'parse_mode'=>"markdown",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"تاكيد 📚",'callback_data'=>"takecoin"]],
  [
  				   ],
                       ]
                 ])
  	]);
$cuser["userfild"]["$from_id"]["acceptrules"]="true";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		   }
else
{
if($tchq != 'member' && $tchq != 'creator' && $tchq != 'administrator'){
$join = $cuser["userfild"]["$from_id"]["canceljoin"];
if($join == false){
bot('editmessagetext',[
                'chat_id'=>$cchat_id,
     'message_id'=>$messsage_id,
               'text'=>"▪️عزيزي اشترك بلقناة الرئيسية ( @$channel )
♻️ عند اشتراكك ستحصل على نقطتين مجانا .

بعد الاشتراك اضغط على كلمة [تحقق من الانضمام 🔄]",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                        [["text"=>"join","url"=>"t.me/".$channel]],
                     [['text'=>"تحقق من الانضمام 🔄",'callback_data'=>'mainchannel'],['text'=>"مشترك مسبقا ❗️",'callback_data'=>'takecoin']],
                     [['text'=>"رجوع ➡️",'callback_data'=>'panel']],
                     ]
               ])
			   ]);
$cuser["userfild"]["$from_id"]["canceljoin"]="true";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
else
{
$allchannel = $user["channellist"];
for($z = 0;$z <= count($allchannel);$z++){
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$allchannel[$z]."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
break;
}
}

if($allchannel[$z] == true){
$url = file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$allchannel[$z]");
$getchat = json_decode($url, true);
$name = $getchat["result"]["title"];
$username = $getchat["result"]["username"];
$id = $getchat["result"]["id"];
if($username != "" and $username != null){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"اشترك فالقناة @$username  
وستحصل على $add_aoc $cdiamlaadf 🌴",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                   [['text'=>"اشتركت ✅",'callback_data'=>'truechannel'],['text'=>"تخطي ♻️",'callback_data'=>'nextchannel']],
                   [['text'=>"ابلاغ 📛",'callback_data'=>'badchannel']],
                   [['text'=>"رجوع ➡️",'callback_data'=>'panel']]
                     ]
               ])
			   ]);
$cuser["userfild"]["$from_id"]["getjoin"]="$username";
$cuser["userfild"]["$from_id"]["arraychannel"]="$z";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}else
{
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"لا يوجد قنوات في الوقت الحالي عد لاحقا",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
}
}
else
{
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"لا يوجد قنوات في الوقت الحالي عد لاحقا",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
}
}
}
else
{
$allchannel = $user["channellist"];
for($z = 0;$z <= count($allchannel);$z++){
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$allchannel[$z]."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
break;
}
}
if($allchannel[$z] == true){
$url = file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$allchannel[$z]");
$getchat = json_decode($url, true);
$name = $getchat["result"]["title"];
$username = $getchat["result"]["username"];
$id = $getchat["result"]["id"];
if($username != "" and $username != null){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"اشترك فالقناة @$username  
وستحصل على $add_aoc $cdiamlaadf 🌴",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                   [['text'=>"اشتركت ✅",'callback_data'=>'truechannel'],['text'=>"تخطي ♻️",'callback_data'=>'nextchannel']],
                   [['text'=>"ابلاغ 📛",'callback_data'=>'badchannel']],
                   [['text'=>"رجوع ➡️",'callback_data'=>'panel']]
                     ]
               ])
			   ]);
$cuser["userfild"]["$from_id"]["getjoin"]="$username";
$cuser["userfild"]["$from_id"]["arraychannel"]="$z";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}else
{
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"لا يوجد قنوات في الوقت الحالي عد لاحقا",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
}
}
else
{
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
                 'text'=>"لا يوجد قنوات في الوقت الحالي عد لاحقا",
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
  				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ➡️",'callback_data'=>'panel']
  				   ],
                       ]
                 ])
  			   ]);
}
}
}
}
elseif($data=="truechannel" ){
$getjoinchannel = $cuser["userfild"]["$from_id"]["getjoin"];
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$getjoinchannel."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
        bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' =>  "عليك الاشتراك بالقناة اولآ ❌", 
            'show_alert' =>true
        ]);
}
else
{
$getjoinchannel = $cuser["userfild"]["$from_id"]["getjoin"];
$j = file_get_contents("userch/@$getjoinchannel/from_id.txt");
$arr = explode("\n", $j);
 	if(in_array($chat_id, $arr)){
 	        bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' =>  "تم التحقق من اعاده الاشتراك في القناة ✅", 
            'show_alert' =>true
          ]);
$reply_markup[] =   [['text'=>"$aklSALEH1",'callback_data'=>'takemember']];
$reply_markup[] =   [['text'=>"$aklSALEH2",'callback_data'=>'takecoinn'],['text'=>"$aklSALEH3",'callback_data'=>'accont']];
$reply_markup[] =   [['text'=>"$aklSALEH4",'callback_data'=>'SALEH6'],['text'=>"$aklSALEH5",'callback_data'=>'sendcoin']];
$reply_markup[] =   [['text'=>"$aklSALEH6",'callback_data'=>'SALEH4'],['text'=>"$aklSALEH7",'callback_data'=>'SALEH5']];
$reply_markup[] =   [['text'=>"$aklSALEH8",'url'=>"https://t.me/$chadin"]];
$reply_markup[] =   [['text'=>"$aklSALEH9",'callback_data'=>'SALEH2'],['text'=>"$aklSALEH10",'callback_data'=>'SALEH1']];
$reply_markup[] =   [['text'=>"$aklSALEH11",'callback_data'=>'null']];
foreach($button['codzer'] as $ced => $buttonss){
$cedname = $buttonss['mo'];
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>"$cedname"]];
}
foreach($button['buttons'] as $ced => $buttonss){
$reply_markup[] = [['text'=>$buttonss['name'],'callback_data'=>$ced]];
}
foreach($button['links'] as $ced => $buttonss){
$cedname = $buttonss['mo'];
$reply_markup[] = [['text'=>$buttonss['name'],'url'=>"$cedname"]];
}
$reply_markup = json_encode(['inline_keyboard'=>$reply_markup,]);
  bot('editmessagetext',[
          'chat_id'=>$chat_id,
       'message_id'=>$message_id,
'text'=>"$start",
 'reply_markup'=>$reply_markup,              
    	]);
          }
else
{
$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$coin = $cuser["userfild"]["$from_id"]["coin"];
$arraychannel = $cuser["userfild"]["$from_id"]["arraychannel"];
$coinchannel = $user["setmemberlist"];
$channelincoin = $coinchannel[$arraychannel];
$downchannel = $channelincoin - 1;
$pluscoin = $coin + $add_aoc;
$getjoinchannel = $cuser["userfild"]["$from_id"]["getjoin"];
        bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' =>  " تم اضافه $add_aoc $cdiamlaadf بنجاح ✅", 
            'show_alert' =>true
          ]);
$cuser["userfild"]["$from_id"]["channeljoin"][]="$getjoinchannel";
$cuser["userfild"]["$from_id"]["coin"]="$pluscoin";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
file_put_contents("userch/@$getjoinchannel/from_id.txt","$from_id\n",FILE_APPEND);
if($downchannel > 0){
@$user = json_decode(file_get_contents("data/user.json"),true);
$user["setmemberlist"]["$arraychannel"]="$downchannel";
$user["setmemberlist"]=array_values($user["setmemberlist"]);
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
@$user = json_decode(file_get_contents("data/user.json"),true);
$allchannel = $user["channellist"];
for($z = 0;$z <= count($allchannel);$z++){
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$allchannel[$z]."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
break;
}
}
if($allchannel[$z] == true){
$url = file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$allchannel[$z]");
$getchat = json_decode($url, true);
$name = $getchat["result"]["title"];
$username = $getchat["result"]["username"];
$id = $getchat["result"]["id"];
if($username != "" and $username != null){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"اشترك فالقناة @$username  
وستحصل على $add_aoc $cdiamlaadf 🌴",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                   [['text'=>"اشتركت ✅",'callback_data'=>'truechannel'],['text'=>"تخطي ♻️",'callback_data'=>'nextchannel']],
                   [['text'=>"ابلاغ 📛",'callback_data'=>'badchannel']],
                   [['text'=>"رجوع ➡️",'callback_data'=>'panel']]
                     ]
               ])
			   ]);
$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$cuser["userfild"]["$from_id"]["getjoin"]="$username";
$cuser["userfild"]["$from_id"]["arraychannel"]="$z";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}else
{
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"لا يوجد قنوات في الوقت الحالي عد لاحقا",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
}
}
else
{
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
                 'text'=>"لا يوجد قنوات في الوقت الحالي عد لاحقا",
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
  				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ➡️",'callback_data'=>'panel']
  				   ],
                       ]
                 ])
  			   ]);
}
}
else
{
    $chamc = $user["channellist"]["$arraychannel"];
    $chatm = $user["channellist"]["$arraychannel"];
    if($chamc != "" and $chamc != null){
	bot('sendmessage',[
	'chat_id'=>"$admin",
	'text'=>"✅ تم اكتمال تمويل القناة : $chatm",
  	]);
	bot('sendmessage',[
	'chat_id'=>$user["admin"]["$arraychannel"],
	'text'=>"✅ تم اكتمال تمويل القناة : ".$user["channellist"]["$arraychannel"],
  	]);
$dirPath = "userch/$chatm";
function deleteDirectory($dirPath) {
    if (!is_dir($dirPath)) {return;}
    $files = glob(rtrim($dirPath, '/') . '/*');
    foreach ($files as $file) {
        is_dir($file) ? deleteDirectory($file) : unlink($file);}
    rmdir($dirPath);}
deleteDirectory($dirPath);
    }
unset($user["setmemberlist"]["$arraychannel"]);
unset($user["channellist"]["$arraychannel"]);
unset($user["admin"]["$arraychannel"]);
$user["channellist"]=array_values($user["channellist"]);
$user["setmemberlist"]=array_values($user["setmemberlist"]);
$user["admin"]=array_values($user["admin"]);
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
@$user = json_decode(file_get_contents("data/user.json"),true);
$allchannel = $user["channellist"];
for($z = 0;$z <= count($allchannel);$z++){
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$allchannel[$z]."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
break;
}
}
if($allchannel[$z] == true){
$url = file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$allchannel[$z]");
$getchat = json_decode($url, true);
$name = $getchat["result"]["title"];
$username = $getchat["result"]["username"];
$id = $getchat["result"]["id"];
if($username != "" and $username != null){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"اشترك فالقناة @$username  
وستحصل على $add_aoc $cdiamlaadf 🌴",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                   [['text'=>"اشتركت ✅",'callback_data'=>'truechannel'],['text'=>"تخطي ♻️",'callback_data'=>'nextchannel']],
                   [['text'=>"ابلاغ 📛",'callback_data'=>'badchannel']],
                   [['text'=>"رجوع ➡️",'callback_data'=>'panel']]
                     ]
               ])
			   ]);
$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$cuser["userfild"]["$from_id"]["getjoin"]="$username";
$cuser["userfild"]["$from_id"]["arraychannel"]="$z";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}else
{
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"لا يوجد قنوات في الوقت الحالي عد لاحقا",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
}
}
else
{
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
                 'text'=>"لا يوجد قنوات في الوقت الحالي عد لاحقا",
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
  				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ➡️",'callback_data'=>'panel']
  				   ],
                       ]
                 ])
  			   ]);
}
}
}
}
}
elseif($data=="nextchannel" ){
 bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => " انتضر قليلا ⏳،",
            'show_alert' =>false
        ]);
$arraychannel = $cuser["userfild"]["$from_id"]["arraychannel"];
$plusarraychannel = $arraychannel + 1 ;
$allchannel = $user["channellist"];
for($z = $plusarraychannel;$z <= count($allchannel);$z++){
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$allchannel[$z]."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
break;
}
}
if($allchannel[$z] == true){
$url = file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$allchannel[$z]");
$getchat = json_decode($url, true);
$name = $getchat["result"]["title"];
$username = $getchat["result"]["username"];
$id = $getchat["result"]["id"];
if($username != "" and $username != null){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"اشترك فالقناة @$username  
وستحصل على $add_aoc $cdiamlaadf 🌴",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                   [['text'=>"اشتركت ✅",'callback_data'=>'truechannel'],['text'=>"تخطي ♻️️",'callback_data'=>'nextchannel']],
                   [['text'=>"ابلاغ 📛",'callback_data'=>'badchannel']],
                   [['text'=>"رجوع ➡️",'callback_data'=>'panel']]
                     ]
               ])
			   ]);
$cuser["userfild"]["$from_id"]["getjoin"]="$username";
$cuser["userfild"]["$from_id"]["arraychannel"]="$z";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}else
{
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"لا يوجد قنوات في الوقت الحالي عد لاحقا",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
}
}
else
{
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
                 'text'=>"لا يوجد قنوات في الوقت الحالي عد لاحقا",
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
  				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ➡️",'callback_data'=>'panel']
  				   ],
                       ]
                 ])
  			   ]);
}
}
elseif($data=="mainchannel" ){
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
  bot('answercallbackquery', [
      'callback_query_id' =>$membercall,
 'text' =>"عليك الاشتراك بالقناة اولآ ❌", 
      'show_alert' =>true
  ]);
}
else
{

$getjoinchannel = $cuser["userfild"]["$from_id"]["getjoin"];
$j = file_get_contents("userch/@$getjoinchannel/from_id.txt");
$arr = explode("\n", $j);
 	if(in_array($chat_id, $arr)){
 	        bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' =>  "تم التحقق من اعاده الاشتراك في القناة ✅", 
            'show_alert' =>true
          ]);
          
          }
else
{
$coin = $cuser["userfild"]["$from_id"]["coin"];
$pluscoin = $coin + $add_aoc;
        bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' =>  " تم اضافه $add_aoc $cdiamlaadf بنجاح ✅", 
            'show_alert' =>true
          ]);
 
$cuser["userfild"]["$from_id"]["coin"]="$pluscoin";
$cuser["userfild"]["$from_id"]["channeljoin"][]="$channel";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
file_put_contents("userch/@$getjoinchannel/from_id.txt","$from_id\n",FILE_APPEND);
@$user = json_decode(file_get_contents("data/user.json"),true);
$allchannel = $user["channellist"];
for($z = 0;$z <= count($allchannel);$z++){
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$allchannel[$z]."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
$omm = $allchannel[$z];
break;
}
}
if($allchannel[$z] == true){
$url = file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$allchannel[$z]");
$getchat = json_decode($url, true);
$name = $getchat["result"]["title"];
$username = $getchat["result"]["username"];
$id = $getchat["result"]["id"];
if($username != "" and $username != null){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"اشترك فالقناة @$username  
وستحصل على $add_aoc $cdiamlaadf 🔰",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                   [['text'=>"اشتركت ✅",'callback_data'=>'truechannel'],['text'=>"تخطي ♻️",'callback_data'=>'nextchannel']],
                   [['text'=>"ابلاغ 📛",'callback_data'=>'badchannel']],
                   [['text'=>"رجوع ➡️",'callback_data'=>'panel']]
                     ]
               ])
			   ]);
$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$cuser["userfild"]["$from_id"]["getjoin"]="$username";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"لا يوجد قنوات في الوقت الحالي عد لاحقا",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
}
else
{
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
                 'text'=>"لا يوجد قنوات في الوقت الحالي عد لاحقا",
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
  				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ➡️",'callback_data'=>'panel']
  				   ],
                       ]
                 ])
  			   ]);
}
}
}}
elseif($data=="badchannel"){
$getjoinchannel = $cuser["userfild"]["$from_id"]["getjoin"];
	 bot('answercallbackquery', [
	            'callback_query_id' =>$membercall,
            'text' => "تم ارسال الابلاغ الى مبرمج البوت, وسوف يقوم بمراجعة القناة ومعرفة محتوى القناة ،
نشكرك للتعاون معنا  ♥️ !",
            'show_alert' =>true
        ]);
	bot('sendmessage',[
	'chat_id'=>"$admin",
	'text'=>"ابلاغ جديد!

القناة : @$getjoinchannel
معرف المبلغ : @$usernames
",
  	]);
}
$SALEHto=file_get_contents("SALEH/$chat_id/coirlt.txt");
if($SALEHto==null){
$SALEHto=0;
}

$d = date('D');
$day = explode("\n",file_get_contents("data/".$d.".txt"));
if($d == "Sat"){
unlink("data/Fri.txt");
}
if($d == "Sun"){
unlink("data/Sat.txt");
}
if($d == "Mon"){
unlink("data/Sun.txt");
}
if($d == "Tue"){
unlink("data/Mon.txt");
}
if($d == "Wed"){
unlink("data/The.txt");
}
if($d == "Thu"){
unlink("data/Wedtxt");
}
if($d == "Fri"){
unlink("data/Thu.txt");
}
if($data=="accont"){
if(!in_array($from_id, $day)){
$invite = $cuser["userfild"]["$from_id"]["invite"];
$coin = $cuser["userfild"]["$from_id"]["coin"];
$setchannel = $cuser["userfild"]["$from_id"]["setchannel"];
$setmember = $cuser["userfild"]["$from_id"]["setmember"];
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"• مرحبا بك عزيزي $name 🌴
• في قسم ضبط الحساب ⚙️
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
[['text'=>" نقاطك عدد",'callback_data'=>'kkkk'],['text'=>"$coin 💧",'callback_data'=>'kkkk']],
                     [['text'=>" المستهلكه النقاط️",'callback_data'=>'kkkk'],['text'=>"$SALEHto 💧",'callback_data'=>'kkkk']],
                                          [['text'=>" احلاتك عدد ️",'callback_data'=>'kkkk'],['text'=>"$invite 💧",'callback_data'=>'kkkk']],
                                                                                    [['text'=>"للهديه المتبقي ️",'callback_data'=>'kkkk'],['text'=>"$hours S 💧",'callback_data'=>'kkkk']],
                     [['text'=>"رجوع الي الرئيسية ♻️",'callback_data'=>'panel']],
                     ]
               ])
			   ]);
}else{
date_default_timezone_set('Africa/Cairo');
$current_time = time();
$end_of_day = strtotime('tomorrow') - 1;
$remaining_seconds = $end_of_day - $current_time;
$hours = floor($remaining_seconds / 3600);
$minutes = floor(($remaining_seconds % 3600) / 60);
$seconds = $remaining_seconds % 60;
$aaastf = " $hours";
$invite = $cuser["userfild"]["$from_id"]["invite"];
$coin = $cuser["userfild"]["$from_id"]["coin"];
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"• مرحبا بك عزيزي $name 🌴
• في قسم ضبط الحساب ⚙️
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [['text'=>" نقاطك عدد",'callback_data'=>'kkkk'],['text'=>"$coin 💧",'callback_data'=>'kkkk']],
                     [['text'=>" المستهلكه النقاط️",'callback_data'=>'kkkk'],['text'=>"$SALEHto 💧",'callback_data'=>'kkkk']],
                                          [['text'=>" احلاتك عدد ️",'callback_data'=>'kkkk'],['text'=>"$invite 💧",'callback_data'=>'kkkk']],
                                                                                    [['text'=>"للهديه المتبقي ️",'callback_data'=>'kkkk'],['text'=>"$hours S 💧",'callback_data'=>'kkkk']],
                     [['text'=>"رجوع الي الرئيسية ♻️",'callback_data'=>'panel']],
                     ]
               ])
			   ]);
}
}
$coadd = file_get_contents("edid/coadd.txt");
if($data == 'sendcoin' and $coadd =='❌'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"• تم ايقاف القسم مؤقتا من قبل المطور ⚙️",
 'show_alert'=>true,
]);
}
$coadd = file_get_contents("edid/coadd.txt");
if($data == 'sendcoin' and $coadd =='❌'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"• تم ايقاف القسم مؤقتا من قبل المطور ⚙️",
 'show_alert'=>true,
]);
}
if($data == 'sendcoin' and $coadd =='✅'){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
	'text'=>"• ارسل ايدي الشخص 🌐",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
				   ]
            ])
  	]);
$cuser["userfild"]["$from_id"]["file"]="sendcoin";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
elseif($juser["userfild"]["$from_id"]["file"] == 'sendcoin') {
$coin = $juser["userfild"]["$from_id"]["coin"];
if($forward_from == true){
if($forward_from_id != $from_id){
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"• ارسل عدد النقاط التي تريد تحويلها للشخص $userid 🗳
• ويجب ان يكون عدد النقاط $work_add_day فأكثر 👜",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
$juser["userfild"]["$from_id"]["file"]="setsendcoin";
$juser["userfild"]["$from_id"]["sendcoinid"]="$forward_from_id";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
else
{
	bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"عذراً لا يمكنك الارسال لحسابك ⚙️",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
}
}
else
{
if($text != $from_id){
if(is_numeric($text)){
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$status = $statjson['ok'];
if($status == 1){
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"• ارسل عدد النقاط التي تريد تحويلها للشخص $userid 🗳
• ويجب ان يكون عدد النقاط $work_add_day فأكثر 👜ر",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
$juser["userfild"]["$from_id"]["file"]="setsendcoin";
$juser["userfild"]["$from_id"]["sendcoinid"]="$text";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
else
{
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"عذراً عزيزي هذا الحساب غير موجود في اابوت يمكنك دعوته للبوت 🌴",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
}
}
else
{
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"عذراً عزيزي هذا الحساب غير موجود في اابوت يمكنك دعوته للبوت 🌴",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
}
}
else
{
	bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"عذراً لا يمكنك الارسال لحسابك ⚙️",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
}
}
}
elseif($juser["userfild"]["$from_id"]["file"] == "setsendcoin"and $text != '/start'){ 
if($text < $work_add_day and $text != '/start'){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"• ارسل عدد النقاط التي تريد تحويلها للشخص $userid 🗳
• ويجب ان يكون عدد النقاط $work_add_day فأكثر 👜",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
				   ]
            ])
  	]);exit;}
$coin = $juser["userfild"]["$from_id"]["coin"];
$userid = $juser["userfild"]["$from_id"]["sendcoinid"];
$inuser = json_decode(file_get_contents("data/$userid.json"),true);
$coinuser = $inuser["userfild"]["$userid"]["coin"];
if($text <= $coin && $coin > 0 ){
$coinplus = $coin - $text;
$sendcoinplus = $coinuser + $text;
$amrco = $coinplus + $text;
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"👤 تم ارسال $text من $cdiamlaadf 

- الى الشخص : $userid
- $cdiamlao القديمة : $amrco
- $cdiamlao الان : $coinplus",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
				   ]
            ])
  	]);
		bot('sendmessage',[
	'chat_id'=>$userid,
	'text'=>"👤 تم استلام $text من $cdiamlaadf

- من الشخص : $chat_id",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
				   ]
            ])
  	]);
$juser["userfild"]["$from_id"]["file"]="none";
$juser["userfild"]["$from_id"]["coin"]="$coinplus";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
$inuser["userfild"]["$userid"]["coin"]="$sendcoinplus";
$inuser = json_encode($inuser,true);
file_put_contents("data/$userid.json",$inuser);
}
else
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"انت لاتمتلك هذه ال$cdiamlaadf ❗️",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
				   ]
            ])
  	]);
}
}
$tmwel = file_get_contents("edid/tmwel.txt");
if($data == 'takememberto' and $tmwel =='❌'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"• تم ايقاف القسم مؤقتا من قبل المطور ⚙️",
 'show_alert'=>true,
]);
}
if($data == 'takememberto' and $tmwel =='✅'){
$coin = $cuser["userfild"]["$from_id"]["coin"];
if($coin >= $adna_coins){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"♻️] ارفع البوت ادمن في قناتك

و ارسل معرف القناة مثل : $chadmin",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
$cuser["userfild"]["$from_id"]["file"]="setchannel";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
else
{
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"
• عليك تجميع $cdiamlaadf اكثر من $adna_coins $cdiamlanoo ♻️
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
            [['text'=>"تجميع $cdiamlaadf💰",'callback_data'=>'takecoinn']],
            [['text'=>"رجوع ➡️",'callback_data'=>'panel']],
                                 ]
               ])
			   ]);
}
}
elseif($juser["userfild"]["$from_id"]["file"] == 'setchannel') {
if(preg_match('/^(@)(.*)/s',$text)){
$coin = $juser["userfild"]["$from_id"]["coin"];
$max = $coin / $add_ado;
$maxmember = floor($max);
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"قم بأرسال عدد الاعضاء الان ليتم لتمويل 
        
📣] قناتك : $text 

💰] $cdiamlao : $coin 

🗣] كل عضو يساوي $add_ado $cdiamlaadf

👜 يمكنك طلب : $maxmember عضو",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
$juser["userfild"]["$from_id"]["file"]="setmember";
$juser["userfild"]["$from_id"]["setchannel"]="$text";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
else
{
	bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تاكد من معرف القناة ❗️
ارسل المعرف الصحيح مثل : $chadmin .",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
}
}
elseif($juser["userfild"]["$from_id"]["file"] == 'setmember') {
if(preg_match('/([0-9])/i',$text)){
$coin = $juser["userfild"]["$from_id"]["coin"];
$setchannel = $juser["userfild"]["$from_id"]["setchannel"];
$max = $coin / $add_ado;
$maxmember = floor($max);
if($maxmember >= $text){
$howmember = getChatMembersCount($setchanel,$token);
$endmember = $howmember + $text;
$setchannel = $cuser["userfild"]["$from_id"]["setchannel"];
$setmember = $cuser["userfild"]["$from_id"]["setmember"];
$pluscoin = $setmember * $add_ado;
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"معلومات طلبك [📝

📣] القناة المراد تمويلها : $setchannel 
👥] العدد المطلوب : $text 
🏷] السعر : $pluscoin

❗️] ارفع البوت ادمن حتى يتم تمويل القناة 
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   				   [
['text'=>"تاكيد ☑️",'callback_data'=>'trueorder'],['text'=>"رجوع ➡️",'callback_data'=>'panel'],
				   ],
                     ]
               ])
 ]);
$juser["userfild"]["$from_id"]["file"]="none";
$juser["userfild"]["$from_id"]["setmember"]="$text";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
else
{
	bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"$cdiamlao : $coin 💰

اقصى عدد يمكن ان تطلبه : $maxmember 

يرجى ارسال $maxmember او اقل منه 💡",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
}
}
}
elseif($data=="trueorder"){
$setchannel = $cuser["userfild"]["$from_id"]["setchannel"];
if(!in_array($setchannel, $user["channellist"])) {
$admin = getChatstats(@$setchannel,$token);
if($admin != true){
	       bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "ارفع البوت ادمن اولا ❗️",
            'show_alert' =>true
        ]);
}
else
{
$setchannel = $cuser["userfild"]["$from_id"]["setchannel"];
$setmember = $cuser["userfild"]["$from_id"]["setmember"];
$pluscoin = $setmember * $add_ado;
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"تم انشاء تمويل جديد ✅

💠] الكمية : $setmember
🏷] السعر : $pluscoin
📣] القناة : $setchannel

♻️] تأكد من عدم ازالة البوت من الادمنية",
			   ]);
$setchannel = $cuser["userfild"]["$from_id"]["setchannel"];
$setmember = $cuser["userfild"]["$from_id"]["setmember"];
$pluscoin = $setmember * $add_ado;
$admin = $admin;
@mkdir("userch");
@mkdir("userch/$setchannel");
bot('sendmessage',[
	'chat_id'=>"$admin",
	'text'=>"تم انشاء تمويل جديد ✅

💠] الكمية : $setmember
🏷] السعر : $pluscoin
📣] القناة : $setchannel

معلومات العضو

اسم العضو : $name
معرف العضو : $user
ايدي العضو : $chat_id
",
  	]);
$coin = $cuser["userfild"]["$from_id"]["coin"];
$setchannel = $cuser["userfild"]["$from_id"]["setchannel"];
$setmember = $cuser["userfild"]["$from_id"]["setmember"];
$pluscoin = $setmember * $add_ado;
$coinplus = $coin - $pluscoin;
$cuser["userfild"]["$from_id"]["coin"]="$coinplus";
$cuser["userfild"]["$from_id"]["listorder"][]="$setchannel -> $setmember";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
$user["channellist"][]="$setchannel";
$user["setmemberlist"][]="$setmember";
$user["admin"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
@mkdir("userch");
@mkdir("userch/$setchannel");
$addlro = file_get_contents("SALEH/$chat_id/coirlt.txt");
$addrlad = $pluscoin + $addlro;
file_put_contents("SALEH/$chat_id/order.txt",$addrlad);
}
exit;}else { 
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
	'text'=>"عذراً القناة في حالة تمويل  ♻️",
  	]);
$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
exit;}}
if(file_get_contents("data/$from_id.txt") == "true"){
$pluscoin = file_get_contents("data/".$from_id."coin.txt");
$inviter = $cuser["userfild"]["$from_id"]["inviter"];
$invitercoin = $pluscoin / 100 * 20;
	       bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "اضافة النقود الان 💰",
            'show_alert' =>false
        ]);
		         bot('sendmessage',[
        	'chat_id'=>$inviter,
        	'text'=>"تم اضافة ( $invitercoin 💰 ) بنجاح ☑️",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
$coin = $cuser["userfild"]["$from_id"]["coin"];
$coinplus = $coin + $pluscoin;
$cuser["userfild"]["$from_id"]["coin"]="$coinplus";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
$inuser = json_decode(file_get_contents("data/$inviter.json"),true);
$coininviter = $inuser["userfild"]["$inviter"]["coin"];
$coinplusinviter = $coininviter + $invitercoin ;
$inuser["userfild"]["$inviter"]["coin"]="$coinplusinviter";;
$inuser = json_encode($inuser,true);
file_put_contents("data/$inviter.json",$inuser);
unlink("data/".$from_id."coin.txt");
unlink("data/$from_id.txt");
}
@$user = json_decode(file_get_contents("data/user.json"),true);
@$juser = json_decode(file_get_contents("data/$from_id.json"),true);
@$cuser = json_decode(file_get_contents("data/$from_id.json"),true);

if(!in_array($from_id, $user["userlist"]) == true) {
$user["userlist"][]= $from_id;
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
    }
$akl = json_decode(file_get_contents("akl/akl.json"),true);
if($akl["sToken"] == null){
$sTok="لم يتم التعين ✨";
}else{
$sTok=$akl["sToken"];
}
if($akl["sToken"] == null){
$Sdom="لم يتم التعيبن ✨";
}else{
$Sdom=$akl["sSite"];
}
if($data=="sitingbots"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
• مرحبا بك عزيزي $name 🌴
----------------------------
• حساب التواصل : $acont_admin 👜
• عدد ال$cdiamlaadf الدخول : $coins_start 🗣
• عدد $cdiamlaadf الاشتراك  : $add_aoc 📚
• سعر التمويل  : $add_ado 👥
• عموله التحويل : $work_add_day 🔰
• ادنى حد لل$cdiamlaadf : $adna_coins 🗳
• عدد $cdiamlaadf الهديه اليوميه : $day_coins 🎁
• موقع الرشق : $Sdom 🌐
*",
     'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
 'reply_markup'=>json_encode([
             'inline_keyboard'=>[
        [['text'=>"قسم التعيبن للنقاط ",'callback_data'=>"NAMERO11"]],
        [['text'=>"قسم فتح وقفل الازرار",'callback_data'=>'NAMERO9']],
         [['text'=>"قسم ربط موقع الرشق ",'callback_data'=>'NAMERO13']],
        [['text'=>"قسم التحكم في التمويل ",'callback_data'=>'NAMERO12']],
        [['text'=>"قسم اضافة الرصيد والكروت",'callback_data'=>'NAMERO10']],
         [['text'=>"قسم الخدمات",'callback_data'=>"xdmat" ]],
             [['text'=>"تحولي البوت الي بوت تمويل  : $nzambot",'callback_data'=>'nzambot']],
        [['text'=>" • رجوع •  ",'callback_data'=>"home"]],
               ]
         ])
 ]);
}


elseif($data =="paneladmin"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
• مرحبا بك عزيزي $name 🌴
----------------------------
• حساب التواصل : $acont_admin 👜
• عدد ال$cdiamlaadf الدخول : $coins_start 🗣
• عدد $cdiamlaadf الاشتراك  : $add_aoc 📚
• سعر التمويل  : $add_ado 👥
• عموله التحويل : $work_add_day 🔰
• ادنى حد لل$cdiamlaadf : $adna_coins 🗳
• عدد $cdiamlaadf الهديه اليوميه : $day_coins 🎁
• موقع الرشق : $Sdom 🌐 *",
     'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
 'reply_markup'=>json_encode([
             'inline_keyboard'=>[
        [['text'=>"قسم التعيبن للنقاط ",'callback_data'=>"NAMERO11"]],
        [['text'=>"قسم فتح وقفل الازرار",'callback_data'=>'NAMERO9']],
         [['text'=>"قسم ربط موقع الرشق ",'callback_data'=>'NAMERO13']],
        [['text'=>"قسم التحكم في التمويل ",'callback_data'=>'NAMERO12']],
        [['text'=>"قسم اضافة الرصيد والكروت",'callback_data'=>'NAMERO10']],
         [['text'=>"قسم الخدمات",'callback_data'=>"xdmat" ]],
             [['text'=>"تحولي البوت الي بوت تمويل  : $nzambot",'callback_data'=>'nzambot']],
        [['text'=>" • رجوع •  ",'callback_data'=>"home"]],  ]
           ])
   ]);
$cuser["userfild"]["$from_id"]["file"]="none";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
if($data == 'nzambot' and $nzambot =='✅'){
file_put_contents("edid/nzambot.txt","❌");
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
• مرحبا بك عزيزي $name 🌴
----------------------------
• حساب التواصل : $acont_admin 👜
• عدد ال$cdiamlaadf الدخول : $coins_start 🗣
• عدد $cdiamlaadf الاشتراك  : $add_aoc 📚
• سعر التمويل  : $add_ado 👥
• عموله التحويل : $work_add_day 🔰
• ادنى حد لل$cdiamlaadf : $adna_coins 🗳
• عدد $cdiamlaadf الهديه اليوميه : $day_coins 🎁
• موقع الرشق : $Sdom 🌐 *",
     'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
 'reply_markup'=>json_encode([
             'inline_keyboard'=>[
        [['text'=>"قسم التعيبن للنقاط ",'callback_data'=>"NAMERO11"]],
        [['text'=>"قسم فتح وقفل الازرار",'callback_data'=>'NAMERO9']],
         [['text'=>"قسم ربط موقع الرشق ",'callback_data'=>'NAMERO13']],
        [['text'=>"قسم التحكم في التمويل ",'callback_data'=>'NAMERO12']],
        [['text'=>"قسم اضافة الرصيد والكروت",'callback_data'=>'NAMERO10']],
         [['text'=>"قسم الخدمات",'callback_data'=>"xdmat" ]],
             [['text'=>"تحولي البوت الي بوت تمويل  : $nzambot",'callback_data'=>'nzambot']],
        [['text'=>" • رجوع •  ",'callback_data'=>"home"]], 
 ] 
])]);
file_put_contents("edid/aklSALEHnm1.txt",'قسم الخدمات 📚');
}
if($data == 'nzambot' and $nzambot =='❌'){
file_put_contents("edid/nzambot.txt","✅");
file_put_contents("edid/aklSALEHnm1.txt",'تمويل قناتك 📚');
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*
• مرحبا بك عزيزي $name 🌴
----------------------------
• حساب التواصل : $acont_admin 👜
• عدد ال$cdiamlaadf الدخول : $coins_start 🗣
• عدد $cdiamlaadf الاشتراك  : $add_aoc 📚
• سعر التمويل  : $add_ado 👥
• عموله التحويل : $work_add_day 🔰
• ادنى حد لل$cdiamlaadf : $adna_coins 🗳
• عدد $cdiamlaadf الهديه اليوميه : $day_coins 🎁
• موقع الرشق : $Sdom 🌐 *",
     'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
 'reply_markup'=>json_encode([
             'inline_keyboard'=>[
        [['text'=>"قسم التعيبن للنقاط ",'callback_data'=>"NAMERO11"]],
        [['text'=>"قسم فتح وقفل الازرار",'callback_data'=>'NAMERO9']],
         [['text'=>"قسم ربط موقع الرشق ",'callback_data'=>'NAMERO13']],
        [['text'=>"قسم التحكم في التمويل ",'callback_data'=>'NAMERO12']],
        [['text'=>"قسم اضافة الرصيد والكروت",'callback_data'=>'NAMERO10']],
         [['text'=>"قسم الخدمات",'callback_data'=>"xdmat" ]],
             [['text'=>"تحولي البوت الي بوت تمويل  : $nzambot",'callback_data'=>'nzambot']],
        [['text'=>" • رجوع •  ",'callback_data'=>"home"]], 
 ] 
])]);
}
if($data=="NAMERO9"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• مرحبا بك عزيزي $name 🌴

• في لوحة تحكم الادمن الخاصه بالبوت يمكنك التحكم في كل اوامر البوت من الكيبورد 🔰
----------------------------
⚙️- قسم فتح وقفل الاقسام -⚙️*",
     'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
 'reply_markup'=>json_encode([
             'inline_keyboard'=>[
        [['text'=>"فتح الرشق",'callback_data'=>'opan_ras'],['text'=>"قفل الرشق",'callback_data'=>'off_ras']],
        [['text'=>"فتح التمويل",'callback_data'=>'opan_tmwel'],['text'=>"قفل التمويل",'callback_data'=>'off_tmwel']],
        [['text'=>"فتح تحويل ال$cdiamlaadf",'callback_data'=>'opan_coadd'],['text'=>"قفل تحويل ال$cdiamlaadf",'callback_data'=>'off_coadd']],
        [['text'=>"فتح الهديه اليوميه",'callback_data'=>'opan_add_day'],['text'=>"قفل الهديه اليوميه",'callback_data'=>'off_add_day']],
        [['text'=>"فتح تعريف الاشتراك",'callback_data'=>'opan_asttacbot'],['text'=>"قفل تعريف الاشتراك",'callback_data'=>'off_asttacbot']],
        [['text'=>" • رجوع •  ",'callback_data'=>"sitingbots"]],
               ]
         ])
 ]);
}
if($data=="NAMERO10"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• مرحبا بك عزيزي $name 🌴

• في لوحة تحكم الادمن الخاصه بالبوت يمكنك التحكم في كل اوامر البوت من الكيبورد 🔰
----------------------------
⚙️- قسم التعيين -⚙️*
",
     'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
 'reply_markup'=>json_encode([
             'inline_keyboard'=>[
       [['text'=>" تعيين $cdiamlaadf الدخول",'callback_data'=>'coins_start'],['text'=>"تعيين معرف التواصل",'callback_data'=>'username_admin_twasl']],        
        [['text'=>"زيادة $cdiamlaadf",'callback_data'=>'admin_sendcon'],['text'=>"خصم $cdiamlaadf",'callback_data'=>'admin_deletecon']],
        [['text'=>"صنع كارت",'callback_data'=>'admin_code'],['text'=>"ارسال $cdiamlaadf للكل",'callback_data'=>'admin_bccon']],
        [['text'=>" • رجوع •  ",'callback_data'=>"sitingbots"]],
               ]
         ])
 ]);
}

if($data=="NAMERO11"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• مرحبا بك عزيزي $name 🌴

• في لوحة تحكم الادمن الخاصه بالبوت يمكنك التحكم في كل اوامر البوت من الكيبورد 🔰
----------------------------
⚙️- قسم التعيين للنقاط والقنوات-⚙️*",
     'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
 'reply_markup'=>json_encode([
             'inline_keyboard'=>[
             [['text'=>"ادنى حد عدد لل$cdiamlaadf ",'callback_data'=>'adna_coins'],['text'=>"تعيين الهدية اليومية ",'callback_data'=>'day_coins']],
        [['text'=>"تعين ادني حد للتحويل",'callback_data'=>'work_add_day'],['text'=>"تعين عدد $cdiamlaadf الاشتراك",'callback_data'=>'add_cono_tmwel']],
        [['text'=>"تعين رساله الشحن",'callback_data'=>'msg_asar'],['text'=>"تعين سعر التمويل",'callback_data'=>'add_co_tmwel']],
        [['text'=>"تعين قناة البوت",'callback_data'=>'add_ch_admin'],['text'=>"تعين رساله الشروط",'callback_data'=>'add_msg_sro']],
[['text'=>"تعين اسم البوت",'callback_data'=>'add_nam_bot']],
        [['text'=>"تعين قناة الاشعارات",'callback_data'=>'aspatchid'],['text'=>"تعين رساله الاشعار",'callback_data'=>'msgaspat']],
        [['text'=>"تعين عملة البوت",'callback_data'=>'cdiamlaadf']],
                [['text'=>" • رجوع •  ",'callback_data'=>"sitingbots"]],
               ]
         ])
 ]);
}
if($data=="NAMERO12"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• مرحبا بك عزيزي $name 🌴

• في لوحة تحكم الادمن الخاصه بالبوت يمكنك التحكم في كل اوامر البوت من الكيبورد 🔰
----------------------------
⚙️- قسم التحكم في التمويل -⚙️*",
     'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
 'reply_markup'=>json_encode([
             'inline_keyboard'=>[
                     [['text'=>"اضافه تمويل",'callback_data'=>'admin_addfinance'],['text'=>"مسح قناة",'callback_data'=>'admin_deletech']],
        [['text'=>"جميع القنوات",'callback_data'=>'admin_listfinance']],
             [['text'=>"ادنى حد عدد لل$cdiamlaadf ",'callback_data'=>'adna_coins'],['text'=>"تعين سعر التمويل",'callback_data'=>'add_co_tmwel']],
                     [['text'=>" • رجوع •  ",'callback_data'=>"sitingbots"]],
               ]
         ])
 ]);
}
if($data=="NAMERO13"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• مرحبا بك عزيزي $name 🌴

• في لوحة تحكم الادمن الخاصه بالبوت يمكنك التحكم في كل اوامر البوت من الكيبورد 🔰
----------------------------
⚙️- قسم ربط موقع الرشق -⚙️*",
     'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
 'reply_markup'=>json_encode([
             'inline_keyboard'=>[
        [['text'=>"ربط توكن لموقع",'callback_data'=>"token"]],[['text'=>"ربط دومين موقع الرشق",'callback_data'=>"SiteDomen" ]],
                     [['text'=>" • رجوع •  ",'callback_data'=>"sitingbots"]],
               ]
         ])
 ]);
}

if($data == 'opan_ras'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*تم بنجاح فتح قسم الرشق ✅*",
 'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'sitingbots']],
 ] 
])]);
file_put_contents("edid/opan.txt","✅");
file_put_contents("edid/nzambot.txt","❌");
}
if($data == 'off_ras'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*تم بنجاح قفل قسم الرشق ❌*",
 'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'sitingbots']],
 ] 
])]);
file_put_contents("edid/opan.txt","❌");
}
if($data == 'opan_tmwel'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*تم بنجاح فتح قسم التمويل ✅*",
 'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'sitingbots']],
 ] 
])]);
file_put_contents("edid/tmwel.txt","✅");
}
if($data == 'off_tmwel'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*تم بنجاح قفل قسم التمويل ❌*",
 'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'sitingbots']],
 ] 
])]);
file_put_contents("edid/tmwel.txt","❌");
}
if($data == 'opan_coadd'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*تم بنجاح فتح قسم التحويل ✅*",
 'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'sitingbots']],
 ] 
])]);
file_put_contents("edid/coadd.txt","✅");
}
if($data == 'off_coadd'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*تم بنجاح قفل قسم التحويل ❌*",
 'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'sitingbots']],
 ] 
])]);
file_put_contents("edid/coadd.txt","❌");
}
if($data == 'opan_add_day'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*تم بنجاح فتح قسم الهدية ✅*",
 'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'sitingbots']],
 ] 
])]);
file_put_contents("edid/add_day.txt","✅");
}
if($data == 'off_add_day'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*تم بنجاح قفل قسم الهدية ❌*",
 'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'sitingbots']],
 ] 
])]);
file_put_contents("edid/add_day.txt","❌");
}
if($data == 'opan_asttacbot'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*تم بنجاح فتح قسم التعريف ✅*",
 'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'sitingbots']],
 ] 
])]);
file_put_contents("edid/asttacbot.txt","✅");
}
if($data == 'off_asttacbot'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*تم بنجاح قفل قسم التعريف ❌*",
 'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"رجوع",'callback_data'=>'sitingbots']],
 ] 
])]);
file_put_contents("edid/asttacbot.txt","❌");
}
if($data == 'msg_asar'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*مرحبا عزيزي

قوم بارسال رساله شراء نقاط الان*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'paneladmin']],
                     ]
               ])
 ]);
file_put_contents("edid/as1.txt","on");
}
if($text and file_get_contents("edid/as1.txt") == "on" and $text != '/start'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'home']],
                     ]
               ])
]);
unlink("edid/as1.txt");
file_put_contents("edid/msgasar.txt",$text);
}
if($data == 'cdiamlaadf'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*مرحبا عزيزي

قوم بارسال الكلمه الي تريدها الان*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'paneladmin']],
                     ]
               ])
 ]);
file_put_contents("edid/acdiamlaadf.txt","on");
}
if($text and file_get_contents("edid/acdiamlaadf.txt") == "on" and $text != '/start'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'home']],
                     ]
               ])
]);
unlink("edid/acdiamlaadf.txt");
file_put_contents("edid/cdiamlaadf.txt",$text);
}
if($data == 'msgaspat'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• ارسال الان الكليشه .

- يمكنك وضع بعض الاضافات الى كليشه الاشعارات من خلال استخدام الاهاشتاكات التاليه :
  
1. `#nameService` : لوضع اسم الخدمه
2. `#coinService` : لوضع سعر الخدمه
3. `#numberall` : لوضع عدد الطلبات
4. `#Link` : لوضع رابط الطلب
5. `#name_user` : لوضع اسم الشخص برابط
6. `#numberLink` : لوضع عدد الطلب
7. `#id` : لوضع ايدي العضو

*يمكنك تعين نص ماركداون في البوت , عند كتابه معرف قناتك او معرفك قم بوضع [] بين المعرف .*

",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'paneladmin']],
                     ]
               ])
 ]);
file_put_contents("edid/msgaspat2.txt","on");
}
if($text and file_get_contents("edid/msgaspat2.txt") == "on" and $text != '/start'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'home']],
                     ]
               ])
]);
unlink("edid/msgaspat2.txt");
file_put_contents("edid/msgaspat.txt",$text);
}

if($data == 'add_msg_sro'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*مرحبا عزيزي

قوم بارسال رساله الشروط الان*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'paneladmin']],
                     ]
               ])
 ]);
file_put_contents("edid/as2.txt","on");
}
if($text and file_get_contents("edid/as2.txt") == "on" and $text != '/start'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'home']],
                     ]
               ])
]);
unlink("edid/as2.txt");
file_put_contents("edid/msgasro.txt",$text);
}
if($data == 'add_nam_bot'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*مرحبا عزيزي

قوم بارسال اسم البوت الان*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'paneladmin']],
                     ]
               ])
 ]);
file_put_contents("edid/as34.txt","on");
}
if($text and file_get_contents("edid/as34.txt") == "on" and $text != '/start'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'home']],
                     ]
               ])
]);
unlink("edid/as34.txt");
file_put_contents("edid/nambot.txt",$text);
}
if($data == 'add_co_tmwel'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• ارسل عدد ال$cdiamlaadf مقابل العضو الواحد 📬",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'paneladmin']],
                     ]
               ])
 ]);
file_put_contents("edid/add_ao.txt","on");
}
if($text and file_get_contents("edid/add_ao.txt") == "on" and $text != '/start'){
if(preg_match('/([0-9])/i',$text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'home']],
                     ]
               ])
]);
unlink("edid/add_ao.txt");
file_put_contents("edid/addado.txt",$text);
}}
if($data == 'add_cono_tmwel'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• ارسل عدد ال$cdiamlaadf التي يحصل عليها الشخص عند الاشتراك في قناة 📬",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'paneladmin']],
                     ]
               ])
 ]);
file_put_contents("edid/add_aoc.txt","on");
}
if($text and file_get_contents("edid/add_aoc.txt") == "on" and $text != '/start'){
if(preg_match('/([0-9])/i',$text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'home']],
                     ]
               ])
]);
unlink("edid/add_aoc.txt");
file_put_contents("edid/add_aoc.txt",$text);
}}
if($data == 'add_ch_admin'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• ارسل معرف القناة الان 📬",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'paneladmin']],
                     ]
               ])
 ]);
file_put_contents("edid/chadm.txt","on");
}
if($text and file_get_contents("edid/chadm.txt") == "on" and $text != '/start'){
if(preg_match('/^(@)(.*)/s',$text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'home']],
                     ]
               ])
]);
unlink("edid/chadm.txt");
file_put_contents("edid/chadmin.txt",$text);
}}
if($data == 'aspatchid'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*- ارسل توجيه من القناة لرساله نصيه فقط !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                   [['text'=>"مسح القناة وتعطيل النشر ",'callback_data'=>'deletaspat']],
				   [['text'=>"رجوع",'callback_data'=>'paneladmin']],
                     ]
               ])
 ]);
file_put_contents("edid/aspatchid.txt","on");
}
if($text and file_get_contents("edid/aspatchid.txt") == "on" and $text != '/start'){
if($message->forward_from_chat ){
$id_channel= $message->forward_from_chat->id;
$get = file_get_contents("http://api.tlgr.org/bot".API_KEY."/getChat?chat_id=$id_channel"); 
$msg=$a->result->message_id;
$js = json_decode($get); 
$title=$js->result->title;
$channel=$js->result->username;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*تم الحفظ بنجاح ✅*

اسم القناة : [$title]
معرف القناة : [@$channel]
ايدي القناة : $id_channel",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'home']],
                     ]
               ])
]);
unlink("edid/aspatchid.txt");
file_put_contents("edid/aspatchid1.txt",$id_channel);
}}
if($data == 'deletaspat'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*- تم مسح القناة وتعطيل نشر الاشعارات !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'paneladmin']],
                     ]
               ])
 ]);
unlink("edid/aspatchid1.txt");
}
elseif($data == "work_add_day"){
if(in_array($from_id,$Dev)){
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
		'text'=>"• ارسل عدد ادني حد التحويل الان .",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع",'callback_data'=>'paneladmin']
    ],
          ]
    ])
		]);
$cuser["userfild"]["$from_id"]["file"]="work_add_day";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif($juser["userfild"]["$from_id"]["file"] == 'work_add_day') {
if(preg_match('/([0-9])/i',$text)){
  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"✅ تم حفظ ادني حد التحويل $text $cdiamlanoo ",
      'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع",'callback_data'=>'paneladmin']
    ],
          ]
    ])
   ]);
file_put_contents("edid/work_add_day.txt",$text);
$cuser["userfild"]["$from_id"]["file"]="work_add_ay";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}}

#تعيين $cdiamlaadf الدخول 
if($data == 'coins_start'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• ارسل عدد ال$cdiamlaadf التي يحصل عليها المستخدم من مشاركة الرابط الخاص به .*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'paneladmin']],
                     ]
               ])
 ]);
file_put_contents("edid/coinstart.txt","on");
}
if($text and file_get_contents("edid/coinstart.txt") == "on" and $text != '/start'){
if(preg_match('/([0-9])/i',$text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*✅ تم حفظ $cdiamlaadf الدخول $text $cdiamlanoo *",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'home']],
                     ]
               ])
]);
unlink("edid/coinstart.txt");
file_put_contents("edid/coinsstart.txt",$text);
}}

#تعيين حساب التواصل 
if($data == 'username_admin_twasl'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• ارسال معرف حسابك او بوت تواصل الخاص بك 📬",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'paneladmin']],
                     ]
               ])
 ]);
file_put_contents("edid/oen_admin.txt","on");
}
if($text and file_get_contents("edid/oen_admin.txt") == "on" and $text != '/start'){
if(preg_match('/^(@)(.*)/s',$text)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*تم الحفظ بنجاح ✅*

: [$text]
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"رجوع",'callback_data'=>'home']],
                     ]
               ])
]);
unlink("edid/oen_admin.txt");
file_put_contents("edid/acont_admin.txt",$text);
}
}
#ادنى حد
elseif($data == "adna_coins"){
if(in_array($from_id,$Dev)){
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
		'text'=>" قم بإرسال عدد $cdiamlaadf ادنئ حد لطلب التمويل",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
		]);
$cuser["userfild"]["$from_id"]["file"]="adna_coins";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif($juser["userfild"]["$from_id"]["file"] == 'adna_coins') {
 if(preg_match('/([0-9])/i',$text)){
  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"✅ تم حفظ الحد الادنئ $text $cdiamlanoo ",
      'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
   ]);
file_put_contents("data/adna_coins.txt",$text);
}}
elseif($data == "day_coins"){
if(in_array($from_id,$Dev)){
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
		'text'=>"قم بإرسال عدد $cdiamlaadf  الهدية اليومية",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
		]);
$cuser["userfild"]["$from_id"]["file"]="day_coins";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif($juser["userfild"]["$from_id"]["file"] == 'day_coins') {
 if(preg_match('/([0-9])/i',$text)){
  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"✅ تم حفظ $cdiamlaadf الهدية اليومية $text $cdiamlanoo ",
      'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
   ]);
file_put_contents("data/day_coins.txt",$text);
}}
elseif($data == "admin_addfinance"){
if(in_array($from_id,$Dev)){
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
		'text'=>"• قم برفع البوت ادمن في القناة من ثم ارسل معرف القناة",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع",'callback_data'=>'paneladmin']
    ],
          ]
    ])
		]);
$cuser["userfild"]["$from_id"]["file"]="addfinance";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif($juser["userfild"]["$from_id"]["file"] == 'addfinance') {
  $checkadmin = getChatstats($text,$token);
  if($checkadmin == true){
  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"• ارسل عدد الاعضاء المراد اضافته",
      'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
   ]);
$juser["idforsend"]="$text";
$juser["userfild"]["$from_id"]["file"]="addfinance_2";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}else {
  bot('sendmessage',[
            'chat_id'=>$chat_id,
   'text' => "ارفع البوت ادمن اولا ❗️",
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[
['text'=>"رجوع",'callback_data'=>'paneladmin']
],
    ]
])
]);
}
}
elseif($juser["userfild"]["$from_id"]["file"] == 'addfinance_2') {
if(preg_match('/([0-9])/i',$text)){
$id = $juser["idforsend"];
$user["finance"][]=[$id,$text];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"• تم الحفظ",
	  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[
['text'=>"رجوع",'callback_data'=>'paneladmin']
],
    ]
])
 ]);
$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}}
if(preg_match("/^(coin)_(.*)_(.*)/s",$data)){
   preg_match("/^(coin)_(.*)_(.*)/s",$data,$matchaa);
  $channel = $matchaa[2];
  $coinpluss = $matchaa[3];
  $join = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=$channel&user_id=".$from_id);
  if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))=== false){
    bot('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message_id
       ]);
 bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "تم اعطائك ($coinpluss)",
            'show_alert' =>false
        ]);
    $inuser = json_decode(file_get_contents("data/$from_id.json"),true);
    $coin = $inuser["userfild"]["$from_id"]["coin"];
    $coinplus = $coin + $coinpluss;
    $inuser["userfild"]["$from_id"]["coin"]="$coinplus";
    $inuser = json_encode($inuser,true);
    file_put_contents("data/$from_id.json",$inuser);
}else {
  bot('answercallbackquery', [
    'callback_query_id' =>$membercall,
    'text' => "عذرا ❗️اشترك بلقناة اولا ",
    'show_alert' =>true
]);
}
}
elseif($data=="admin_channels"){
if(in_array($from_id,$Dev)){
$order = $user["channellist"];
$ordercount = count($user["channellist"]);
for($z = 0;$z <= count($order)-1;$z++){
$result = $result.$order[$z]."\n";
}
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
		'text'=>"📣 القنوات الجاري تمويلها($ordercount):
$result",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[
['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
],
      ]
])
		]);
		}
}
elseif($data=="admin_listfinance"){
if(in_array($from_id,$Dev)){
$arr = $user['finance'];
$out = "" ;
for($z = 0;$z <= count($arr);$z++){
if($arr[$z][0] != null and $arr[$z][0] != ""){
$out = $out.$arr[$z][0]." - ".$arr[$z][1]."\n";
}
}
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
		'text'=>"هذه جميع القنوات الجاري تمويله 
		
$out",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[
['text'=>"رجوع",'callback_data'=>'paneladmin']
],
 ]
])
]);}}
elseif($data == "admin_deletech"){
if(in_array($from_id,$Dev)){
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
		'text'=>"ارسل معرف القناة الان ليتم حذفه من التمويل",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[
['text'=>"رجوع",'callback_data'=>'paneladmin']
],
      ]
])
		]);
$cuser["userfild"]["$from_id"]["file"]="remorder";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif($juser["userfild"]["$from_id"]["file"] == 'remorder') {
$how = array_search($text,$user["channellist"]);
unset($user["setmemberlist"][$how]);
unset($user["channellist"][$how]);
unset($user["admin"][$how]);
$user["channellist"]=array_values($user["channellist"]);
$user["setmemberlist"]=array_values($user["setmemberlist"]);
$user["admin"]=array_values($user["admin"]);
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"• تم الحفظ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[
['text'=>"رجوع",'callback_data'=>'paneladmin']
],
      ]
])
]);
}
elseif($data == "admin_sendcon"){
if(in_array($from_id,$Dev)){
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
		'text'=>"ارسل ايدي العضو او رساله موجه منه",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
		]);
$cuser["userfild"]["$from_id"]["file"]="adminsendcoin";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
/*تم تطوير الملف بواسطه ناميرو @s_p_p1
- القناه @Bots_5
- اقسم بالله ما اسامح اي حد يغير الحقوق ليوم الدين */
elseif($juser["userfild"]["$from_id"]["file"] == 'adminsendcoin') {
if($text == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*لا يمكن ارسال $cdiamlaadf لمالك البوت حساب المالك يجب تفقد البوت منه ليعرف المشاكل *",
 'parse_mode'=>"markdown",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[
['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
],]
])
 ]);
$juser["userfild"]["$from_id"]["file"]="null";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
return false;}
if($forward_from == true) {
  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"جيد, الأن ارسل عدد ال$cdiamlaadf ",
      'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
   ]);
$juser["idforsend"]="$forward_from_id";
$juser["userfild"]["$from_id"]["file"]="sethowsendcoin";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
else
{
	         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"جيد, الأن ارسل عدد ال$cdiamlaadf",
	  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
  [
  ['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
  ],
        ]
  ])
 ]);
$juser["idforsend"]="$text";
$juser["userfild"]["$from_id"]["file"]="sethowsendcoin";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
}
elseif($juser["userfild"]["$from_id"]["file"] == 'sethowsendcoin') {
if(preg_match('/([0-9])/i',$text)){
$id = $juser["idforsend"];
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم بنجاح ارسال $text الي $id",
	  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[
['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
],
    ]
])
 ]);
          bot('sendmessage',[
        	'chat_id'=>$id,
        	'text'=>"تم ارسال لك $text $cdiamlanoo هدية من البوت ",
			               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
$inuser = json_decode(file_get_contents("data/$id.json"),true);
$coin = $inuser["userfild"]["$id"]["coin"];
$coinplus = $coin + $text;
$inuser["userfild"]["$id"]["coin"]="$coinplus";
$inuser = json_encode($inuser,true);
file_put_contents("data/$id.json",$inuser);
$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}}
elseif($data == "admin_deletecon"){
if(in_array($from_id,$Dev)){
  bot('editmessagetext',[
                    'chat_id'=>$chat_id,
         'message_id'=>$message_id,
      'text'=>"ارسل رسالة موجهة أو ايدي العضو  ",
      'reply_markup'=>json_encode([
          'inline_keyboard'=>[
      [
      ['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
      ],
            ]
      ])
      ]);
$cuser["userfild"]["$from_id"]["file"]="adminsendcoin2";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif($juser["userfild"]["$from_id"]["file"] == 'adminsendcoin2') {
if($forward_from == true) {
  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"جيد, الأن ارسل عدد ال$cdiamlaadf التي تريد خصمها",
      'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
   ]);
$juser["idforsend"]="$forward_from_id";
$juser["userfild"]["$from_id"]["file"]="sethowsendcoin2";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
else
{
 bot('sendmessage',[
          'chat_id'=>$chat_id,
          'text'=>"جيد, الأن ارسل عدد ال$cdiamlaadf التي تريد خصمها",
    'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
  [
  ['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
  ],
        ]
  ])
 ]);
$juser["idforsend"]="$text";
$juser["userfild"]["$from_id"]["file"]="sethowsendcoin2";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
}
elseif($juser["userfild"]["$from_id"]["file"] == 'sethowsendcoin2') {
if(preg_match('/([0-9])/i',$text)){
$id = $juser["idforsend"];
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"تم خصم [$text] من $id",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
],
]
])
]);
          bot('sendmessage',[
        	'chat_id'=>$id,
        	'text'=>"تم خصم [$text] من $cdiamlao من قبل البوت",
			               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
$inuser = json_decode(file_get_contents("data/$id.json"),true);
$coin = $inuser["userfild"]["$id"]["coin"];
$coinplus = $coin - $text;
$inuser["userfild"]["$id"]["coin"]="$coinplus";
$inuser = json_encode($inuser,true);
file_put_contents("data/$id.json",$inuser);
$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}}
@$user = json_decode(file_get_contents("data/user.json"),true);
@$juser = json_decode(file_get_contents("data/$from_id.json"),true);
@$cuser = json_decode(file_get_contents("data/$from_id.json"),true);

if(!in_array($from_id, $user["userlist"]) == true) {
$user["userlist"][]= $from_id;
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
    }
elseif($data == "admin_code"){
$Rand = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), -8);
$codet = $user["codecoin"];
file_put_contents("edid/hownmcode.txt","$codet");
bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
 'text'=>"• ارسال عدد ال$cdiamlaadf المراد وضعها في الهدية .",
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[
['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
],
    ]
])
]);
$user["codecoin"]="$Rand";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
$cuser["userfild"]["$from_id"]["file"]="howcodecoin";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
elseif($juser["userfild"]["$from_id"]["file"] == 'howcodecoin') {
if(preg_match('/([0-9])/i',$text)){
$codr = file_get_contents("edid/hownmcode.txt");
unlink("edid/howcdead $codr.txt");
unlink("edid/howcode $codr.txt");
unlink("edid/howcodeadd $codr.txt");
$code = $user["codecoin"];
file_put_contents("edid/howcode $code.txt","$text");
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"        • ارسل عدد الاعضاء الذين يمكنهم الحصول على الهدية .",
  'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
   'inline_keyboard'=>[
[
['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
],
     ]
])
 ]);
$juser["userfild"]["$from_id"]["file"]="howcfiadd";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}}
elseif($juser["userfild"]["$from_id"]["file"] == 'howcfiadd') {
if(preg_match('/([0-9])/i',$text)){
if($text=="1"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*عذرا اقل عدد يمكنك تعينه من الاشخاص هوا 2 عضو ❌*",
'parse_mode'=>"markdown",
  'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
   'inline_keyboard'=>[
[
['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
],
     ]
])
 ]);return false;}
$code = $user["codecoin"];
file_put_contents("edid/howcodeadd $code.txt","$text");
$wocfiadd = file_get_contents("edid/howcode $code.txt");
unlink("edid/howcode $code.txt");
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
• تم صنع كارت هدية بقيمة *$wocfiadd* $cdiamlanoo

• الكارت : $code

• الرابط صالح لمده *30* ساعة

• يمكن الي *$text* عضو الاستمتاع بالهدية
",
'parse_mode'=>"markdown",
  'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
   'inline_keyboard'=>[
[
['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
],
     ]
])
 ]);
$user["howcoincode"]="$wocfiadd";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}}
elseif($data == "admin_bccon") {
if(in_array($from_id,$Dev)){
  bot('editmessagetext',[
                    'chat_id'=>$chat_id,
         'message_id'=>$message_id,
      'text'=>"• ارسال عدد ال$cdiamlaadf المراد ارسالها الى الجميع .",
      'reply_markup'=>json_encode([
          'inline_keyboard'=>[
      [
      ['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
      ],
            ]
      ])
      ]);
$cuser["userfild"]["$from_id"]["file"]="sendcointoall";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
}
elseif($juser["userfild"]["$from_id"]["file"] == 'sendcointoall') {
if(preg_match('/([0-9])/i',$text)){
$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
$numbers = $user["userlist"];
$all = count($user["userlist"]);

bot('sendmessage',[
          'chat_id'=>$chat_id,
          'text'=>"• تم ارسال $text $cdiamlanoo الى جميع مستخدمين البوت الخاص بك .

- قمت بارسال رساله اليهم لكي تخبرهم انك قمت باضافه $text $cdiamlanoo الى حساباتهم .",
    'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
  [
  ['text'=>"رجوع ➡️",'callback_data'=>'paneladmin']
  ],
        ]
  ])
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
     $user = file_get_contents('Member.txt');
    $members = explode("\n",$user);
    if(!in_array($numbers[$z],$members)){
      $add_user = file_get_contents('Member.txt');
      $add_user .= $numbers[$z]."\n";
     file_put_contents('Member.txt',$add_user);
   bot('sendmessage',[
          'chat_id'=>$numbers[$z],
		  'text'=>"تم اعطائك [$text] $cdiamlaadf هدية من البوت ",
          'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ➡️",'callback_data'=>'panel']
				   ],
                     ]
               ])
        ]);
$juser = json_decode(file_get_contents("data/$numbers[$z].json"),true);
$coin = $juser["userfild"]["$numbers[$z]"]["coin"];
$coinplus = $coin + $text;
$juser["userfild"]["$numbers[$z]"]["coin"]="$coinplus";
$juser = json_encode($juser,true);
file_put_contents("data/$numbers[$z].json",$juser);
}
}
}
}
$d = date('D');
$day = explode("\n",file_get_contents("data/".$d.".txt"));
if($d == "Sat"){
unlink("data/Fri.txt");
}
if($d == "Sun"){
unlink("data/Sat.txt");
}
if($d == "Mon"){
unlink("data/Sun.txt");
}
if($d == "Tue"){
unlink("data/Mon.txt");
}
if($d == "Wed"){
unlink("data/The.txt");
}
if($d == "Thu"){
unlink("data/Wedtxt");
}
if($d == "Fri"){
unlink("data/Thu.txt");
}
$add_day = file_get_contents("edid/add_day.txt");
if($data == 'kk' and $add_day =='❌'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"• تم ايقاف القسم مؤقتا من قبل المطور ⚙️",
 'show_alert'=>true,
]);
}
if($data == 'kk' and $add_day =='✅'){
  if(!in_array($from_id, $day)){
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"• مبروك لقد حصلت علي الهديه اليوميه  $day_coins $cdiamlanoo ✅",
 'show_alert'=>true,
]);
 file_put_contents("data/".$d.'.txt',$from_id."\n",FILE_APPEND);
$cuser["userfild"]["$from_id"]["coin"]+=$day_coins;
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}else{
date_default_timezone_set('Africa/Cairo');
$current_time = time();
$end_of_day = strtotime('tomorrow') - 1;
$remaining_seconds = $end_of_day - $current_time;
$hours = floor($remaining_seconds / 3600);
$minutes = floor(($remaining_seconds % 3600) / 60);
$seconds = $remaining_seconds % 60;
$aaastf = " $hours";
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text' =>"طالب بالهدية بعد $hours ساعة",
        'show_alert'=>true,
]);
}
}
$d = date('D');
$day = explode("\n",file_get_contents("data/".$d.".txt"));
if($d == "Sat"){
unlink("data/Fri.txt");
}
if($d == "Sun"){
unlink("data/Sat.txt");
}
if($d == "Mon"){
unlink("data/Sun.txt");
}
if($d == "Tue"){
unlink("data/Mon.txt");
}
if($d == "Wed"){
unlink("data/The.txt");
}
if($d == "Thu"){
unlink("data/Wedtxt");
}
if($d == "Fri"){
unlink("data/Thu.txt");
}
$add_day = file_get_contents("edid/add_day.txt");
if($data == 'add_day' and $add_day =='❌'){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"• تم ايقاف القسم مؤقتا من قبل المطور ⚙️",
 'show_alert'=>true,
]);
}
if($data == 'add_day' and $add_day =='✅'){
  if(!in_array($from_id, $day)){
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"• مبروك لقد حصلت علي الهديه اليوميه  $day_coins $cdiamlanoo ✅",
 'show_alert'=>true,
]);
$invite = $cuser["userfild"]["$from_id"]["invite"];
$coin = $cuser["userfild"]["$from_id"]["coin"];
 file_put_contents("data/".$d.'.txt',$from_id."\n",FILE_APPEND);
$cuser["userfild"]["$from_id"]["coin"]+=$day_coins;
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
date_default_timezone_set('Africa/Cairo');
$current_time = time();
$end_of_day = strtotime('tomorrow') - 1;
$remaining_seconds = $end_of_day - $current_time;
$hours = floor($remaining_seconds / 3600);
$minutes = floor(($remaining_seconds % 3600) / 60);
$seconds = $remaining_seconds % 60;
$aaastf = " $hours";
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"• مرحبا بك عزيزي $name 🌴
• في قسم ضبط الحساب ⚙️
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
[['text'=>" نقاطك عدد",'callback_data'=>'kkkk'],['text'=>"$coin 💧",'callback_data'=>'kkkk']],
                     [['text'=>" المستهلكه النقاط️",'callback_data'=>'kkkk'],['text'=>"$SALEHto 💧",'callback_data'=>'kkkk']],
                                          [['text'=>" احلاتك عدد ️",'callback_data'=>'kkkk'],['text'=>"$invite 💧",'callback_data'=>'kkkk']],
                                                                                    [['text'=>"للهديه المتبقي ️",'callback_data'=>'kkkk'],['text'=>"$hours S 💧",'callback_data'=>'kkkk']],
                     [['text'=>"رجوع الي الرئيسية ♻️",'callback_data'=>'panel']],
                     ]
               ])
			   ]);
}else{
date_default_timezone_set('Africa/Cairo');
$current_time = time();
$end_of_day = strtotime('tomorrow') - 1;
$remaining_seconds = $end_of_day - $current_time;
$hours = floor($remaining_seconds / 3600);
$minutes = floor(($remaining_seconds % 3600) / 60);
$seconds = $remaining_seconds % 60;
$aaastf = " $hours";
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text' =>"طالب بالهدية بعد $hours ساعة",
        'show_alert'=>true,
]);
}
}
unlink("error_log");
if($data=="NAMERO77"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• مرحبا بك عزيزي $name 🌴

• في لوحة تحكم الادمن في قسم الشحن التلقائي 🗳
----------------------------
⚙️- يمكنك التحكم فيه من هنا  -⚙️*",
     'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
 'reply_markup'=>json_encode([
             'inline_keyboard'=>[
        [['text'=>"فتح الشحن التلقائي ⚙️",'callback_data'=>"SALEH77"]],[['text'=>"قفل الشحن التلقائي 👜",'callback_data'=>"SALEH78" ]],
                     [['text'=>" • رجوع •  ",'callback_data'=>"home"]],
               ]
         ])
 ]);
}
if($data=="NAMERO78"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• مرحبا بك عزيزي $name 🌴

• هذا القسم للبوتات المدفوعة فقط 🤖

- يمكنك جعل بوتك مدفوع من خلال بوت ناميرو ⚙️
@@s_p_p1

• المميزات الاساسية 📦

1. اخفاء الاعلانات بشكل تام او الاشتراكات الاجبارية 🌐
2. استقبال الشحن التلقائي 👜
3. مسح حقوق الصانع من البوت 💧*",
     'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
 'reply_markup'=>json_encode([
             'inline_keyboard'=>[
                     [['text'=>" • رجوع •  ",'callback_data'=>"home"]],
               ]
         ])
 ]);
}
if($data=="SALEH33"){
$all = count($user["channellist"]);
  $order = count($user["channellist"]);
  $SALEHyui = $cunte + $order;
$ordercount = count($user["channellist"]);
for($z = 0;$z <= count($order)-1;$z++){
$result = $result.$order[$z]."\n";
} 
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*• مرحبا بك عزيزي $name 🌴

• في لوحة تحكم الادمن في قسم الاحصائيات 📚
----------------------------

⚙️] مستخدمين البوت : $SALEHyui ✨
👥] مستخدمين نشطين الان : $todayuser ✨
💧️] مستخدمين نشطين اليوم : $order ✨

👜] طلبات انجزناها : $SALEHorders 🌐
🛍] قنوات قيد التمويل : $ordercount 🔰
📦] قائمة اخر الاعضاء الذين شتركوا > ✨*
$a
",
     'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
 'reply_markup'=>json_encode([
             'inline_keyboard'=>[
                     [['text'=>" • رجوع •  ",'callback_data'=>"panel"]],
               ]
         ])
 ]);
}
if($data=="SALEH77"){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"• لا يمكنك تفعيل الشحن التلقائي لانك غير مشترك في الوضع المدفوع يمكنك الاشتراك فيه من هنا ⚙️
[@s_p_p1]
",
 'show_alert'=>true,
]);
} 
if($data=="SALEH78"){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"• انت اصلا غير مشترك في النضام المدفوع 🔰
",
 'show_alert'=>true,
]);
} 
/*تم تطوير الملف بواسطه ناميرو @s_p_p1
- القناه @Bots_5

- اقسم بالله ما اسامح اي حد يغير الحقوق ليوم الدين */
?>
