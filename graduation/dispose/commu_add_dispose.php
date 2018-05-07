<?php
require_once("mysql_connect.php");  

$sender = $_POST['sender'];
$contact = $_POST['contact'];			
$lead_word = $_POST['lead_word'];

$short_lword = substr($lead_word,0,90)."...";

explode("\n",$lead_word);
$lead_word = nl2br($lead_word);//换行

$createtime = date("Y-m-d H:i:s", time()+6*60*60);  		


// echo $sender."<br>".$contact."<br>".$lead_word."<br><br>".$short_lword."<br>".$createtime;

$statement = "insert into msg_board(sender,contact,short_lword,lead_word,time)value('$sender','$contact','$short_lword','$lead_word','$createtime')";
$res = $pdo->exec($statement);

echo 
"<script> 
alert('公告信息添加成功'); 
window.location.href = '../communication.php'; 
</script>";

$pdo = null;


?>