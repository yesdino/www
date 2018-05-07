<!DOCTYPE html>
<html>
<head>
<title>修改公告</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script>
		function check_update(form)
		{
			if(form.txt_title.value ==""){ alert("标题不能为空"); form.txt_title.focus(); return false; 	}
			if(form.txt_content.value ==""){ alert("内容不能为空"); form.txt_content.focus(); return false;	}
			form.submit();
		}
	</script>
<style type="text/css">
body{	
	font-size: 12px;
	color: #45565A;
	background:url(../img/backgrm.png); 
	background-size: 100%;
	background-repeat:no-repeat;
}
table{
	border: 1px solid red;
	margin-top: 100px;
	padding:3%;
	border-radius:20px
}
</style>
</head>
<body>
<?php
require_once("mysql_connect.php");
$page = $_GET['page'];
$id = $_GET['id'];
// $sql = mysql_query("select * from tb_affiche where id=$id");   //此时$sql不是一个资源符
require_once("mysql_connect.php");

$query = "select * from affiche where id=$id"; 
$res = $pdo->prepare($query);
$res-> execute();
	
?>
<div align="center">

	<form method="post" name="form2" action="mng_affiche_edit_dispose.php?id=<?php echo $id;?> &page=<?php echo $page;?>">
		<table cellspacing="0" style="">
		
		<?php
		// while($data = mysql_fetch_object($sql))
		while($data = $res->fetch(PDO::FETCH_OBJ))
		{
			?>
			<tr>
				<td width="87">公告主题：</td>
				<td><input type="text" size="40" name="txt_title" id="txt_title" value="<?php echo $data->title;?>"></td>
				<td type="hidden" name="id" value="<?php echo $data->id;?>"></td>  <!--隐藏域-->
			</tr>
			<tr>
				<td height="150">公告内容：</td>
				<td height="100"><textarea name="txt_content" cols="50" rows="8"><?php echo $data->long_content;?></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="Submit" value="修改" onClick="check_update(form2)">
					<input type="reset">
					<button onClick="history.back();">取消修改</button>
					
				</td>
			</tr>
		<?php
		}
		?>

		</table>
	</form>
</div> 
</html>
