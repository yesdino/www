<?php
require_once("mysql_connect.php");  

$title = $_POST['txt_title']; 
$long_content = $_POST['txt_content']; 
 
$short_content = substr($long_content,0,54)."...";
//换行
explode("\n",$long_content);  //字符串分割为数组
$long_content = nl2br($long_content);

// $createtime = date("Y-m-d H:i:s", time()+6*60*60);   //时区不准确 差两个时区
$createtime = date("Y-m-d");

// echo $title."<br/>".$long_content."<br/>".$short_content."<br/>".$createtime."<br/>";

//直接执行语句，不返回$sql地址符
$statement = "insert into affiche(title,long_content,short_content,time)value('$title','$long_content','$short_content','$createtime')";
$res = $pdo->exec($statement);

echo 
"<script> 
alert('公告信息添加成功'); 
window.location.href = '../manager.php'; 
</script>";

$pdo = null;
?>