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
<script type="text/javascript" src="js/sub_page.js"></script>

<link rel="stylesheet" type="text/css" href="css/manager.css">
<script type="text/javascript" src="js/manager.js"></script>
</head>

<body>
<div class="fir_display" style="height: 750px;">
  <!-- 左边的模块 -->
  <div class="left">
    <div class="left_nav"><img src="img/char_intro6.png" style="margin:0 5%;width: 40%;"></div>
    <div class="left_content" id="left_content">
        <p><a href="manager.php" class="ick">->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;管理公告 </a></p>
        <p><a href="manager2.php">->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;招聘申请 </a></p>
        <p><a href="manager3.php">->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;留言查看 </a></p>
    </div>
  </div>
  <!-- 右边的模块 -->
  <div class="right" id="All_right" style="height: 600px;">
<!-- 管理公告 -->
    <section style="display:display;">
        <div class="right_title">
          <a>管理公告</a>
        </div>
        <!-- 发布公告 -->
        <div class="right_content" id="affiche" >
          <div style="padding-left: 15%;">
            <p><strong class="rig_sub_title">发布新公告</strong></p>
            <form name="form1" method="post" action="dispose/mng_affiche_add.php">
              <span for="txt_title">公告主题：</span>
              <input type="text" name="txt_title" id="txt_title" size="40">*</br></br>
  
              <span for="txt_content">公告内容：</span>
              <textarea cols="50" rows="8" name="txt_content" id="txt_content"></textarea>*
              
              <div style="margin-left: 18%;">
                <input class="butn" type="submit" name="Submit" value="发布" onClick="return check(form1)">
                <input class="butn" type="reset" name="Submit2" value="重置">
              </div>
            </form>
            <br>
          </div>
          </br>
<center>-----------------------------------------------------------------------------------------------------------------------------------</center>

            <?php
            require_once("dispose/mysql_connect.php");

            // $page = 1;
            // if(!empty($_GET['page'])){ $page=$_GET['page']; }
            $page=(!empty($_GET['page']))?$_GET['page']:1;//第几页
            // $page = $_GET['page'];   
            // if(!isset($page)){   $page = 1; }

            $pageSize = 5;      //一页显示的条数
            $offset = ($page-1)*$pageSize;  //从第几条数据开始显示

            $sql = "select * from affiche";
            $res = $pdo->prepare($sql);
            $res->execute();
            $message_count = $res->rowCount();    //数据的条数   
            $page_count = ceil($message_count/$pageSize);  //共页数

            // if($page > $page_count)
            // { echo "<script>alert('此页不存在！');history.back();</script> "; }

            $query = "select * from affiche order by id desc limit $offset,$pageSize";  //获取数量
            $result = $pdo ->prepare($query);
            $result ->execute();    
            ?>
            <!-- 公告显示 -->
            <table width="100%;">
                <tr height="50">
                <td width="250"><b>公告标题</b></td>
                <td width="350"><b>公告内容</b></td>
                <td width="120"><b>创建日期</b></td>
                <td width="50"><b>编辑</b></td>      
                <td width="30"><b>删除</b></td>     
              </tr>
            <?php
            while($data = $result->fetch(PDO::FETCH_ASSOC))
            { 
            ?>
            
            <tr height="50" id="test">
              <td width=""><?php echo $data['title'] ;?></td>
              <td width=""><?php echo $data['short_content'] ;?></td>
              <td width=""><?php echo $data['time'] ;?></td>
              
              <td width=""><a href='dispose/mng_affiche_edit.php?id=<?php echo $data['id'];?>&page=<?php echo $page;?>'><img src="img/edt.jpg"/></a></td>
              <td width="80"><a onClick="if(!confirm('删除后不可恢复！确定删除？')){return false}" href='dispose/mng_affiche_delete_dispose.php?id=<?php echo $data['id'];?>&page=<?php echo $page;?>'><img src="img/del.jpg"/></a></td>
            </tr>
            <?php
            }      
            //释放资源 ,关闭数据库
            ?>
            </table>
            <!-- 分页选择栏 -->
            <div class="sel_page">
              <a>第<?php echo $page; ?>页</a>
              <a href='manager.php?page=1'>首页</a>
              <a href='manager.php?page=<?php if($page != 1){echo $page-1;}else{echo $page;} ?>'>上一页</a>
              <a href='manager.php?page=1'>1</a>
              <a href='manager.php?page=2'>2</a>
              <a href='manager.php?page=3'>3</a>
              <a href='manager.php?page=4'>4</a>
              <a>...</a>
              <a href='manager.php?page=<?php if($page != $page_count){echo $page+1;}else{echo $page;} ?>'>下一页</a>
              <a href='manager.php?page=<?php echo $page_count; ?>'>末页</a>
              <a>共<?php echo $page_count; ?>页</a>
            </div>
            
            

        </div>
    </section>

   


  </div>
  

</div>





<!-- <script type="text/javascript" src="common/footer.js"></script> -->
</body>
</html>
