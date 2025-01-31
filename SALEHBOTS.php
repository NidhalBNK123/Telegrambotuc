<?php
/*تم تطوير الملف بواسطه ناميرو @s_p_p1
- القناه @Bots_5
- اقسم بالله ما اسامح اي حد يغير الحقوق ليوم الدين */
ob_start();
$token = "توكنك";
$user_bot_sudo="TRHIBOT"; #يوزر بوتك دون @
$admin = "6704860429"; #ايدي حسابك
$sudo = $admin;
$folder="مسار الاستضافه "; 
$NameroF ="مسار الاستضافه"; #مسار الاستضافه
define("API_KEY",$token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$SALEHakl = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$SALEHakl";
$SALEHakl = file_get_contents($url);
return json_decode($SALEHakl);
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
}
$id = $update->inline_query->from->id; 
$sudo = array("$admin","$admin","6704860429");
$wathq1 = $admin; 
$user = strtolower($message->from->username);
$Dev = array("$sudo", "$admin","6704860429");
mkdir("sudo");
mkdir("makTM");
$get_ban=file_get_contents('sudo/ban.txt');
$ban =explode("\n",$get_ban);
$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$reply = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 
$watawjson = json_decode(file_get_contents("makNAMER/wataw.json"),true);
if (!file_exists("makNAMER/wataw.json")) {
#	$put = [];
$watawjson["info"]["st_ch_bots"]="معطل";
$watawjson["info"]["user_bot"]="$user_bot_sudo";
file_put_contents("makNAMER/wataw.json", json_encode($watawjson));
}
$st_ch_bots=$watawjson["info"]["st_ch_bots"];
$infosudo = json_decode(file_get_contents("sudo.json"),true);
if (!file_exists("sudo.json")) {
#	$put = [];
$infosudo["info"]["update"]="مفعل";
$infosudo["info"]["propots"]="مجانية";
$infosudo["info"]["fwrmember"]="معطل";
$infosudo["info"]["tnbih"]="مفعل";
$infosudo["info"]["silk"]="مفعل";
$infosudo["info"]["allch"]="مفردة";
$infosudo["info"]["klish_sil"]="كليشة الاشتراك الاجباري";
file_put_contents("sudo.json", json_encode($infosudo));
}
$updatenew=$infosudo["info"]["update"];
$propots=$infosudo["info"]["propots"];
$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$start=$infosudo["info"]["start"];
$klish_sil=$infosudo["info"]["klish_sil"];
$updatechannel=$infosudo["info"]["updatechannel"];
$admins=$infosudo["info"]["admins"];
$info_kl=$infosudo["info"]["info_kl"];
$token_kl=$infosudo["info"]["token_kl"];
if($message and $updatenew=="معطل" and $from_id!= $wathq1){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"عذرا البوت في حاله صيانه

تابع : https://t.me/HJ_I_N
",
'reply_to_message_id'=>$message->message_id,
]);
return false;
}
function getChatstats($chat_id,$token) {
  $url = 'https://api.telegram.org/bot'.$token.'/getChatAdministrators?chat_id='.$chat_id;
  $result = file_get_contents($url);
  $result = json_decode ($result);
  $result = $result->ok;
  return $result;
}
 function getmember($token,$idchannel,$from_id) {
  $join = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=$idchannel&user_id=".$from_id);
if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"Bad Request: user not found"') or strpos($join,'"ok": false') or strpos($join,'"status":"kicked"')) !== false){
$wataw="no";}else{$wataw="yes";}
return $wataw;
}
@mkdir("sudo");
@mkdir("data");
$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$admin=file_get_contents("admin.txt");
$watawjson = json_decode(file_get_contents("makNAMER/wataw.json"),true);
$id_ch_sudo=$watawjson["info"]["id_channel"];
$link_ch_sudo=$watawjson["info"]["link_channel"];
$user_bot_sudo=$watawjson["info"]["user_bot"];
if($message){
$false="";
if($allch!="مفردة"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$keyboard["inline_keyboard"]=[];
foreach($orothe as $co=>$s ){
$namechannel= $s["name"];
$st= $s["st"];
$userchannel=str_replace('@','', $s["user"]);
if($namechannel!=null){
$stuts = getmember($token,$co,$from_id);
if($stuts=="no"){
if($st=="عامة"){
$url="t.me/$userchannel";
$tt=$s["user"];
}else{
$url =$s["user"];
$tt=$s["user"];
}
if($silk=="مفعل"){
	$keyboard["inline_keyboard"][] = [['text'=>$namechannel,'url'=>$url]];
}else{
$txt=$txt."\n".$tt;
}
$false="yes";
}
}
}
$reply_markup=json_encode($keyboard);
if($false=="yes"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"$klish_sil
$txt", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>$reply_markup,
]);
return $false;}
}else{
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
foreach($orothe as $co=>$s ){
$keyboard["inline_keyboard"]=[];
$namechannel= $s["name"];
$st= $s["st"];
$userchannel=str_replace('@','', $s["user"]);
if($namechannel!=null){
$stuts = getmember($token,$co,$from_id);
if($stuts=="no"){
if($st=="عامة"){
$url="t.me/$userchannel";
$tt=$s["user"];
}else{
$url =$s["user"];
$tt=$s["user"];
}
if($silk=="مفعل"){
	$keyboard["inline_keyboard"][] = [['text'=>$namechannel,'url'=>$url]];
}
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"$klish_sil
$tt",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode($keyboard),
]);
return $false;
}
}
}
}
}
if($update and !in_array($from_id,$member)){file_put_contents("sudo/member.txt","$from_id\n",FILE_APPEND);
if($tnbih == "مفعل" ){
bot("sendmessage",[
"chat_id"=>$wathq1,
"text"=>"
*٭ تم دخول شخص  الى البوت الخاص بك* 👾
            *-----------------------*    
_• معلومات العضو الجديد ._

• الاسم :  [$name](tg://user?id=$from_id)
• المعرف : [@$user]
• الايدي : `$from_id`
*            ----------------------- *   
• عدد الاعضاء الكلي : *$cunte*
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]);
}}
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban)-1;
$botfreeid=explode("\n",file_get_contents("infoidbots.txt"));
$countbots = count($botfreeid)-1;
if($countbots<=0){
$countbots="لايوجد بوتات مصنوعة";
}
if($message  and in_array($from_id,$ban)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ لا تستطيع استخدام البوت انت محظور ❌
",
]);return false;}
if($countban<=0){
$countban="لايوجد محظورين";
}
if($text == "/start" and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*
• اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖
*
- يمكنك التحكم في البوت الخاص بك من هنا
~~~~~~~~~~~~~~~~~
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"حاله تشغيل البوت : $updatenew",'callback_data'=>"updatenew"],['text'=>" تنبية دخول الاعضاء : $tnbih",'callback_data'=>"tnbih"]],
[['text'=>"الإشتراك الاجباري للبوتات",'callback_data'=>"jajajauqqu"],['text'=>"الاشتراك الاجباري للبوت",'callback_data'=>"GAYQH"]],
[['text'=>"الاشتركات",'callback_data'=>"akqiwj8a"],['text'=>"قائمه الحظر",'callback_data'=>"SAHAY8"]],
[['text'=>" تعيين حساب المطور ",'callback_data'=>"sudo"],['text'=>"تعين رسالة (start) ",'callback_data'=>"start"]],
[['text'=>"التوجية : $fwrmember",'callback_data'=>"fwrmember"],['text'=>"الاحصائيات",'callback_data'=>"MAKO"]],
[['text'=>"معلومات عن البوت ",'callback_data'=>"info_kl"],['text'=>"ارسال التوكن",'callback_data'=>"token_kl"]],
[['text'=>"قسم الاذاعة ",'callback_data'=>"sendmessage"],['text'=>"قسم الادمنية ",'callback_data'=>"admins"]],
[['text'=>"الاشتركات المدفوعه",'callback_data'=>"astrak"]],
]
])
]);
}
if($data=="astrak"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id)

*اختار ما تريد الان الازار اسفل*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اضافه اشتراك",'callback_data'=>"astrakadd"],['text'=>"مسح اشتراك",'callback_data'=>"channelbots2"]],
[['text'=>"رجوع ",'callback_data'=>"home"]],
] 
])
]);
}
if($data == "astrakadd"){
$infosudo["info"]["SALEH"]="astrakadd";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال أيدي العضو الان",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"home"]],
]
])
]);
}
if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="astrakadd" and in_array($from_id,$sudo)){
file_put_contents("sudo/astrak.txt","$text\n",FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- تمت الاضافه بنجاح
$text",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"home"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$text, 
'text'=>"
*تم اضافه حسابك للنسخه المدفوعه* ✅

المده : لا نهائي 👑
الحدود : غير محدود 🛎
تهديد بالحذف : لا يوجد ☄
موعد الدفع : مدفوع دائم ⏱

ايدي حسابك : $text 🐻
",
'parse_mode'=>"MarkDown",
]);
$infosudo["info"]["SALEH"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
if($data=="jajajauqqu"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id)

*اختار ما تريد الان الازار اسفل*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"حاله الاشتراك  : $st_ch_bots ",'callback_data'=>"st_ch_bots"]],
[['text'=>"اضافه قناة ¹ ",'callback_data'=>"channelbots"]],
[['text'=>"اضافه قناة ² ",'callback_data'=>"channelbots2"]],
[['text'=>"رجوع ",'callback_data'=>"home"]],] 
])
]);
}
if($data=="akqiwj8a"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id)

*اختار ما تريد الان الازار اسفل*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"-  البوتات المصنوعة :$propots",'callback_data'=>"propots"]],
[['text'=>"مسح اشتراك مدفوع",'callback_data'=>"delprobot"],['text'=>"اضافة اشتراك مدفوع",'callback_data'=>"addprobot"]],
[['text'=>"رجوع ",'callback_data'=>"home"]],
]])]);
}
if($data=="SAHAY8"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id)

*اختار ما تريد الان الازار اسفل*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"عدد المحظورين : $countban",'callback_data'=>"SAHAY8"]],
[['text'=>"- حظر عضو ",'callback_data'=>"ban"],['text'=>"- الغاء حظر عضو ",'callback_data'=>"unban"]],
[['text'=>"- مسح قائمة الحظر ",'callback_data'=>"unbanall"]],
[['text'=>"رجوع ",'callback_data'=>"home"]],
]])]);
}

if($data=="GAYQH"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id)

*اختار ما تريد الان الازار اسفل*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"مسح قناة",'callback_data'=>"delchannel"],['text'=>"إضافة قناة",'callback_data'=>"addchannel"]],[['text'=>"- عرض قنوات الاشتراك الاجباري ",'callback_data'=>"viwechannel"]],
[['text'=>"- تعيين رسالة الاشتراك الاجباري ",'callback_data'=>"klish_sil"]],
[['text'=>"- خيارات عرض الاشتراك الاجباري ",'callback_data'=>"null"]],
[['text'=>"- ازرار انلاين :$silk ",'callback_data'=>"silk"],
['text'=>"- الرسالة :$allch ",'callback_data'=>"allch"]],
[['text'=>"رجوع ",'callback_data'=>"home"]],
]])]);
}
if($data=="MAKO"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" هلا بك عزيزي 🖤

• عدد الاعضاء : $cunte
• المحظورين: $countban
• البوتات المصنوعة : $countbots
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ",'callback_data'=>"home"]],
]])]);
}
#ــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــ



function sendwataw($chat_id,$message_id){
$watawjson = json_decode(file_get_contents("makNAMER/wataw.json"),true);
$st_ch_bots=$watawjson["info"]["st_ch_bots"];

$infosudo = json_decode(file_get_contents("sudo.json"),true);

$updatenew=$infosudo["info"]["update"];
$propots=$infosudo["info"]["propots"];
$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban)-1;
if($countban<=0){
$countban="لايوجد محظورين";
}
$botfreeid=explode("\n",file_get_contents("infoidbots.txt"));
$countbots = count($botfreeid)-1;
if($countbots<=0){
$countbots="لايوجد بوتات مصنوعة";
}
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"*
• اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖
*
- يمكنك التحكم في البوت الخاص بك من هنا
~~~~~~~~~~~~~~~~~
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"حاله تشغيل البوت : $updatenew",'callback_data'=>"updatenew"],['text'=>" تنبية دخول الاعضاء : $tnbih",'callback_data'=>"tnbih"]],
[['text'=>"الإشتراك الاجباري للبوتات",'callback_data'=>"jajajauqqu"],['text'=>"الاشتراك الاجباري للبوت",'callback_data'=>"GAYQH"]],
[['text'=>"الاشتركات",'callback_data'=>"akqiwj8a"],['text'=>"قائمه الحظر",'callback_data'=>"SAHAY8"]],
[['text'=>" تعيين حساب المطور ",'callback_data'=>"sudo"],['text'=>"تعين رسالة (start) ",'callback_data'=>"start"]],
[['text'=>"التوجية : $fwrmember",'callback_data'=>"fwrmember"],['text'=>"الاحصائيات",'callback_data'=>"MAKO"]],
[['text'=>"معلومات عن البوت ",'callback_data'=>"info_kl"],['text'=>"ارسال التوكن",'callback_data'=>"token_kl"]],
[['text'=>"قسم الاذاعة ",'callback_data'=>"sendmessage"],['text'=>"قسم الادمنية ",'callback_data'=>"admins"]],
[['text'=>"الاشتركات المدفوعه",'callback_data'=>"astrak"]],
]
])
]);
} 
 ###wataw### 
#اضافة اشتراك مدفوع 
if($data == "addprobot"){
$infosudo["info"]["SALEH"]="addprobot";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"✴ اضافة اشتراك مدفوع : 
قم بارسال معرف البوت المصنوع الذي تود اضافة الاشتراك المدفوع له",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);
}
if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="addprobot" and in_array($from_id,$sudo)){
$us_bo=str_replace('@','',$text);
$idbots=file_get_contents("user/$us_bo.txt");
if($idbots!=null){
$infobot=explode("\n",file_get_contents("makNAMER/$idbots/info.txt"));
$tokenbot=$infobot['0'];
$userbot=$infobot['1'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" 
ℹ معلومات البوت 
•النوع : دعمكم
توكن : `$tokenbot`
يوزر البوت : *@$userbot*
ايدي البوت : `$idbots`


معلومات صاحب البوت 🙎 
الايدي : `$id`
[صاحب البوت ](tg://user?id=$id)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"سنوي  ",'callback_data'=>"probotyes yars_".$idbots],['text'=>"6 اشهر  ",'callback_data'=>"probotyes 6mo_".$idbots],['text'=>"3 اشهر  ",'callback_data'=>"probotyes 3mo_".$idbots],['text'=>"شهر واحد  ",'callback_data'=>"probotyes 1mo_".$idbots]],
[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ لايوجد بوت مصنوع بنفس هذا المعرف $text",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- معاودة المحاولة  ",'callback_data'=>"addprobot"]],
]
])
]);
}
$infosudo["info"]["SALEH"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
if(preg_match('/^(probotyes) (.*)/s', $data)){
$nn = str_replace('probotyes ',"",$data);
$ex=explode('_',$nn);
$ash=$ex[0];
$idbots=$ex[1];
if($idbots!=null){
$mo=86400*30;
$time=time()+(3600 * 1);
if($ash=="yars"){$ti=$time+($mo * 12);}
if($ash=="6mo_"){$ti=$time+($mo * 6);}
if($ash=="3mo_"){$ti=$time+($mo * 3);}
if($ash=="1mo_"){$ti=$time+($mo * 1);}
$projsonmem["info"]["pro"]="yes";
$projsonmem["info"]["dateon"]="$time";
$projsonmem["info"]["dateoff"]="$ti";
file_put_contents("makNAMER/$idbots/pro.json", json_encode($projsonmem));
$projson = json_decode(file_get_contents("prodate.json"),true);
$projson["info"][$idbots]["pro"]="yes";
$projson["info"][$idbots]["dateon"]="$time";
$projson["info"][$idbots]["dateoff"]="$ti";
file_put_contents("prodate.json", json_encode($projson));
$infobot=explode("\n",file_get_contents("makNAMER/$idbots/info.txt"));
$tokenbot=$infobot['0'];
$userbot=$infobot['1'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];
$dayon = date('Y/m/d',$time);
$timeon =date('H:i:s A',$time);
$dayoff = date('Y/m/d',$ti);
$timeoff =date('H:i:s A',$ti);
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"✅ تم اضافة الاشتراك المدفوع بنجاح 

 معلومات البوت 

•النوع : دعمكم
يوزر البوت : @$userbot
ايدي البوت : $idbots

معلومات الاشتراك 

- وقت الاشتراك : 
⏰ $timeon
",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- العودة  ",'callback_data'=>"home"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$id, 
'text'=>"✅ تم اضافة الاشتراك لبوتك المصنوع بنجاح

 معلومات البوت 
•النوع : دعمكم
يوزر البوت : @$userbot
ايدي البوت : $idbots

معلومات الاشتراك 

- وقت الاشتراك : 
⏰ $timeon
📅 $dayon
",
'disable_web_page_preview'=>true,
]);
}}
#حذف اشتراك مدفوع 
if($data == "delprobot"){
$infosudo["info"]["SALEH"]="delprobot";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"ℹ حذف اشتراك مدفوع : 
قم بارسال معرف البوت المصنوع الذي تود حذف❌ الاشتراك المدفوع له",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);
}
if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="delprobot" and in_array($from_id,$sudo)){
$us_bo=str_replace('@','',$text);
$idbots=file_get_contents("user/$us_bo.txt");
if($idbots!=null){
$projson = json_decode(file_get_contents("prodate.json"),true);
if($projson["info"][$idbots]["pro"]=="yes"){
$infobot=explode("\n",file_get_contents("makNAMER/$idbots/info.txt"));
$tokenbot=$infobot['0'];
$userbot=$infobot['1'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];
$time=$projson["info"][$idbots]["dateon"];
$ti=$projson["info"][$idbots]["dateoff"];
$dayon = date('Y/m/d',$time);
$timeon =date('H:i:s A',$time);
$dayoff = date('Y/m/d',$ti);
$timeoff =date('H:i:s A',$ti);
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" 
ℹ معلومات البوت 
•النوع : $no3mak
يوزر البوت : @$userbot
ايدي البوت : $idbots",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"حذف   ",'callback_data'=>"delprobotyes ".$idbots],['text'=>"تراجع   ",'callback_data'=>"home"]],
]
])
]);
$projson = json_decode(file_get_contents("prodate.json"),true);
$projson["info"][$idbots]["pro"]="no";
file_put_contents("prodate.json", json_encode($projson));
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ هذا البوت لا يمتلك اشتراك مدفوع  $text",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- معاودة المحاولة  ",'callback_data'=>"delprobot"]],
]
])
]);
}
}else{

bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ لايوجد بوت مصنوع بنفس هذا المعرف $text",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- معاودة المحاولة  ",'callback_data'=>"delprobot"]],
]
])
]);

}
$infosudo["info"]["SALEH"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}


if(preg_match('/^(delprobotyes) (.*)/s', $data)){
$idbots = str_replace('delprobotyes ',"",$data);
if($idbots!=null){

$projsonmem["info"]["pro"]="no";
file_put_contents("makNAMER/$idbots/pro.json", json_encode($projsonmem));

$projson = json_decode(file_get_contents("prodate.json"),true);
$projson["info"][$idbots]["pro"]="no";
file_put_contents("prodate.json", json_encode($projson));





$infobot=explode("\n",file_get_contents("makNAMER/$idbots/info.txt"));

$tokenbot=$infobot['0'];
$userbot=$infobot['1'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"🚫 تم حذف الاشتراك المدفوع بنجاح 

ℹ معلومات البوت 
•النوع : $no3mak
يوزر البوت : @$userbot
ايدي البوت : $idbots

",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- العودة  ",'callback_data'=>"home"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$id, 
'text'=>"❌ تم حذف الاشتراك المدفوع لبوتك المصنوع 

ℹ معلومات البوت 
•النوع : $no3mak
يوزر البوت : @$userbot
ايدي البوت : $idbots
",
'disable_web_page_preview'=>true,
]);
}}

#حظر 
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
if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="ban" and in_array($from_id,$sudo) and is_numeric($text)){
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





//~~~~~~~~~~~//
if($data == "updatenew"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$join=$infosudo["info"]["update"];
if($join=="مفعل"){
$infosudo["info"]["update"]="معطل";
}
if($join=="معطل"){
$infosudo["info"]["update"]="مفعل";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
if($data == "st_ch_bots"){
$watawjson = json_decode(file_get_contents("makNAMER/wataw.json"),true);
$join=$watawjson["info"]["st_ch_bots"];
if($join=="مفعل"){
$watawjson["info"]["st_ch_bots"]="معطل";
}
if($join=="معطل"){
$watawjson["info"]["st_ch_bots"]="مفعل";
}
file_put_contents("makNAMER/wataw.json", json_encode($watawjson));
sendwataw($chat_id,$message_id);
}

if($data == "propots"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$join=$infosudo["info"]["propots"];
if($join=="مجانية"){
$infosudo["info"]["propots"]="مدفوعة";
}
if($join=="مدفوعة"){
$infosudo["info"]["propots"]="مجانية";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
if($data == "channelbots"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$infosudo["info"]["SALEH"]="channelbots";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- حسننا عزيزي المدير قم بإعادة توجية منشور من القناة التي تريد جعلها قناة الاشتراك الاجباري في كل البوتات المصنوعة
",

'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);
}
if($message->forward_from_chat and $infosudo["info"]["SALEH"]=="channelbots" and in_array($from_id, $sudo)){
$id_channel= $message->forward_from_chat->id;
if($id_channel != null){
  $checkadmin = getChatstats($id_channel,$token);
  if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$id_channel"))->result->title;
$watawjson["info"]["id_channel"]="$id_channel";
$watawjson["info"]["name_channel"]="$namechannel";

file_put_contents("makNAMER/wataw.json", json_encode($watawjson));
$infosudo["info"]["SALEH"]="channel_idlink";
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅ تم إضافة القناة بنجاح عزيزي الادمن 
info channel 
user : • قناة خاصة • 
name : $namechannel
id : $id_channel

*يجب عليك ارسال رابط القناة الخاص قم بارسالة الان
 ",
 'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- الغاء ",'callback_data'=>"home"]],
 ]])
 ]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ البوت ليس ادمن في القناة 
- قم برفع البوت اولا لكي تتمكن من إضافتها 
 ",
'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- إعادة المحاولة   ",'callback_data'=>"channelbots"]],
 ]])
]);
$infosudo["info"]["SALEH"]="null";

}
}
file_put_contents("sudo.json", json_encode($infosudo));
}

if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="channel_idlink" and in_array($from_id,$sudo) and !$message->forward_from_chat ){
$tex=str_replace(['https://t.me/','http://t.me/'],'',$text);
$watawjson["info"]["st_ch_bots"]="مفعل";
$watawjson["info"]["link_channel"]="$tex";
file_put_contents("makNAMER/wataw.json", json_encode($watawjson));

bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅ تم إضافة القناة بنجاح عزيزي الادمن 
info channel 
link : $text 
t : $tex
 ",
 'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- تتغيير القناة   ",'callback_data'=>"chaneelbots"]],
 ]])
]);


$infosudo["info"]["SALEH"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}

if($data == "channelbots2"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$infosudo["info"]["SALEH"]="channelbots2";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- حسننا عزيزي المدير قم بإعادة توجية منشور من القناة  2 التي تريد جعلها قناة الاشتراك الاجباري في كل البوتات المصنوعة
",

'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);
}
if($message->forward_from_chat and $infosudo["info"]["SALEH"]=="channelbots2" and in_array($from_id, $sudo)){
$id_channel= $message->forward_from_chat->id;
if($id_channel != null){

  $checkadmin = getChatstats($id_channel,$token);
  if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$id_channel"))->result->title;
$watawjson["info"]["id_channel2"]="$id_channel";
$watawjson["info"]["name_channel2"]="$namechannel";

file_put_contents("makNAMER/wataw.json", json_encode($watawjson));
$infosudo["info"]["SALEH"]="channel_idlink2";
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅ تم إضافة القناة بنجاح عزيزي الادمن 
info channel 
user : • قناة خاصة • 
name : $namechannel
id : $id_channel

*يجب عليك ارسال رابط القناة الخاص قم بارسالة الان
 ",
 'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- الغاء ",'callback_data'=>"home"]],
 ]])
 ]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ البوت ليس ادمن في القناة 
- قم برفع البوت اولا لكي تتمكن من إضافتها 
 ",
'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- إعادة المحاولة   ",'callback_data'=>"channelbots"]],
 ]])
]);
$infosudo["info"]["SALEH"]="null";

}
}
file_put_contents("sudo.json", json_encode($infosudo));
}

if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="channel_idlink2" and in_array($from_id,$sudo) and !$message->forward_from_chat ){
$tex=str_replace(['https://t.me/','http://t.me/']);
$watawjson["info"]["st_ch_bots"]="مفعل";
$watawjson["info"]["link_channel2"]="$tex";
file_put_contents("makNAMER/wataw.json", json_encode($watawjson));

bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅ تم إضافة القناة بنجاح عزيزي الادمن 
info channel 
link : $text 
t : $tex
 ",
 'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- تتغيير القناة   ",'callback_data'=>"chaneelbots2"]],
 ]])
]);


$infosudo["info"]["SALEH"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}

if($data == "updatechannel"){
$infosudo["info"]["SALEH"]="updatechannel";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال الرابط الخاص لقناة التحديثات 
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
if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="updatechannel" and in_array($from_id,$sudo)){

$tex=str_replace(['https://t.me/','http://t.me/'],'',$text);

bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حفظ الرابط الخاص لقناة التحديثات 
-الرابط : 
$text 
$t",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- عودة  ",'callback_data'=>"home"]],
]
])
]);
$infosudo["info"]["SALEH"]="null";
$infosudo["info"]["updatechannel"]="$tex";
file_put_contents("sudo.json", json_encode($infosudo));
}



if($data == "start"){
$infosudo["info"]["SALEH"]="start";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال نص رسالة /start
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
if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="start" and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حفظ كليشة /start 
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
$infosudo["info"]["start"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
}
if($data == "info_kl"){
$infosudo["info"]["SALEH"]="info_kl";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال نص كليشة معلومات عن البوت
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
if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="info_kl" and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حفظ كليشة معلومات عن البوت 
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
$infosudo["info"]["info_kl"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
}
if($data == "token_kl"){
$infosudo["info"]["SALEH"]="token_kl";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال نص كليشة إرسال التوكن",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);

}
if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="token_kl" and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حفظ كليشة إرسال التوكن
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
$infosudo["info"]["token_kl"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
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
if($data == "sudo"){
$infosudo["info"]["SALEH"]="sudo";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال  ايدي حساب المطور ",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);

}
if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="sudo" and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حفظ حساب المطور
-الحساب : 
$text ",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- عودة  ",'callback_data'=>"home"]],
]
])
]);
$infosudo["info"]["SALEH"]="null";
$infosudo["info"]["sudo"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));


}
if($data == "home"){
$infosudo["info"]["SALEH"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
if($data == "fwrmember"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$fwrmember=$infosudo["info"]["fwrmember"];
if($fwrmember=="مفعل"){
$infosudo["info"]["fwrmember"]="معطل";
}
if($fwrmember=="معطل"){
$infosudo["info"]["fwrmember"]="مفعل";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
if($data == "tnbih"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$tnbih=$infosudo["info"]["tnbih"];
if($tnbih=="مفعل"){
$infosudo["info"]["tnbih"]="معطل";
}
if($tnbih=="معطل"){
$infosudo["info"]["tnbih"]="مفعل";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}

if($data == "silk"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$skil=$infosudo["info"]["silk"];
if($skil=="مفعل"){
$infosudo["info"]["silk"]="معطل";
}
if($skil=="معطل"){
$infosudo["info"]["silk"]="مفعل";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}

if($data == "allch"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$allch=$infosudo["info"]["allch"];
if($allch=="مفردة"){
$infosudo["info"]["allch"]="مجموعة";
}
if($allch=="مجموعة"){
$infosudo["info"]["allch"]="مفردة";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}


if($data == "addchannel"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$count=count($orothe);
if($count<4){
$infosudo["info"]["SALEH"]="addchannel";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- اذا كانت القناة التي تريد اضافتها عامة قم بارسال معرفها .
* اذا كانت خاصة قم بإعادة توجية منشور من القناة إلى هنا .
",

'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);
}else{
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- 🚫 لا يمكنك اضافة اكثر من  3 قنوات للإشتراك الاجباري 
",

'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- عودة  ",'callback_data'=>"home"]],
]
])
]);
}
}
if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="addchannel" and in_array($from_id,$sudo) and !$message->forward_from_chat ){

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
 [['text'=>"- عودة   ",'callback_data'=>"home"]],
 ]])
]);
}
$infosudo["info"]["SALEH"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
if($message->forward_from_chat and $infosudo["info"]["SALEH"]=="addchannel" and in_array($from_id, $sudo)){
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

*يجب عليك ارسال رابط القناة الخاص قم بارسالة الان
 ",
 'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- الغاء ",'callback_data'=>"addchannel"]],
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
$infosudo["info"]["SALEH"]="channel_id";
file_put_contents("sudo.json", json_encode($infosudo));
}
$channel_id=$infosudo["info"]["channel_id"];

if($text  and $text !="/start" and $infosudo["info"]["SALEH"]=="channel_id" and in_array($from_id,$sudo) and !$message->forward_from_chat ){

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

$infosudo["info"]["SALEH"]="null";
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
	$keyboard["inline_keyboard"][] = [['text'=>"- عودة  ",'callback_data'=>"home"]];
$reply_markup=json_encode($keyboard);
	
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- هذة هي قنوات الاشتراك الاجباري الخاصة بك 
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
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
	$keyboard["inline_keyboard"][] = [['text'=>"- عودة  ",'callback_data'=>"home"]];
$reply_markup=json_encode($keyboard);
	
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بالضغط على خيار الحذف بالاسفل 
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
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
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- عودة  ",'callback_data'=>"delchannel"]],
 ]])
]);
unset($infosudo["info"]["channel"][$nn]);
file_put_contents("sudo.json", json_encode($infosudo));
}

if($message and $fwrmember=="مفعل"){
bot('ForwardMessage',[
 'chat_id'=>$admin,
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
]);
}



#قسم الاذاعة 
$sudo = array("$admin","$admin","6704860429");
$SALEH = file_get_contents("sudo/SALEH.txt");
$no3send =file_get_contents("no3send.txt");
$chatsend=file_get_contents("chatsend.txt");
if($data == "sendmessage" and  in_array($from_id,$sudo)){

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🙋🏻‍♂ ¦› أهلا بك عزيزي في قسم الاذاعة
",'message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"نوع الاذاعة : $no3send",'callback_data'=>"button"]],
[['text'=>"توجية",'callback_data'=>"forward"],
['text'=>"MARKDOWN",'callback_data'=>"MARKDOWN"],['text'=>"HTML",'callback_data'=>"HTML"]],
[['text'=>"الارسال الى  : $chatsend",'callback_data'=>"button"]],
[['text'=>"الاعضاء",'callback_data'=>"member"]],
[['text'=>"كل البوتات",'callback_data'=>"botsall"]],
[['text'=>"ارسال الرسالة",'callback_data'=>"post"]],
[['text'=>" - العودة ",'callback_data'=>"home"]],


]
])
]);
}
function sendwataw2($chat_id,$message_id){
$no3send =file_get_contents("no3send.txt");
$chatsend=file_get_contents("chatsend.txt");

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🙋🏻‍♂ ¦› أهلا بك عزيزي في قسم الاذاعة
"
,'message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"نوع الاذاعة : $no3send",'callback_data'=>"button"]],
[['text'=>"توجية",'callback_data'=>"forward"],
['text'=>"MARKDOWN",'callback_data'=>"MARKDOWN"],['text'=>"HTML",'callback_data'=>"HTML"]],
[['text'=>"الارسال الى  : $chatsend",'callback_data'=>"button"]],
[['text'=>"الاعضاء",'callback_data'=>"member"]],
[['text'=>"كل البوتات",'callback_data'=>"botsall"]],
[['text'=>"ارسال الرسالة",'callback_data'=>"post"]],
[['text'=>" - العودة ",'callback_data'=>"home"]],
]
])
]);
} 
 ###wataw### 


//~~~~~~~~~~~//
if($data == "forward"){
file_put_contents("no3send.txt","forward");
sendwataw2($chat_id,$message_id);

}


if($data == "MARKDOWN"){
file_put_contents("no3send.txt","MARKDOWN");
sendwataw2($chat_id,$message_id);

}
if($data == "HTML"){
file_put_contents("no3send.txt","html");
sendwataw2($chat_id,$message_id);

}

//~~~~~~~~~~~//


if($data == "member"){
file_put_contents("chatsend.txt","member");
sendwataw2($chat_id,$message_id);


}
if($data == "botsall"){
file_put_contents("chatsend.txt","botsall");
sendwataw2($chat_id,$message_id);

}





$no3send =file_get_contents("no3send.txt");
$chatsend=file_get_contents("chatsend.txt");
if($data == "post" and $no3send!=null and $chatsend!=null and  in_array($from_id,$sudo) ){

file_put_contents("sudo/SALEH.txt","sendsend");
bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"قم بارسال رسالتك الان  
نوع الارسال : $no3send
مكان الارسال : $chatsend
",
'message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"set"]],

]
])
]);
}
if($data == "set" and  in_array($from_id,$sudo) ){
unlink("sudo/SALEH.txt");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'text'=>"تم إلغاء الارسال بنجاح 
",
'message_id'=>$message_id,
]);
} 
 ###wataw### 

$forward = $update->message->forward_from;
$photo=$message->photo;
$video=$message->video;
$document=$message->document;
$sticker=$message->sticker;
$voice=$message->voice;
$audio=$message->audio;
$member =file_get_contents("sudo/member.txt");
if($photo){
$sens="sendphoto";
$file_id = $update->message->photo[1]->file_id;
}
if($document){
$sens="senddocument";
$file_id = $update->message->document->file_id;
}
if($video){
$sens="sendvideo";
$file_id = $update->message->video->file_id;
}
if($audio){
$sens="sendaudio";
$file_id = $update->message->audio->file_id;
}
if($voice){
$sens="sendvoice";
$file_id = $update->message->voice->file_id;
}
if($sticker){
$sens="sendsticker";
$file_id = $update->message->sticker->file_id;
}
 ###wataw### 
##تنفيذ الاذاعة 
if($message  and $text !="الاذاعة" and $SALEH == "sendsend" and $no3send=="forward" and  in_array($from_id,$sudo) ){
unlink("sudo/SALEH.txt");
if($chatsend=="member"){
$for=$member;
$txt="  تم التوجية - خاص - للاعضاء فقط";
$foor=explode("\n",$for);
bot('ForwardMessage',[
 'chat_id'=>$chat_id,
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
]);
for($i=0;$i<count($foor); $i++){
bot('ForwardMessage',[
 'chat_id'=>$foor[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✅ $txt
",
'message_id'=>$message_id,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'عودة ' ,'callback_data'=>"home"]],
]])
]);
}
if($chatsend=="botsall"){
$bots=explode("\n",file_get_contents("infoidbots.txt"));
$coo=count($bots)-1;
for ($i=0; $i < count($bots); $i++) { 
$idbots=$bots[$i];
include("wataw/$idbots.php");
$tokenboot="$tokenbot";
$mm=explode("\n",file_get_contents("makNAMER/$idbots/sudo/member.txt"));
for ($l=0; $l < count($mm); $l++) {
$id=$mm[$l];
file_get_contents("https://api.telegram.org/bot".$tokenboot."/ForwardMessage?chat_id=".$id."&from_chat_id=$chat_id&message_id=".$message->message_id);
}
$co=$co+$l-1;
}
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"- تمت الاذاعة في جميع البوتات المصنوعة 
- تم الارسال الى $co مستخدم.
- عدد البوتات : $coo
",
'reply_to_message_id'=>$message_id,
]);
}
unlink("no3send.txt");
unlink("chatsend.txt");
}
if($message and $text !="الاذاعة"  and $SALEH == "sendsend"and $no3send !="forward" and  in_array($from_id,$sudo) ){
unlink("sudo/SALEH.txt");
if($chatsend=="member"){
$for=$member;
$txt=" تم النشر - خاص - للاعضاء فقط";
$foor=explode("\n",$for);
if($text){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"$text",
'parse_mode'=>"$no3send",
'disable_web_page_preview'=>true,
]);
for($i=0;$i<count($foor); $i++){
bot('sendMessage', [
'chat_id'=>$foor[$i],
'text'=>"$text",
'parse_mode'=>"$no3send",
'disable_web_page_preview'=>true,
]);
}
}else{
$ss=str_replace("send","",$sens);
bot($sens,[
"chat_id"=>$chat_id,
"$ss"=>"$file_id",
'caption'=>"$caption",
]);
for($i=0;$i<count($foor); $i++){ 
$ss=str_replace("send","",$sens);
bot($sens,[
"chat_id"=>$foor[$i],
"$ss"=>"$file_id",
'caption'=>"$caption",
]);
}
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✅ $txt"
,'message_id'=>$message_id,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>' عودة ' ,'callback_data'=>"home"]],
]])
]);
unlink("no3send.txt");
unlink("chatsend.txt");
}
if($chatsend=="botsall"){
$bots=explode("\n",file_get_contents("infoidbots.txt"));
$coo=count($bots)-1;
$bots1=explode("\n",file_get_contents("makNAMER/$idbots/SALEHakltopkts/groups.txt"));
$coouy=count($bots1)-1;
$linesCount = count(file("makNAMER/$idbots/SALEHakltopkts/groups.txt"));
$linesCounl = count(file("makNAMER/5735997448/SALEHakltopkts/pirvate.txt"));
for ($i=0; $i < 1000; $i++) { 
$idbots=$bots[$i];
include("wataw/$idbots.php");
$tokenboot="$tokenbot";
$mm=explode("\n",file_get_contents("makNAMER/$idbots/SALEHakltopkts/allk.txt"));
for ($l=0; $l < count($mm); $l++) {
$id=$mm[$l];
if($text){
file_get_contents("https://api.telegram.org/bot".$tokenboot."/sendMessage?chat_id=".$id."&text=$text&parse_mode=".$no3send);
}else{
$ss=str_replace("send","",$sens);
file_get_contents("https://api.telegram.org/bot".$tokenboot."/$sens?chat_id=".$id."&$ss=$file_id&caption=".$caption);
}
}
$co=$co+$l-1;
}
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"*- تمت الاذاعة في جميع البوتات المصنوعة 

- تم الارسال الى $linesCounl عضو
$lolj
- تم الارسال الى $linesCount مجموعه
$linesCounll
- عدد البوتات : $coo*
",
'parse_mode'=>markdown,
'reply_to_message_id'=>$message_id,
]);
}
}
 ###wataw### 
if($data == "admins" and $from_id ==$admin ){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["admins"];


$keyboard["inline_keyboard"]=[];

foreach($orothe as $co=>$sss ){


if($co!=null and $co!=$admin ){

}}
$keyboard["inline_keyboard"][] = [['text'=>"- اضافة ادمن  ",'callback_data'=>"addadmin"]];
$keyboard["inline_keyboard"][] =[['text'=>' 🗑','callback_data'=>'deleteadmin '.$co.'#'.$sss],['text'=>$sss,'callback_data'=>'null']];
$keyboard["inline_keyboard"][] = [['text'=>"- عودة  ",'callback_data'=>"home"]];
$reply_markup=json_encode($keyboard);
	
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- تستطيع فقط رفع 5 ادمنية 
*تنوية : الادمنية يستطيعون التحكم بإعدادات البوت ماعدا قسم الادمنية .
",

'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>$reply_markup
]);

}

if($data == "addadmin" and $from_id ==$admin ){
$infosudo["info"]["amr"]="addadmin";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال ايدي الادمن 
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
if($text  and $text !="/start" and $infosudo["info"]["amr"]=="addadmin" and $from_id ==$admin and is_numeric($text)){
if(!in_array($text,$admins)){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$count=count($orothe);
if($count<6){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حفظ  رفع الادمن بنجاح",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- عودة  ",'callback_data'=>"admins"]],
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

[['text'=>"- عودة  ",'callback_data'=>"admins"]],
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

[['text'=>"- عودة  ",'callback_data'=>"admins"]],
]
])
]);
}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));

}

if(preg_match('/^(deleteadmin) (.*)/s', $data) ){
$nn = str_replace('deleteadmin ',"",$data);
$ex=explode('#',$nn);
$id=$ex[1];
$n=$ex[0];

bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حذف الادمن بنجاح 
-id $id
",
#'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- عودة  ",'callback_data'=>"admins"]],
 ]])
]);
unset($infosudo["info"]["admins"][$n]);
file_put_contents("sudo.json", json_encode($infosudo));
}
$botfree=explode("\n",file_get_contents("from_id/$from_id/countuserbot.txt"));
$countbot=count($botfree)-1;
$infobots=file_get_contents("from_id/$from_id/countuserbot.txt");
if($infobots!=null ){
$infobotsmember="بوتاتك المصنوعة ($countbot) هي : \n$infobots";
}else{
$infobotsmember="لم تقم بصنع اي بوت مسبقاً";
}
if($start==null){
$start="لم يتم تعيين كليشة /start من قبل المدير ";
}
if($info_kl==null){
$info_kl="*1. من هو مطور الصانع* : تم تطوير بوت الصانع بواسطة [SALEH](https://t.me/HJ_I_N) يمكنك متابعة آخر أخباره [عبر قناته](https://t.me/s_p_p1️) ❤
*2. ما هي البوتات* : [يمكنك قراءة المزيد هنا](https://telegram.org/faq/ar#h)

3. ما هو التوكن وكيف أحصل عليه : يمكنك معرفة المزيد من خلال [مشاهدة هذا الفيديو](https://t.me/HJ_I_N)

4. هل يمكنني نقل البوت : نعم تسطيع ذلك من خلال الذهاب إلى* البوتات المصنوعة *من ثم اختر البوت الخاص بك  عن طريق ضغط *معلومات أكثر* من ثم اضغط *نقل البوت* واتبع التعليمات

5. *كيف يمكنني التحكم في البوت الخاص بي* : فقط اذهب إلى البوت الخاص بك وأرسل /start ستظهر لك لوحة الادمن يمكنك التحكم في البوت من خلالها

6*. هل حدث خطأ في بوت لديك أو لديك فكره تريد إضافتها* : لا تترد برسالة إلى المطور  ";
}
if($token_kl==null){
$token_kl="
• أرسل التوكن الخاص بك الآن لصنع بوت  بوت ناميرو فلور  خاص بك

(http://t.me/botfather)

- إذا كنت لا تعلم كيف يمكنك الحصول على توكن اضغط على زر شرح صنع توكن خاص بك
";
}
$SALEHmem=file_get_contents("from_id/$from_id/SALEH.txt");
if($text=="/start"){
mkdir("from_id");
mkdir("from_id/$from_id");
file_put_contents("from_id/$from_id/SALEH.txt","");
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"*• مرحبا بك عزيزي $name 🌴
• في صانع بوتات Namero Flor 👜
• يمكنك صنع بوت ناميرو فلور متطور ⚙️*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تعليمات المصنع 🔰' ,'callback_data'=>"infobot"]],
[['text'=>'صنع بوت 👜' ,'callback_data'=>"mak 50"],['text'=>'بوتاتك المصنوعه ⚙️' ,'callback_data'=>"botsmember"]],
[['text'=>'ارسال ملف الي الصانع 📂' ,'callback_data'=>"uplode"]],
[['text'=>'تحديثات البوت 🌴' ,'url'=>"https://t.me/HJ_I_N"]],
] 
])
]);
}
if($data=="freebot"){
file_put_contents("from_id/$from_id/SALEH.txt","");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"*• مرحبا بك عزيزي $name 🌴
• في صانع بوتات Namero Flor 👜
• يمكنك صنع بوت ناميرو فلور متطور ⚙️*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تعليمات المصنع 🔰' ,'callback_data'=>"infobot"]],
[['text'=>'صنع بوت 👜' ,'callback_data'=>"mak 50"],['text'=>'بوتاتك المصنوعه ⚙️' ,'callback_data'=>"botsmember"]],
[['text'=>'ارسال ملف الي الصانع 📂' ,'callback_data'=>"uplode"]],
[['text'=>'تحديثات البوت 🌴' ,'url'=>"https://t.me/HJ_I_N"]],
] 
])
]);
}
if($data=="infobot"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>$info_kl,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"freebot"]],
] 
])
]);
}
if($data=="sn3botfre"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"*• مرحبا بك عزيزي $name 🌴
• في صانع بوتات Namero Flor 👜
• يمكنك صنع بوت ناميرو فلور متطور ⚙️*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تعليمات المصنع 🔰' ,'callback_data'=>"infobot"]],
[['text'=>'صنع بوت 👜' ,'callback_data'=>"mak 50"],['text'=>'بوتاتك المصنوعه ⚙️' ,'callback_data'=>"botsmember"]],
[['text'=>'ارسال ملف الي الصانع 📂' ,'callback_data'=>"uplode"]],
[['text'=>'تحديثات البوت 🌴' ,'url'=>"https://t.me/HJ_I_N"]],
] 
])
]);
}
if(file_exists("makTM/mak2SALEH $chat_id.txt")) {
$addbot57 = "يعمل ☑️";
}else{$addbot57 = "لا يعمل ⭕️";}
$astraki=file_get_contents('sudo/astrak.txt');
$astrak = explode("\n",$astraki);
if(!in_array($chat_id,$astrak)){
$astrakio = "عادي ⭕️";
}else{$astrakio = "مدفوع ✅";}
if($data=="SALEHkk5k"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"
*هلا بك عزيزي معلوماتك *

*الاسم :* [$name]
*الايدي :* $chat_id

*حاله بوتك * : $addbot57 
*حاله حسابك *: فعال 👤
*نظام حسابك* : $astrakio
*لغه العرض *: العربية 🖲
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"sn3botfre"]],
] 
])
]);
}
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$message_id = $up->message->message_id;
$data = $up->data;
}
$botfree=explode("\n",file_get_contents("from_id/$from_id/countbot.txt"));
$countbot=count($botfree);
if(preg_match('/^(mak) (.*)/s', $data)){
$nu = str_replace('mak ',"",$data);
if($nu==50){$b="دعمكم";
}
if(file_exists("makTM/mak2SALEH $chat_id.txt")){
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"• عذراً ايها المطور لا يمكنك صنع اكثر من بوت 🤖
• يمكنك صنع بوت 1 فقط اذا اردت صنع بوت جديد فقط احذف بوتك القديم 👜
",
 'show_alert'=>true,
]); 
}else {
$j = file_get_contents('sudo/astrak.txt');
$arr = explode("\n", $j);
$botfree=explode("\n",file_get_contents("from_id/$from_id/countbot.txt"));
$countbot=count($botfree);
$nu = str_replace('mak ',"",$data);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"$token_kl ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'شرح صنع توكن خاص بك' ,'callback_data'=>"U_Shar7|". explode("MAKER",$data_[1])[1] ]],
[['text'=>'تراجع  ' ,'callback_data'=>"freebot"]],
] 
])
]);
file_put_contents("from_id/$chat_id/makNAMER.txt","mak$nu");
file_put_contents("from_id/$chat_id/no3mak.txt","$b");
file_put_contents("from_id/$chat_id/SALEH.txt","sn3free");
return false;}}
if(preg_match($text,"#decode#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
bot('sendmessage',[
"chat_id"=>$admin,
'message_id'=>$admin,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 

",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#decode#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}

if(preg_match($text,"#encode#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#encode#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match($text,"#base64#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#base64#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match($text,"#base64_decode#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#base64_decode#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}

if(preg_match($text,"#;#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#;#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}

if(preg_match($text,"#//#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#//#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match($text,"#'#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#'#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}

if(preg_match($text,'#"#')){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match('#"#',$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}

if(preg_match($text,"#,#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#,#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}

if(preg_match($text,"#)#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#)#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match($text,"#(#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#(#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match($text,"#}#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#}#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match($text,"#{#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#{#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match($text,"#]#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#]#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match($text,"#[#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#[#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#file_get_contents#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match($text,"#file_get_contents#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#github#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#https#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match("#http#",$text)){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match($text,"#github#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match($text,"#https#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
if(preg_match($text,"#http#")){
bot("sendmessage",[
"chat_id"=>$cvchat_id,
'message_id'=>$message_id,
"text"=>"* عذرا لا يمكنك اختراقي ❎*",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]);
bot("sendmessage",[
"chat_id"=>$admin,
'message_id'=>$message_id,
"text"=>"قد حاول احد اختراق البوت 
------------------------
معلومات العضو 
اسم العضو :  [$name](tg://openmessage?user_id=$chat_id)
ايدي العضو :  [$chat_id](tg://openmessage?user_id=$chat_id)
------------------------
* الرساله *

[$text]
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
]); return false;
}
mkdir("wataw");
if($text and $SALEHmem =="sn3free"){
file_put_contents("from_id/$from_id/SALEH.txt","");
$no3mak=file_get_contents("from_id/$from_id/no3mak.txt");
$makNAMER=file_get_contents("from_id/$from_id/makNAMER.txt");
$url = "https://api.telegram.org/bot$text/getWebhookInfo";
$check_token = json_decode(file_get_contents($url));
$check = $check_token;
$yes=$check->ok ;
if($yes == "true"){
$url = "https://api.telegram.org/bot$text/getme";
$getidbots = json_decode(file_get_contents($url) , true);
$idbot = $getidbots['result']['id'];
$userbot = $getidbots['result']['username'];
$name1bot = $getidbots["result"]["first_name"];
$userbot=trim($userbot);
$idbot=trim($idbot);
mkdir("makNAMER");
mkdir("user");
mkdir("makNAMER/$idbot");
//عدم التكرار
$botfree=explode("\n",file_get_contents("botfreeid.txt"));
$botfreeid=explode("\n",file_get_contents("infoidbots.txt"));
$botfrom=explode("\n",file_get_contents("from_id/$from_id/countbot.txt"));
$idbotfrom=explode("\n",file_get_contents("from_id/$from_id/idbot.txt"));
$infobots="$userbot==code#$userbot#$idbot";
# تخزين البوتات للعضو
if(!in_array($userbot,$botfrom )){
file_put_contents("from_id/$from_id/countuserbot.txt","@$userbot\n",FILE_APPEND);
file_put_contents("from_id/$from_id/countbot.txt",$userbot."\n",FILE_APPEND);
}
#bots
if(!in_array($infobots,$idbotfrom )){
file_put_contents("from_id/$from_id/idbot.txt","$infobots\n",FILE_APPEND);
}
if(!in_array($from_id,$botfree )){
file_put_contents("botfreeid.txt",$from_id."\n",FILE_APPEND);
}
if(!in_array($idbot,$botfreeid )){
file_put_contents("infoidbots.txt",$idbot."\n",FILE_APPEND);
}
file_put_contents("makNAMER/$idbot/admin.txt","$from_id");
$mak=file_get_contents("bots/mak.php");
$bot=file_get_contents("bots/$makNAMER.php");
$mak=str_replace("[*[TOKEN]*]","$text",$mak);
$mak=str_replace("[*[TOKENSAN3]*]","$token",$mak);
$bot=str_replace("<?php#*wataw*","$mak",$bot);
file_put_contents("makNAMER/$idbot/$userbot.php","$bot");
file_put_contents("makNAMER/$idbot/Tokenbnnvgot2.php","$text");
if($makNAMER=="mak50" ){
$bot=file_get_contents("bots/mak1.php");
$bot50=file_get_contents("bots/mak50.php");
$bot=str_replace("[*[TOKEN]*]","$text",$bot);
$bot=str_replace("[*[TOKENSAN3]*]","$token",$bot);
file_put_contents("makNAMER/$idbot/$userbot.php","$bot");
file_put_contents("makNAMER/$idbot/mak50.php","$bot50");
file_put_contents("makNAMER/$idbot/admin.txt","$chat_id");
#$wjson=file_get_contents("makNAMER/wataw.json");
#mkdir("makNAMER/$idbot/makNAMER");
#file_put_contents("makNAMER/$idbot/watawsudo.json",$wjson);
}
$folder="$NameroF";
file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/makNAMER/".$idbot."/$userbot.php");
file_put_contents("makNAMER/$idbot/info.txt","-- محمي --\n$userbot\n$name1bot\n$from_id\n$idbot\n$makNAMER\n$no3mak");
$propots=$infosudo["info"]["propots"];
file_put_contents("user/$userbot.txt","$idbot");
file_put_contents("wataw/$idbot.php",'<?php '."\n".'$tokenbot= "'.$text.'";');
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"*• تم إنشاء البوت الخاص بك*

*• معرف البوت* : [@$userbot]

[• مطور الملف 🤖](https://t.me/s_p_p1)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'دخول البوت ','url'=>"https://t.me/$userbot?start"]],
[['text'=>'• رجوع •  ' ,'callback_data'=>"freebot"]],
] ])]);
file_put_contents("makTM/mak2SALEH $chat_id.txt","chat_id");
bot('sendmessage',[
'chat_id'=>$wathq1,
'message_id'=>$message_id,
"text"=>"👮|  تم صنع بوت مجاني بنجاح ✅ 
ℹ معلومات البوت 
النوع : $no3mak
توكن : `$text`
يوزر البوت : `$userbot@`
namebot : `$name1bot`
idbot : `$idbot`
معلومات صاحب البوت 🙎 
الاسم : *$name*
الايدي : `$from_id`
[$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>" دخول الى البوت",'url'=>"https://t.me/$userbot?start"]],
]])]);
}else{


bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id+1,
"text"=>"🚫 هناك خطاء التوكن الذي قمت بارسالة خاطئ قم بالارسال مره اخرى  

",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'معاودة المحاولة مجددا   ' ,'callback_data'=>"sn3botfre"]],
   ] 
   ])
]);
}}
$botfree=explode("\n",file_get_contents("botfreeid.txt"));
$botf=file_get_contents("from_id/$from_id/countuserbot.txt");
if($data=="botsmember"){
if(in_array($from_id, $botfree) and $botf != "" and $botf != " " and $botf!= null){
$idbotfrom=explode("\n",file_get_contents("from_id/$from_id/idbot.txt"));

$keyboard["inline_keyboard"]=[];
      	for ($i=0; $i < count($idbotfrom); $i++) { 
      	$ex = explode("#", $idbotfrom[$i]);
$idbot=$ex['2'];
$userbot="@".$ex['1'];
$in="infobot ".$ex['1'];
$number = strlen($idbot);


$infobot=explode("\n",file_get_contents("makNAMER/$idbot/info.txt"));
$userbott=$infobot['1'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];

if($number > 4){
	$keyboard["inline_keyboard"][$i] = [['text'=>$userbot,'url'=>"t.me/$userbott"],
	['text'=>$no3mak,'url'=>"t.me/$userbott"],['text'=>'معلومات اكثر ','callback_data'=>$in]];
      	}
      }
	$keyboard["inline_keyboard"][] = [['text'=>"",'callback_data'=>"sendpostbotsall"]];
		$keyboard["inline_keyboard"][] = [['text'=>"• رجوع • ",'callback_data'=>"freebot"]];	$reply_markup=json_encode($keyboard);
	unlink("from_id/$from_id/yes.txt");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• مرحبا بك عزيزي $name 🌴
• بوتاتك المصنوعه بلاسفل 👇🏽
",
"message_id"=>$message_id,
'reply_markup'=>$reply_markup
]);
}else{
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"• لادخول هنا اصنع بوت اولا 👜",
 'show_alert'=>true,
]);
}
}
if(preg_match('/^(infobot) (.*)/s', $data)){
$userbot = str_replace('infobot ',"",$data);
$userbot = str_replace(' ',"",$userbot);
$idbots=file_get_contents("user/$userbot.txt");
$infobot=explode("\n",file_get_contents("makNAMER/$idbots/info.txt"));
$userbot=$infobot['1'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];
include("wataw/$idbots.php");
$tokenboot="$tokenbot";
$mml = count(file("makNAMER/$idbots/sudo/member.txt"));
$mm=explode("\n",file_get_contents("makNAMER/$idbots/sudo/member.txt"));
$length = strlen($tokenboot);
$start = floor(($length - 12) / 2); 
$newTokenboot = substr_replace($tokenboot, str_repeat('*', 12), $start, 12);
$co=count($mm)-1;
@$projson = json_decode(file_get_contents("makNAMER/$idbots/pro.json"),true);
$pro=$projson["info"]["pro"];
$dateoff=$projson["info"]["dateoff"];
$time=time()+(3600 * 1);
if($pro === 'no') {
    $addpreim = "مجاني";
} elseif ($pro === 'yes') {
    $addpreim = "مدفوع";
} else {
    $addpreim = "مجاني";
}
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"*• معلومات البوت :*

- اسم البوت : `$namebot`
- معرف البوت : @$userbot
- أيدي البوت : `$idbots`
- توكن البوت  : [$newTokenboot]

• عدد مستخدمين البوت : $mml
• نوع البوت المصنوع : بوت دعمكم
• نوع الاشتراك الحالي : $addpreim
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'حذف البوت' ,'callback_data'=>"deletebot ".$userbot],['text'=>'نقل البوت','callback_data'=>"naglbotmember ".$userbot]],
[['text'=>'• رجوع •  ' ,'callback_data'=>"botsmember"]],
]])]);
}
if($data == "botinfofree"){
$infobot=explode("\n",file_get_contents("info.txt"));
$tokenbot=$infobot['0'];
$userbot=$infobot['1'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];
if($pro=="yes"){
$dayon = date('Y/m/d',$dateon);
$timeon =date('H:i:s A',$dateon);
$dayoff = date('Y/m/d',$dateoff);
$timeoff =date('H:i:s A',$dateon);
$tx="✅ مفعل 

- وقت الاشتراك : 
⏰ $timeon
📅 $dayon
- موعد انتهاء الاشتراك : 
⏰ $timeoff
📅 $dayoff
";

}else{$tx="🚫 لايوجد لديك اشتراك مدفوع";}

bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- ℹ معلومات بوتك 
النوع : $no3mak
توكن : `$tokenbot`
يوزر البوت : *@$userbot*
ايدي البوت : `$idbots`

🔰 حالة الاشتراك المدفوع :$tx
 
- الاحصائية : 

• عدد الاعضاء : $cunte

• المحظورين: $countban
 ",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- العودة  ",'callback_data'=>"home"]],
]
])
]);
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
}
/*تم تطوير الملف بواسطه ناميرو @s_p_p1
- القناه @Bots_5
- اقسم بالله ما اسامح اي حد يغير الحقوق ليوم الدين */
if(preg_match('/^(deletebot) (.*)/s', $data)){
$userbot = str_replace('deletebot ',"",$data);
	$userbot = str_replace(' ',"",$userbot);
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" 
✅ تم حذف البوت بنجاح 
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• العودة • ' ,'callback_data'=>"freebot"]],
   ] 
   ])
]);
$idbots=file_get_contents("user/$userbot.txt");
$infobot=explode("\n",file_get_contents("makNAMER/$idbots/info.txt"));
$botfrom=explode("\n",file_get_contents("from_id/$from_id/countbot.txt"));
if(in_array($userbot,$botfrom ) and $idbots!=null){
$infobot=explode("\n",file_get_contents("makNAMER/$idbots/info.txt"));
$tokenbot=$infobot['0'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];
bot('sendmessage',[
'chat_id'=>$wathq1,
"text"=>"
*تم حذف بوت * 

*معلومات البوت *
توكن : `$tokenbot`
يوزر البوت : [@$userbot]
ايدي البوت : `$idbots`

*معلومات ادمن البوت *
الاسم : [$name](tg://user?id=$from_id)
الايدي : `$from_id`
",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
	[['text'=>'دخول البوت ','url'=>"https://t.me/$userbot?start"]
	],
   ] 
   ])
]);
$botfrom=explode("\n",file_get_contents("from_id/$from_id/countbot.txt"));
$infobot=explode("\n",file_get_contents("makNAMER/$idbots/info.txt"));
$tokenbot=$infobot['0'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];
#حذف البوت 
$us=file_get_contents("from_id/$from_id/countbot.txt");
$us=str_replace("$userbot\n","",$us);
file_put_contents("from_id/$from_id/countbot.txt",$us);
#حذف ازرار
$ussss="$userbot==code#$userbot#$idbots";
$uss=file_get_contents("from_id/$from_id/idbot.txt");
$uss=str_replace("$ussss\n","",$uss);
file_put_contents("from_id/$from_id/idbot.txt",$uss);
unlink("makNAMER/user/$userbot.txt");
unlink("makTM/mak2SALEH $chat_id.txt");
unlink("makNAMER/$idbots/$userbot.php");
$us2="@$userbot";
$us1=file_get_contents("from_id/$from_id/countuserbot.txt");
$us1=str_replace("$us2\n","",$us1);
file_put_contents("from_id/$from_id/countuserbot.txt",$us1);
$us11=file_get_contents("infoidbots.txt");
$us11=str_replace("$idbots\n","",$us11);
file_put_contents("infoidbots.txt",$us11);
if(is_dir("makNAMER/$idbots")){
remove_dir("makNAMER/$idbots");
include("wataw/$idbots.php");
$tokenboot="$tokenbot";
}}
}
if(preg_match('/^(naglbot) (.*)/s', $data)){
$userbot = str_replace('naglbot ',"",$data);
	$userbot = str_replace(' ',"",$userbot);
if($userbot!=null){
file_put_contents("from_id/$from_id/nagl.txt","$userbot");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"👮|  مرحبا بك عزيزي 
- قم باختيار نوع البوت الذي تريد نقل @$userbot الية 
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• العودة • ' ,'callback_data'=>"botsmember"]],
   ] 
   ])
]);
}}
if(preg_match('/^(ngl) (.*)/s', $data)){
$nu = str_replace('ngl ',"",$data);
if($nu==50){$b="دعمكم";
}
$ngluser=file_get_contents("from_id/$from_id/nagl.txt");
unlink("from_id/$from_id/nagl.txt");
$idbots=file_get_contents("user/$ngluser.txt");
include("wataw/$idbots.php");
$tokenboot="$tokenbot";
$url = "https://api.telegram.org/bot".$tokenboot."/getWebhookInfo";
$check_token = json_decode(file_get_contents($url));
$check = $check_token;
$yes=$check->ok ;
if($yes == "true"){
$url = "https://api.telegram.org/bot$tokenboot/getme";
$getidbots = json_decode(file_get_contents($url) , true);
 $idbot = $getidbots['result']['id'];
 $userbot = $getidbots['result']['username'];
$name1bot = $getidbots["result"]["first_name"];
 $userbot=trim($userbot);
 $idbot=trim($idbot);
if(is_dir("makNAMER/$idbot")){
remove_dir("makNAMER/$idbot");
}
mkdir("makNAMER");
mkdir("user");
mkdir("makNAMER/$idbot");
//عدم التكرار
$mak=file_get_contents("bots/mak.php");
$bot=file_get_contents("bots/mak$nu.php");
$mak=str_replace("[*[TOKEN]*]","$tokenboot",$mak);
$mak=str_replace("[*[TOKENSAN3]*]","$token",$mak);
$bot=str_replace("<?php#*wataw*","$mak",$bot);
file_put_contents("makNAMER/$idbot/$userbot.php","$bot");
if($nu=="28" ){
$bot=file_get_contents("bots/mak$nu.php");
$bot=str_replace("[*[TOKEN]*]","$tokenboot",$bot);
$bot=str_replace("[*[TOKENSAN3]*]","$token",$bot);
file_put_contents("makNAMER/$idbot/$userbot.php","$bot");
}
if( $nu=="6" ){
$bot=file_get_contents("bots/mak$nu.php");
$bot=str_replace("[*[TOKENBOT]*]","$tokenboot",$bot);
$bot=str_replace("[*[TOKENSAN3BOT]*]","$token",$bot);
file_put_contents("makNAMER/$idbot/$userbot.php","$bot");
}
file_put_contents("makNAMER/$idbot/admin.txt","$from_id");
file_get_contents("https://api.telegram.org/bot".$tokenboot."/setwebhook?url=".$folder."/makNAMER/".$idbot."/$userbot.php");
file_put_contents("makNAMER/$idbot/info.txt","-- محمي --\n$userbot\n$name1bot\n$from_id\n$idbot\nmak$nu\n$b");
$iin="infobot ".$userbot;
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"تم رفع التغير

معرف البوت :  @$userbot
النوع : $b
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
 [['text'=>"- دخول الى البوت؛🎒",'url'=>"https://t.me/$userbot?start"]
 ],
 [['text'=>'• العودة • ' ,'callback_data'=>"$iin"]],
 
   ] 
   ])
]);
bot('sendmessage',[
'chat_id'=>$wathq1,
'message_id'=>$message_id,
"text"=>"👮|  تم تغيير نوع بوت مجاني بنجاح ✅ 
ℹ معلومات البوت 
النوع : $b
توكن : *$tokenbot*
يوزر البوت : `@$userbot`
namebot : *$name1bot*
idbot : $idbot
معلومات صاحب البوت 🙎 
الاسم : *$name*
الايدي : $from_id
[$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
 [['text'=>"- دخول الى البوت؛🎒",'url'=>"https://t.me/$userbot?start"]
 ],
   ] 
   ])
]);
}else{
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"🚫 هناك خطاء التوكن المخزن في البيانات الخاصة بك قد تم تحديثه قم بإعادة صنع البوت من جديد بالتوكن الجديد",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'معاودة المحاولة مجددا   ' ,'callback_data'=>"botsmember"]],
   ] 
   ])
]);
}
} 
$codejson = json_decode(file_get_contents("code.json"),true);
if (!file_exists("code.json")) {
	$put = [];
file_put_contents("code.json", json_encode($put));
}
if(preg_match('/^(naglbotmember) (.*)/s', $data)){
$userbotfree = str_replace('naglbotmember ',"",$data);
$code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), -35);
$idbots=file_get_contents("user/$userbotfree.txt");
$infobot=explode("\n",file_get_contents("makNAMER/$idbots/info.txt"));
$userbot=$infobot['1'];
$id=$infobot['3'];
$no3mak=$infobot['6'];
$codejson["info"][$code]["st"]="yes";
$codejson["info"][$code]["idbot"]="$idbots";
$codejson["info"][$code]["userbot"]="$userbot";
$codejson["info"][$code]["admin"]="$id";
file_put_contents("code.json", json_encode($codejson));
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"تم صنع كود نقل بوتك بنجاح 

https://t.me/$user_bot_sudo?start=$code

لنقل البوت قوم بارساله الرابط للشخص المراد نقل البوت اللية
عند نقل البوت لشخص اخر ستفقد امكانية التحكم في البوت 
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>' رجوع    ' ,'callback_data'=>"botsmember"]],
   ] 
   ])
]);

}
if(preg_match('/^\/([Ss]tart) (.*)/',$text)){
preg_match('/^\/([Ss]tart) (.*)/',$text,$match);
$code=$match[2];
$codejson = json_decode(file_get_contents("code.json"),true);
$st=$codejson["info"][$code]["st"];
$idbots=$codejson["info"][$code]["idbot"];
$userbots=$codejson["info"][$code]["userbot"];
$admin=$codejson["info"][$code]["admin"];
$idbots=file_get_contents("user/$userbots.txt");
	$botfrom=explode("\n",file_get_contents("from_id/$admin/countbot.txt"));
	if($admin!=$from_id){
if($st=="yes" and $admin!=null){	
if(in_array($userbots,$botfrom ) and $idbots!=null){
$infobot=explode("\n",file_get_contents("makNAMER/$idbots/info.txt"));
$tokenboot=$infobot['0'];
$userbot=$infobot['1'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];
#حذف البوت 
$us=file_get_contents("from_id/$admin/countbot.txt");
$us=str_replace("$userbot\n","",$us);
file_put_contents("from_id/$admin/countbot.txt",$us);
#حذف ازرار
$ussss="$userbot==code#$userbot#$idbots";
$uss=file_get_contents("from_id/$admin/idbot.txt");
$uss=str_replace("$ussss\n","",$uss);
file_put_contents("from_id/$admin/idbot.txt",$uss);
$us2="@$userbot";
$us1=file_get_contents("from_id/$admin/countuserbot.txt");
$us1=str_replace("$us2\n","",$us1);
file_put_contents("from_id/$admin/countuserbot.txt",$us1);
$us5=file_get_contents("makNAMER/$idbots/info.txt");
$us5=str_replace("$admin","$from_id",$us5);
file_put_contents("makNAMER/$idbots/info.txt",$us5);
file_put_contents("from_id/$from_id/countuserbot.txt","》- @$userbot\n",FILE_APPEND);
file_put_contents("from_id/$from_id/countbot.txt",$userbot."\n",FILE_APPEND);
#bots
$idbotfrom=explode("\n",file_get_contents("from_id/$from_id/idbot.txt"));
if(!in_array($ussss,$idbotfrom )){
file_put_contents("from_id/$from_id/idbot.txt","$ussss\n",FILE_APPEND);
}
$botfree=explode("\n",file_get_contents("botfreeid.txt"));
if(!in_array($from_id,$botfree )){
file_put_contents("botfreeid.txt",$from_id."\n",FILE_APPEND);
}
file_put_contents("makNAMER/$idbots/admin.txt","$from_id");
$us6=file_get_contents("makNAMER/$idbots/sudo.json");
$us6=str_replace("$admin","$from_id",$us6);
file_put_contents("makNAMER/$idbots/sudo.json",$us6);
#unlink("makNAMER/$idbots/sudo.json");
$mm=explode("\n",file_get_contents("makNAMER/$idbots/sudo/member.txt"));
$co=count($mm)-1;
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"✅ تم نقل البوت اليك بنجاح 
بيانات البوت 
 
- اسم البوت : $namebot
- معرف البوت : @$userbots
- نوع البوت : رشق دعمكم
- توكن البوت : $tokenboot
",
]);
bot('sendmessage',[
'chat_id'=>$admin,
"text"=>"
تم نقل [بوت](t.me/$userbot) الى [$from_id](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
]);
unlink("makTM/mak2SALEH $chat_id.txt");
unset($codejson["info"][$code]);
file_put_contents("code.json", json_encode($codejson));
}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"
@SALEHAKL
",
'reply_to_message_id'=>$message_id,
]);
}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"لايمكنك نقل البوت لنفسك 
",
'reply_to_message_id'=>$message_id,
]);
}
}
$datatime = json_decode(file_get_contents("datatime.json"),true);
$datatimesend = $datatime["info"][$from_id]["date"];
if($data=="sendpostbotsall"){
$timeuoto=time()+(3600 * 1);
$day = date('Y-m-d',$timeuoto);
if($day!=$datatimesend){
$datatime["info"][$from_id]["date"]="$day";
file_put_contents("datatime.json", json_encode($datatime));
file_put_contents("from_id/$from_id/SALEH.txt","sendpostbotsall");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" حسنا قم بارسال النص لكي يتم 
ارسال الاذاعة في هذة البوتات

 ~~~~~~~~~~~~~~~~~
$infobotsmember
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• الغاء • ' ,'callback_data'=>"botsmember"]],

]])]);
}else{
bot('answercallbackquery',[
'callback_query_id'=>$up->id,
"text"=>"🚫 معذرة لاتستطيع عمل الاذاعة لكل بوتاتك المصنوعة اكثر من مرة واحدة فقط في اليوم $day 
- ستتمكن من نشر الاذاعة غداً

* يمكنك عمل الاذاعة من داخل بوتاتك المصنوعة
 ",
'show_alert'=>true,
]);
}
}
if($text and $SALEHmem =="sendpostbotsall"){
file_put_contents("from_id/$from_id/SALEH.txt","");
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"جاري عمل الاذاعة ",
'reply_to_message_id'=>$message_id,
]);
$bots=explode("\n",file_get_contents("from_id/$from_id/countbot.txt"));
$coo=count($bots)-1;
for ($i=0; $i < count($bots); $i++) { 
$userbots=$bots[$i];
$idbots=file_get_contents("user/$userbots.txt");
include("wataw/$idbots.php");
$tokenboot="$tokenbot";
$mm=explode("\n",file_get_contents("makNAMER/$idbots/sudo/member.txt"));
for ($l=0; $l < count($mm); $l++) {
$id=$mm[$l];
file_get_contents("https://api.telegram.org/bot".$tokenboot."/sendmessage?chat_id=".$id."&text=$text");
}
$co=$co+$l-1;
}
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"- تمت الاذاعة في جميع البوتات المصنوعة 
- تم الارسال الى $co مستخدم.
- عدد البوتات : $coo
",
'reply_to_message_id'=>$message_id,
]);

}
if($data=="uplode"){
file_put_contents("from_id/$from_id/SALEH.txt","uplode");

bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id)
~~~~~~~~~~~~~~~~~
• ارسل ملف php الان !

• بشروط :

1. لا يحتوي الملف على اي اخطاء برمجيه

2. يجب ان يكون عمله بدون الحاجه الى اتصال بخدمات خارجيه (api)

3. لا يحتوي على معرف لقناة او مطور ( يتم وضع معرف المطور عند صنع البوت من قبل المستخدم )
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء الارسال ' ,'callback_data'=>"freebot"]],
]])]);
}
$tw_sudo=$infosudo["info"]["sudo"];
if($message and $SALEHmem =="uplode" and !$data){
if( $update->message->document ){
file_put_contents("from_id/$from_id/SALEH.txt","");
$file_id = $update->message->document->file_id;
bot('senddocument',[
"chat_id"=>"$tw_sudo",
"document"=>"$file_id",
]);
bot('sendmessage',[
"chat_id"=>"$tw_sudo",
'message_id'=>$message_id,
"text"=>"👮|  طلب ارسال ملف جديد
معلومات المرسل 🙎 
الاسم : *$name*
الايدي : $from_id
[$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
bot('sendmessage',[
"chat_id"=>"$chat_id",
'message_id'=>$message_id,
"text"=>"• تم الارسال بنجاح 📦",
'parse_mode'=>"MarkDown",
]);
}else{
bot('sendmessage',[
"chat_id"=>"$chat_id",
'message_id'=>$message_id,
"text"=>"🚫 قم بإرسال الملفات فقط ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الغاء الارسال ' ,'callback_data'=>"freebot"]],
   ] 
   ])
]);
}
}
/*تم تطوير الملف بواسطه ناميرو @s_p_p1
- القناه @Bots_5
- اقسم بالله ما اسامح اي حد يغير الحقوق ليوم الدين */