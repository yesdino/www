<?php
require_once("mysql_connect.php");
$page = $_GET['page'];
$id = $_GET['id'];
$sql = mysql_query("select * from tb_affiche where id=$id");   //此时$sql不是一个资源符
?>
<html>
<head>
	<script>
		function check_update(form)
		{
			if(form.txt_title.value ==""){ alert("标题不能为空"); form.txt_title.focus(); return false; 	}
			if(form.txt_content.value ==""){ alert("内容不能为空"); form.txt_content.focus(); return false;	}
			form.submit();
		}
		
	</script>
</head>
<body>
<div align="center">
	<form method="post" name="form2" action="edit_submit_affiche.php?id=<?php echo $id;?> &page=<?php echo $page;?>">
		<table cellspacing="0">
		<?php
		while($data = mysql_fetch_object($sql))
		{
			?>
			<tr>
				<td width="87">公告主题：</td>
				<td><input type="text" size="40" name="txt_title" id="txt_title" value="<?php echo $data->title;?>"></td>
				<td type="hidden" name="id" value="<?php echo $data->id;?>"></td>  <!--隐藏域-->
			</tr>
			<tr>
				<td height="150" align="center">公告内容：</td>
				<td height="100"><textarea name="txt_content" cols="50" rows="8"><?php echo $data->content;?></textarea></td>
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
</body>
</html>
