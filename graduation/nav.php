<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="stylesheet" href="lib/bootstrap-3.3.7/dist/css/bootstrap.min.css">
<!-- 引入jQuery库 -->
<script type="text/javascript" src="lib/bootstrap-3.3.7/docs/assets/js/vendor/jquery.min.js"></script>
<script type="text/javascript" src="lib/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
<style> 
body{
background:url(img/backgrm.png); 
background-size: 100%;
background-repeat:no-repeat;
margin: 0;
font-size: 12px;
color: #45565A;
position: relative;
}
body a{
  font-size: 12px;
  text-decoration: none;
  color: #45565A;
}
body a:hover{
  text-decoration: none;
}
.center{
  position: relative;         /*background-color: #D7E1E3;*/
}

.nav{
  width: 900px; height: 75px;
  background-color: white;
  margin: 0 auto;
  box-shadow: 5px 8px 2px #B1C0C5;
}
.nav img{
  float: left;
  margin-left: 15px;
}
.nav table{
  float: left;
  margin-left: 75px;        /*border: 1px solid black;*/
  padding: 0;
  border-collapse:collapse;
}
.nav table tr{  /*行*/
  height: 75px;
  margin: 0;
}
.nav table td{
  margin: 0px;              /*background-color: gray;*/
}
.nav a{
  padding: 8px 25px 5px;
  height: 30px;
  display: block;
  border-right: 1px solid #FE5C11;    /* background-color: red;*/
}
#orange{
  background-color: #FE5C11;
}
.Img{
  margin-top: 50px;
}
.Img img{
  margin:0 auto;       /* background-color: red;*/
}
</style>
</head>

<body>
<div  class="center" style="text-align: center;width: 900px;
margin: 0 auto;padding: 0;">  <!-- 把所有的东西放在中间的模块 -->
  <div class="nav">
    <img src="img/logo.png">
    <table>
      <tr>
        <td id="orange"><a name="top" style="color: white;" href="index.php">首页</a></td>
        <td><a href="message.php">乡会信息</a></td>
        <td><a href="affiche.php">动态</a></td>
        <td><a href="communication.php">沟通服务</a></td>
        <!-- <td><a href="display.php">精彩展示</a></td> -->
        <td><a href="recruit.php">换届招聘</a></td>
        <td><a href="dispose/mng_identify.php">管理员操作</a></td>
      </tr>
    </table>
  </div>

  <div class="Img">
    <img src="img/hand&word.png">
  </div>

</div>


</body>
</html>
