<!DOCTYPE html>
<html>
<head>
<title>换届招聘</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- 引入jQuery库 -->
<script type="text/javascript" src="lib/bootstrap-3.3.7/docs/assets/js/vendor/jquery.min.js"></script>

<script type="text/javascript" src="common/nav.js"></script>
<script type="text/javascript" src="common/return_top.js"></script>

<link rel="stylesheet" type="text/css" href="css/sub_page.css">
<script type="text/javascript" src="js/sub_page.js"></script>
<script type="text/javascript" src="js/recruit.js"></script>

<style type="text/css">
#job_display table{
  width: 85%;
  margin:10px 50px;
}
#job_display td{     /*border: 1px solid green;*/
  padding:3%;
}
#application{
  width: 100%;
}
#application td{    /* border: 1px solid pink;*/
  margin-bottom: 5px;
}
.inp{
  margin-left: 10px;
  margin-bottom: 5px;
}
#apply td a{
  color: red;
}
</style>
<script type="text/javascript">


</script>
</head>

<body style="">
<div class="fir_display" style="height: 800px;">
  <!-- 左边的模块 -->
  <div class="left">
    <div class="left_nav"><img src="img/char_intro5.png" style="margin:0 5%;width: 40%;"></div>
    <div class="left_content" id="left_content">
        <p><a class="ick">->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;招聘职位</a></p>
        <p><a>->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;职位申请</a></p>
    </div>
  </div>
  <!-- 右边的模块 -->
  <div class="right" id="All_right">
    <section style="display:block;" id="job_display">
        <div class="right_title">
          <a href="">招聘职位</a>
        </div>
        <div class ="right_content">
          <!-- 只是装饰用的框 -->
          <!-- <div id="abslu_bor" style="border: 1px solid #C3C3C3;width: 500px;height: 40px;position: absolute;top: 55px;left: 280px;"></div>   -->
          <table style="margin-top:20px;text-align: center;">
            <tr style="border: 1px solid #C3C3C3;font-weight:bold;">
              <td width=150>所需职位</td>
              <td>招聘人数</td>
              <td>详情</td>
            </tr>
            <tr class="cont">
              <td>乡长</td>
              <td>1</td>
              <td><a>详情</a></td>
            </tr>
            <tr class="cont">
              <td>活动负责人</td>
              <td>2</td>
              <td><a>详情</a></td>
            </tr>
            <tr class="cont">
              <td>乡车负责人</td>
              <td>2</td>
              <td><a>详情</a></td>
            </tr>
            <tr class="cont">
              <td>球赛负责人</td>
              <td>2</td>
              <td><a>详情</a></td>
            </tr>
          </table><br>
          <strong style="margin-left: 10%;padding-top: 20px;">注：乡长将在负责人中选出</strong>
    </section>
    <!-- 职位申请 -->
    <section style="display: none;" id="application">
        <div class="right_title">
          <a href="">职位申请</a>
        </div>
        <div class ="right_content">
        <strong style="margin-left: 30%;">请填写职位申请信息</strong></br></br>
            <form method="post" action="dispose/application_add_dispose.php">
              <table id="apply">
                <tr>
                  <td width="15%"><span>申请人：</span></td>
                  <td>
                    <input type="text" name="name" class="inp">
                    <a>*</a>  
                  </td>
                </tr>
                <tr>
                  <td><span>性 别：</span></td>
                  <td>
                    <input type="text" name="sex" class="inp">
                    <a>*</a>
                  </td>
                </tr>
                <tr>
                  <td><span>联系方式：</span></td>
                  <td><input type="text" name="phone" class="inp">
                  <a>*</a> </td>
                </tr>
                <tr>
                  <td><span>家庭住址：</span></td>
                  <td><input type="text" name="address" class="inp" style="width: 60%;"><a>*</a></td>
                </tr>
                <tr>
                  <td><span>宿舍：</span></td>
                  <td><input type="text" name="dorm" class="inp"><a>*</a></td>
                </tr>              
                <tr>
                  <td><span>所在学院：</span></td>
                  <td><input type="text" name="academy" class="inp">
                  <a>*</a> </td>
                </tr>
                <tr>
                  <td><span>专业班级：</span></td>
                  <td><input type="text" name="major" class="inp">
                  <a>*</a> </td>
                </tr>
                <tr>
                  <td><span>在班级、社团中的职务：</span></td>
                  <td><input type="text" name="other_job" class="inp">
                  <a>*</a> </td>
                </tr>
                <tr>
                  <td><span>是否有留任班级、社团职务的意愿：</span></td>
                  <td><input type="text" name="if_remain" class="inp">
                  <a>*</a> </td>
                </tr>
                <tr>
                  <td><span>竞选职务：</span></td>
                  <td><input type="text" name="job" class="inp">
                  <a>*</a> </td>
                </tr>
                <tr>
                  <td><span>是否竞选乡长：</span></td>
                  <td><input type="text" name="if_lead" class="inp">
                  <a>*</a> </td>
                </tr>
                <tr>
                  <td><span>个人简介：</span></td>
                  <td><textarea name="person_intro" cols="50" rows="5" class="inp"></textarea></td>
                </tr>
                <tr>
                  <td><span>对乡会的认识：</span></td>
                  <td><textarea name="know" cols="50" rows="5" class="inp"></textarea></td>
                </tr>
                <tr>
                  <td><span>竞选宣言：</span></td>
                  <td><textarea name="declaration" cols="50" rows="5" class="inp"></textarea></td>
                </tr>
              </table>
              <button type="button" id="sbm" style="margin-left: 15%;">提交</button>
              <!-- <input type="submit" style="margin-left: 15%;" onsubmit ="return check()"> -->

              <input type="reset" style="margin-left: 10%;">

            </form>
        </div>
    </section>
    
  </div>
  
</div>


</body>
</html>
