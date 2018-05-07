<?php
require_once("mysql_connect.php");

$id = $_GET['id'];
$page2 = $_GET['page'];

// $sql = mysql_query("delete from fir_db.tb_affiche where id=$id");    //$sql此时不是一个资源符
// 
$query = "delete from affiche where id=$id";
$sql = $pdo->prepare($query);
$sql->execute();

if($sql)
{
	echo "<script>
		window.location.href = '../manager.php?page=$page2';
	</script>";
}
else
{
	echo "<script>alert('删除失败！');history.back();</script> ";
}

// mysql_close($con);
?>