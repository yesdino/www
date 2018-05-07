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

</style>
<script type="text/javascript">

</script>
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
      <a href="#" onClick="javascript:history.back();">最新动态</a>
    </div>
    <!-- 右边的内容 -->
	<div class="right_content">
	<?php
	require_once("dispose/mysql_connect.php");
	// $page = $_GET['page'];
	$id = $_GET['id'];
	
	$res = $pdo->prepare("select * from affiche where id=$id"); 
	$res->execute();  
	while($data = $res->fetch(PDO::FETCH_ASSOC))
	{
	?>
		<center style="font-size: 20px;font-weight: bold;margin-bottom:10px;margin-top: 10px;"><?php echo $data['title'];?></center>
		<div style="font-size: 13px;text-indent: 2em;">
			<p style="text-indent: 2em;">
			<?php echo $data['long_content'];?>
			</p>
		</div>
	
    <?php
	}
	?>
    </div>
  </div>
  
</div>
<script type="text/javascript" src="common/footer.js"></script>
</body>
</html>
