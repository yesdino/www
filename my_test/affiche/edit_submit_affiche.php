<?php
require_once("mysql_connect.php");  

$title = $_POST['txt_title']; 
$content = $_POST['txt_content']; 
$id = $_GET['id']; 
$page2 = $_GET['page'];

$sql = mysql_query("update tb_affiche set title='$title',content='$content' where id=$id");    
if($sql)
{
	echo "<script>
		alert('修改成功');
		window.location.href = 'display_affiche.php?page=$page2';
	</script>";
}
else
{
	echo "<script>alert('修改失败！');history.back();</script> ";
}
mysql_close($con);
?>