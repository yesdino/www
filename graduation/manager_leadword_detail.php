<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.7/dist/css/bootstrap.min.css"> 

<script type="text/javascript" src="common/nav.js"></script>
<script type="text/javascript" src="common/return_top.js"></script>

<link rel="stylesheet" type="text/css" href="css/index.css">

<style type="text/css">
#leadword_detl td{         /* border: 1px solid blue;*/
  padding-top: 10px;
  padding-left: 10px;
}
</style>
</head>
<body style="position: relative;">
<div class="fir_display">
  <div style="border-bottom: 1px solid #C3C3C3;width: 80%;margin:0 auto;padding:1% 2%;"><a href="#" onclick="javascript:history.back();" style="font-size: 18px;font-weight: bold;">留言查看</a></div>
<?php
require_once("dispose/mysql_connect.php");
// $page = $_GET['page'];
$id = $_GET['id'];

$res = $pdo->prepare("select * from msg_board where id=$id"); 
$res->execute();  

while($data = $res->fetch(PDO::FETCH_ASSOC))
{
			
?>
	<div style="width: 100%;padding-left: 15%;padding-right: 15%;padding-bottom: 30px;">
		<table id="leadword_detl">
      <tr>
        <td width=100>姓名：</td>
        <td><?php echo $data['sender'];?></td>
      </tr>
      <tr>
        <td>联系方式：</td>
        <td><?php echo $data['contact'];?></td>
      </tr>
      <tr>
        <td>留言内容：</td>
        <td><?php echo $data['lead_word'];?></td>
      </tr>
      <tr>
        <td>时间：</td>
        <td><?php echo $data['time'];?></td>
      </tr>
    </table>
           
	</div>
<?php
}
?>


</div>
</body>
</html>