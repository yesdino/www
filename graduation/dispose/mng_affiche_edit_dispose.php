<?php
require_once("mysql_connect.php");  

$title = $_POST['txt_title']; 
$long_content = $_POST['txt_content']; 

$short_content = substr($long_content,0,54)."...";

// explode("\n",$long_content);
// $long_content = nl2br($long_content);//换行符不处理

$id = $_GET['id']; 
$page2 = $_GET['page'];
 
$query = "update affiche set title='$title',long_content='$long_content',short_content='$short_content' where id=$id";
$sql = $pdo->prepare($query);
$sql->execute();

if($sql)
{
	echo "<script>
		alert('修改成功');
		window.location.href = '../manager.php?page=$page2';
	</script>";
}
else
{
	echo "<script>alert('修改失败！');history.back();</script> ";
}
// mysql_close($con);
?>