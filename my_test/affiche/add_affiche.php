<?php header("Content-type:text/html; charset=utf-8"); ?>
<html>
<head><title>公告添加</title></head>
<div align="center">
<form name="form1" method="post" action="submit_affiche.php">
	<div align="center">这是我的第一个php作品</div>
	<table style="margin:10" align="center" width="520" height="212" border="0" cellpadding="0" cellspacing="0" bgcolor="pink">
		<tr>
			<td width="87" align="center">公告主题：</td>
			<td width="433" height="40"><input type="text" name="txt_title" id="txt_title" size="40">*</td>
		</tr>
		<tr>
			<td height="124" align="center">公告内容：</td>
			<td><textarea cols="50" rows="8" name="txt_content" id="txt_content"></textarea>*</td>
		</tr>
		<tr align="center">
			<td><input type="submit" name="Submit" value="提交" onClick="return check(form1)"></td>
			<td><input type="reset" name="Submit2"value="重置"></td>
			
		</tr>
	</table>
	<a href='display_affiche.php?page=1'>显示公告 》》</a>
</form>
</div>
<script language="javascript">
function check(form)
{
	if(form.txt_title.value == "")
	{
		alert("请输入标题！"); 
		form.txt_title.focus();
		return false; 
		
	}
	if(form.txt_content.value == "")
	{
		alert("请输入内容");
		form.txt_content.focus();  //先聚焦 再返回false值
		return false;
		
	}
	form.submit();
}
</script>
<html>