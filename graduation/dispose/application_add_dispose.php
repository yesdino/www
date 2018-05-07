<?php
require_once("mysql_connect.php");  

$name = $_POST['name'];
$sex = $_POST['sex'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$dorm = $_POST['dorm'];
$academy = $_POST['academy'];
$major = $_POST['major'];
$other_job = $_POST['other_job'];
$if_remain = $_POST['if_remain'];
$job = $_POST['job'];
$if_lead = $_POST['if_lead'];
$person_intro = $_POST['person_intro'];
$know = $_POST['know'];
$declaration = $_POST['declaration'];

$createtime = date("Y-m-d H:i:s", time()+6*60*60);   //时区不准确 差两个时区
// $createtime = date("Y-m-d");

// echo $name."<br/>".$sex."<br/>".$person_intro."<br/>".$declaration."<br/>";

//直接执行语句，不返回$sql地址符
$statement = "insert into application(name,sex,phone,address,dorm,academy,major,other_job,if_remain,job,if_lead,person_intro,know,declaration,sbm_time)value('$name','$sex','$phone','$address','$dorm','$academy','$major','$other_job','$if_remain','$job','$if_lead','$person_intro','$know','$declaration','$createtime')";
if($name == ""){
	echo 
"<script> 
alert('不能为空'); 

history.back();
</script>";
	
}
else{
	$res = $pdo->exec($statement);
	echo 
"<script> 
alert('公告信息添加成功'); 

history.back();
</script>";
}

$pdo = null;
?>