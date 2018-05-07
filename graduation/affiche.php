<!DOCTYPE html>
<html>
<head>
<title>动态</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- 引入jQuery库 -->
<script type="text/javascript" src="lib/bootstrap-3.3.7/docs/assets/js/vendor/jquery.min.js"></script>

<script type="text/javascript" src="common/nav.js"></script>
<script type="text/javascript" src="common/return_top.js"></script>

<link rel="stylesheet" type="text/css" href="css/sub_page.css">

<style type="text/css">
.right_content{
	padding-bottom: 30px;
}
.right_content td{       /*border: 1px solid red;*/
  padding: 5px; /*border-bottom: 1px dotted black;*/
  /*text-align: center;*/
}
.sel_page{    /*border:1px solid red;*/
	padding:10px;
}
.sel_page a{
	margin-left: 3%;
}
</style>

</head>

<body>

<div class="fir_display">
  <!-- 左边的模块 -->
  <div class="left">
    <div class="left_nav"><img src="img/char_intro3.png" style="margin:0 5%;width: 40%;"></div>
    <div class="left_content">
        <p><a href="affiche.php">->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最新动态</a></p>
    </div>
  </div>
  <!-- 右边的模块 -->
  <div class="right">
    <div class="right_title">
      <a href="affiche.php">最新动态</a>
    </div>
    <!-- 右边的内容 -->
	<div class="right_content">

		<div style="width: 40%;height: 30px;margin-left: 70%;">
			<form method="get" action="affiche_keyword.php">
			
				<input type="text" name="keyword" onclick="if(this.value == '请输入关键字查询')this.value='';" value="请输入关键字查询" id="keyword">
				<img src="img/search.png" onclick="submit()">
			</form>
		</div>
		

		<?php
		require_once("dispose/mysql_connect.php");

		$page=(!empty($_GET['page']))?$_GET['page']:1;//第几页
	

		// $keyword=(!empty($_GET['keyword']))?$_GET['keyword']:null;

		$pageSize = 5;      //一页显示的条数
		$offset = ($page-1)*$pageSize;  //从第几条数据开始显示

		// $sql = "select * from affiche where title like '%$keyword%' or long_content like '%$keyword%' order by id desc limit $offset,$pageSize";
		$sql = "select * from affiche ";
		// echo $sql;

		$res = $pdo->prepare($sql);
		$res->execute();
		$message_count = $res->rowCount();    //数据的条数		
		$page_count = ceil($message_count/$pageSize);  //共页数

		// if($page > $page_count){	
		// 	echo "<script>alert('此页不存在！');history.back();</script>";
		// }


		$query = "select * from affiche order by id desc limit $offset,$pageSize";

		$result = $pdo ->prepare($query);
		$result ->execute();    
		?>
	  <table width="100%;">
		  	<tr height="50">
				<td width="200"><b>公告标题</b></td>
				<td width="400"><b>公告内容</b></td>
				<td width="80"><b>创建日期</b></td>
					
			</tr>
	  <?php
	  while($data = $result->fetch(PDO::FETCH_ASSOC))
	  { 
	  ?>
		<tr height="50" class="suspend">
			<td width="200" style="font-weight: bold;"><?php echo $data['title'] ;?></td>
			<td width="400"><a href="affiche_detail.php?id=<?php echo $data["id"];?>"><?php echo $data['short_content'] ;?></a></td>
			<td width="200"><?php echo $data['time'] ;?></td>
		</tr>
		<?php
		}      
	  //释放资源 ,关闭数据库
		?>
      </table>
	  <div class="sel_page">
		<a>第<?php echo $page; ?>页</a>
		<a href='affiche.php?page=1'>首页</a>
		<a href='affiche.php?page=<?php if($page != 1){echo $page-1;}else{echo $page;} ?>'>上一页</a>
		<a href='affiche.php?page=1'>1</a>
		<a href='affiche.php?page=2'>2</a>
		<a href='affiche.php?page=3'>3</a>
		<a href='affiche.php?page=4'>4</a>
		<a>...</a>
		<a href='affiche.php?page=<?php if($page != $page_count){echo $page+1;}else{echo $page;} ?>'>下一页</a>
		<a href='affiche.php?page=<?php echo $page_count; ?>'>末页</a>
		<a>共<?php echo $page_count; ?>页</a>
	  </div>
    
    </div>
  </div>
  
</div>
<!-- <script type="text/javascript" src="common/footer.js"></script> -->
</body>
</html>
