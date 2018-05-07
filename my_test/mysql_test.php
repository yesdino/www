<?php 
header("Content-type:text/html; charset=utf-8");

$con = mysql_connect('localhost','root','')or die("不能连接服务器".mysql_error());  //1.连接数据库服务器
mysql_select_db("fir_db",$con);  //2.选择数据库
mysql_query("set names 'utf8'");    //3.设置数据库输出编码
$sql = mysql_query("select * from student"); //4.查询需要的结果集，获取地址标识符
//$result = mysql_fetch_assoc($sql);    //5.根据地址标识符获取结果集
if($sql&&mysql_num_rows($sql))
{
	while($result = mysql_fetch_assoc($sql))
	{	$data[] = $result;	}
}
echo "<p>";

function chck_sex($sex)
{
	if($sex == "woman"){	return "女"; }
	if($sex == "man"){	return "男"; }
}
?>   
<html>
	<body>
		<table align="center">
			<tr align="center" height="40" bgcolor="blue">
				<td width="80"><?php echo "姓名"; ?></td>   <!--6.根据需要输出结果集-->
				<td width="80"><?php echo "编号"; ?></td>
				<td width="80"><?php echo "性别"; ?></td>
				<td width="80"><?php echo "年龄"."<br>"; ?></td>
			</tr>
		<?php
		foreach($data as $value)
		{
		?>
			<tr align="center" height="40" align="left" bgcolor="pink">
				<td width="80"><?php echo $value['name']; ?></td>
				<td width="80"><?php echo $value['id']; ?></td>
				<td width="80"><?php echo chck_sex($value['sex']); ?></td>
				<td width="80"><?php echo $value['age']."<br>"; ?></td>
			</tr>
		<?php
		}
		while($result = mysql_fetch_array($sql,MYSQL_NUM));
		mysql_free_result($sql);
		mysql_close($con);
		?>
		</table>
	</body>

</html>

