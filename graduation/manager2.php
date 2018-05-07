<!DOCTYPE html>
<html>
<head>
<title>管理员操作</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="lib/bootstrap-3.3.7/dist/css/bootstrap.min.css">
<!-- 引入jQuery库 -->
<script type="text/javascript" src="lib/bootstrap-3.3.7/docs/assets/js/vendor/jquery.min.js"></script>
<script type="text/javascript" src="lib/bootstrap-3.3.7/dist/js/bootstrap.js"></script>

<script type="text/javascript" src="common/nav.js"></script>
<script type="text/javascript" src="common/return_top.js"></script>

<link rel="stylesheet" type="text/css" href="css/sub_page.css">
<!-- <script type="text/javascript" src="js/sub_page.js"></script> -->

<link rel="stylesheet" type="text/css" href="css/manager.css">
<script type="text/javascript" src="js/manager.js"></script>
</head>

<body>
<div class="fir_display">
  <!-- 左边的模块 -->
  <div class="left">
    <div class="left_nav"><img src="img/char_intro6.png" style="margin:0 5%;width: 40%;"></div>
    <div class="left_content" id="left_content">
        <p><a href="manager.php">->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;管理公告 </a></p>
        <p><a href="manager2.php" class="ick">->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;招聘申请 </a></p>
        <p><a href="manager3.php">->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;留言查看 </a></p>
    </div>
  </div>
  <!-- 右边的模块 -->
  <div class="right" id="All_right" style="height: 600px;">
<!-- 管理公告 -->
  
<!-- 招聘查看 -->
    <section style="display: display;">
        <div class="right_title">
          <a href="">招聘查看</a>
        </div>
        <div class ="right_content">
            <?php
            require_once("dispose/mysql_connect.php");

            $page=(!empty($_GET['page']))?$_GET['page']:1;//第几页
            // $page = $_GET['page'];   
            // if(!isset($page)){   $page = 1; }

            $pageSize = 5;      //一页显示的条数
            $offset = ($page-1)*$pageSize;  //从第几条数据开始显示

            $sql = "select * from application";
            $res = $pdo->prepare($sql);
            $res->execute();
            $message_count = $res->rowCount();    //数据的条数   
            $page_count = ceil($message_count/$pageSize);  //共页数

            // if($page > $page_count)
            // { echo "<script>alert('此页不存在！');history.back();</script> "; }

            $query = "select * from application order by id desc limit $offset,$pageSize";  //获取数量
            $result = $pdo ->prepare($query);
            $result ->execute();    
            ?>
            <table width="100%;" id="leadboard">
              <tr height="50" id="aplc_title">
                <td width="50"><b>姓名</b></td>
                <td width="100"><b>申请职务</b></td>
                <td width="80"><b>是否竞选乡长</b></td>
                <td width="80"><b>日期</b></td>
                <td width="80"><b>详情</b></td>
                  
              </tr>
            <?php
            while($data = $result->fetch(PDO::FETCH_ASSOC))
            { 
            ?>
            
            <tr height="50" id="aplc_content">
              <td><?php echo $data['name'];?></td>
              <td><?php echo $data['job'];?></td>
              <td><?php echo $data['if_lead'];?></td>
              <td><?php echo $data['sbm_time'];?></td>
              <td><a href="manager_apply_detail.php?id=<?php echo $data["id"];?>">详情</a></td>
            </tr>
            <?php
            }      
            //释放资源 ,关闭数据库
            ?>
              </table>
            <div class="sel_page">
              <a>第<?php echo $page; ?>页</a>
              <a href='manager2.php?page=1'>首页</a>
              <a href='manager2.php?page=<?php if($page != 1){echo $page-1;}else{echo $page;} ?>'>上一页</a>
              <a href='manager2.php?page=1'>1</a>
              <a href='manager2.php?page=2'>2</a>
              <a href='manager2.php?page=3'>3</a>
              <a href='manager2.php?page=4'>4</a>
              <a>...</a>
              <a href='manager2.php?page=<?php if($page != $page_count){echo $page+1;}else{echo $page;} ?>'>下一页</a>
              <a href='manager2.php?page=<?php echo $page_count; ?>'>末页</a>
              <a>共<?php echo $page_count; ?>页</a>
            </div>


        </div>
    </section>



  </div>
  

</div>





<!-- <script type="text/javascript" src="common/footer.js"></script> -->
</body>
</html>
