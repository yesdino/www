<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.7/dist/css/bootstrap.min.css"> 
<!-- <script type="text/javascript" src="lib/bootstrap-3.3.7/docs/assets/js/vendor/jquery.min.js"></script> --> <!-- 引用jQuery -->
<!-- <script type="text/javascript" src="lib/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script> -->
<!-- 导航引用 -->
<script type="text/javascript" src="common/nav.js"></script>
<script type="text/javascript" src="common/return_top.js"></script>

<link rel="stylesheet" type="text/css" href="css/index.css">

<style type="text/css">
#apply{                   /*border: 1px solid red;*/
	margin-top: 20px;
	margin-left: 10%;
  margin-right: 4%;
  margin-bottom: 50px;
  font-size: 15px;
}
#apply tr{
	/*line-height: 30px;*/
	margin-bottom: 50px;

}
#apply td{
	padding-left: 3%;
  padding-top: 10px;

}
</style>
</head>
<body style="position: relative;">
<div class="fir_display">
<div style="border-bottom: 1px solid #C3C3C3;width: 80%;margin:0 auto;padding:1% 2%;"><a href="#" onclick="javascript:history.back();" style="font-size: 18px;font-weight: bold;">招聘查看</a></div>
<?php
require_once("dispose/mysql_connect.php");
// $page = $_GET['page'];
$id = $_GET['id'];
//此时$sql不是一个资源符
$res = $pdo->prepare("select * from application where id=$id"); 
$res->execute();  

while($data = $res->fetch(PDO::FETCH_ASSOC))
{
			
?>
	<div style="width: 100%;">
		
		<table id="apply" >
            <tr>
              <td width="15%"><span>姓名：</span></td>
              <td>
                <span><?php echo $data['name'];?></span>
              </td>
            </tr>
            <tr>
              <td><span>性 别：</span></td>
              <td>
                <span><?php echo $data['sex'];?></span>
              </td>
            </tr>
            <tr>
              <td><span>联系方式：</span></td>
              <td><span><?php echo $data['phone'];?></span></td>
            </tr>
            <tr>
              <td><span>家庭住址：</span></td>
              <td><?php echo $data['address'];?></td>
            </tr>
            <tr>
              <td><span>宿舍：</span></td>
              <td><?php echo $data['dorm'];?></td>
            </tr>              
            <tr>
              <td><span>所在学院：</span></td>
              <td><?php echo $data['academy'];?></td>
            </tr>
            <tr>
              <td><span>专业班级：</span></td>
              <td><?php echo $data['major'];?></td>
            </tr>
            <tr>
              <td><span>在班级、社团中的职务：</span></td>
              <td><?php echo $data['other_job'];?></td>
            </tr>
            <tr>
              <td><span>是否有留任班级、社团职务的意愿：</span></td>
              <td><?php echo $data['if_remain'];?></td>
            </tr>
            <tr>
              <td><span>竞选职务：</span></td>
              <td><?php echo $data['job'];?></td>
            </tr>
            <tr>
              <td><span>是否竞选乡长：</span></td>
              <td><?php echo $data['if_lead'];?></td>
            </tr>
            <tr>
              <td><span>个人简介：</span></td>
              <td><?php echo $data['person_intro'];?></td>
            </tr>
            <tr>
              <td><span>对乡会的认识：</span></td>
              <td><?php echo $data['know'];?></td>
            </tr>
            <tr>
              <td><span>竞选宣言：</span></td>
              <td><?php echo $data['declaration'];?></td>
            </tr>
     </table>
            
	</div>
<?php
}
?>


</div>
</body>
</html>