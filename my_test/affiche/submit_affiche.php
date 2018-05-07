<?php
header("Content-type:text/html; charset=utf-8");
$con = mysql_connect('localhost','root','')or die("数据库连接失败".mysql_error());
mysql_select_db("fir_db",$con);
mysql_query("set names 'utf8'");

$title = $_POST['txt_title'];    //注意$_POST['']括号内要带单引号
$content = $_POST['txt_content']; 
$createtime = date("Y-m-d H:i:s"); 

//$sql = mysql_query("insert into tb_affiche(title,content,createtime)value('$title','$content','$createtime')");
mysql_query("insert into tb_affiche(title,content,createtime)value('$title','$content','$createtime')");

echo 
"<script> 
alert('公告信息添加成功'); 
window.location.href = 'add_affiche.php'; 
</script>";

//mysql_free_result($sql); 此时$sql为布尔型，不需要释放资源
mysql_close($con); 

?>