<html>
<head><title>公告显示</title></head>
<body>
<?php
require_once("mysql_connect.php");

$page = $_GET['page'];  //第几页
if(!isset($page))
{ $page = 1; } 

$pageSize = 5;  //一页显示的条数，自己设置 
$offset = ($page-1)*$pageSize;  //从第几条数据开始显示
 
$sql1 = mysql_query("select count(*) as total from tb_affiche order by id desc" );
$message_count = mysql_result($sql1,0,"total");  //总条数   
$page_count = ceil($message_count/$pageSize);  //共页数

if($page > $page_count)
{	echo "<script>alert('此页不存在！');history.back();</script> ";	}

$sql = mysql_query("select * from tb_affiche order by id desc limit $offset,$pageSize");
if($sql&& mysql_num_rows($sql))
{             
?>
<a href='add_affiche.php'>《《 返回添加公告</a>
<!--公告显示部分-->
<div align="center">
	<table border="1px solid red" cellspacing="0">   
		<tr height="50">
			<td width="200" align="center"><b>公告标题</b></td>
			<td width="400" align="center"><b>公告内容</b></td>
			<td width="80" align="center"><b>创建日期</b></td>
			<td width="80" align="center"><b>编辑公告</b></td>			
			<td width="80" align="center"><b>删除公告</b></td>			
		</tr>
		<?php
		while($data = mysql_fetch_assoc($sql))
		{ 
			?>
			<tr height="90">
				<td width="200"><?php echo $data['title'] ;?></td>
				<td width="400"><?php echo $data['content'] ;?></td>
				<td width="200" align="center"><?php echo $data['createtime'] ;?></td>
				<td width="80" align="center"><a href='edit_affiche.php?id=<?php echo $data['id'];?>&page=<?php echo $page;?>'><img width="30" height="30" src="img/edit.jpg"/></a></td>
				
				<td width="80" align="center"><a onClick="if(!confirm('确定删除？')){return false}" href='delete_affiche.php?id=<?php echo $data['id'];?>&page=<?php echo $page;?>'><img width="30" height="30" src="img/delete.jpg"/></a></td>
			</tr>
			<?php
		}      
		mysql_free_result($sql);  //释放资源 ,关闭数据库
		mysql_close($con);
		?>
	</table>
	<!--分页条部分-->
	<div>
		<a>第<?php echo $page; ?>页</a>
		<a href='display_affiche.php?page=1'>首页</a>
		<a href='display_affiche.php?page=<?php if($page != 1){echo $page-1;}else{echo $page;} ?>'>上一页</a>
		<a href='display_affiche.php?page=1'>1</a>
		<a href='display_affiche.php?page=2'>2</a>
		<a href='display_affiche.php?page=3'>3</a>
		<a href='display_affiche.php?page=4'>4</a>
		<a>...</a>
		<a href='display_affiche.php?page=<?php if($page != $page_count){echo $page+1;}else{echo $page;} ?>'>下一页</a>
		<a href='display_affiche.php?page=<?php echo $page_count; ?>'>末页</a>
		<a>共<?php echo $page_count; ?>页</a>
	</div>
</div>
<?php	   
}
?>
</body>
</html>