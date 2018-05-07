<!DOCTYPE html>
<html>
<head>
<title>沟通服务</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="lib/bootstrap-3.3.7/dist/css/bootstrap.min.css">
<!-- 引入jQuery库 -->
<script type="text/javascript" src="lib/bootstrap-3.3.7/docs/assets/js/vendor/jquery.min.js"></script>
<script type="text/javascript" src="lib/bootstrap-3.3.7/dist/js/bootstrap.js"></script>

<script type="text/javascript" src="common/nav.js"></script>
<script type="text/javascript" src="common/return_top.js"></script>

<link rel="stylesheet" type="text/css" href="css/sub_page.css">
<script type="text/javascript" src="js/sub_page.js"></script>

<script type="text/javascript">
$(function(){
  $("#leadword").click(function(){
  	var sender = $("input[name='sender']").val();
  	var contact = $("input[name='contact']").val();
  	var lead_word = $("textarea[name='lead_word']").val();

  	var expre = /^13(\d{9})$|^18(\d{9})$|^15(\d{9})$/;
  	// 姓名
  	if(sender ==""){
     	$("#msg1").html("不能为空");
     	return false;
     }else{
     	      $("#msg1").html("*");
          }
     // 联系方式
    if(contact ==""){
     	$("#msg2").html("不能为空");
     	return false;
     }
      else if(!(expre.test(contact))){
      	$("#msg2").html("请输入正确格式的手机号");
      	return false;
              }
      else{
      	$("#msg2").html("*");
          }
    // 内容
    if(lead_word ==""){
     	$("#msg3").html("不能为空");
     	return false;
     }
     else{
     	$("#msg3").html("*");
          }
     $("form").submit();
  });  
 });

</script>

<style type="text/css">
#right_content{    /*border: 1px solid green;*/
  width: 100%;  
}
/*留言板*/
#msg_bor input{  /*border: 1px solid blue;*/
	width: 60%;
}
#tip{        /* background-color:  pink;*/
	margin-top: 10px;
	margin-bottom: 30px;
	display: block;
	font-size: 13px;
}
#msg1,#msg2,#msg3{color: red;}
#mng_contact{     /*border: 1px solid red;*/  

}
#mng_contact td{    /*border: 1px solid blue;*/
  height: 50px;
}
</style>


</head>

<body>
<div class="fir_display" style="height: 500px;">
  <!-- 左边的模块 -->
  <div class="left">
    <div class="left_nav"><img src="img/char_intro4.png" style="margin:0 5%;width: 40%;"></div>
    <div class="left_content" id="left_content">
        
        <p><a class="ick">->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;留言&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
        <p><a>->&nbsp;&nbsp;&nbsp;&nbsp;负责人联系方式</a></p>
    </div>
  </div>
  <!-- 右边的模块 -->
  <div class="right" id="All_right">

<!-- 留言 -->
    <section style="display: block;">
        <div class="right_title">
          <a href="">留言</a>	
        </div>
        <div class ="right_content">
			<strong id="tip">如果你对乡会的管理与现状有想要表达的意见和建议，可在下方写下想要说的话提交给管理员，您也可在右方获取负责人联系方式与负责人直接联系，我们将会慎重考虑您的宝贵意见。</strong>
			<form id="msg_bor" method="post" action="dispose/commu_add_dispose.php">
		        <div>
		         	<span>发送人：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input id="sender" type="text" name="sender">
		         	<span id="msg1">*</span>
		         	<br><br>
		 		</div>
		 		<div>
		 			<span>联系方式：</span>
		 			<input type="text" name="contact">
		 			<span id="msg2">*</span><br><br>
		 		</div>
		 		<div>
		 			<span>内容：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<textarea rows="8" cols="66" name="lead_word"></textarea>
					<span id="msg3">*</span><br><br>
		 		</div>
		 		<button type="button" id="leadword" style="width: 50px;margin-left: 60%;margin-top: 20px;">留言</button>
     	</form>
      


        </div>
    </section>
<!-- 负责人联系方式     -->
    <section style="display: none;">
        <div class="right_title">
          <a href="">负责人联系方式</a>
        </div>
        <div class ="right_content">
        
          <table style="width: 80%;text-align: center;margin:20px auto;" id="mng_contact">
            <tr height="40" style="font-weight: bold;border: 1px solid #C3C3C3;">
              <td width="150">姓名</td>
              <td width="150">职位</td>
              <td>联系方式</td>
            </tr>
            <tr >
              <td>邓宴辉</td>
              <td>乡长</td>
              <td>183XXXXXXXX</td>
            </tr>
            <tr >
              <td>梁丽玲</td>
              <td>乡车负责人</td>
              <td>183XXXXXXXX</td>
            </tr>
            <tr >
              <td>郑冬艳</td>
              <td>活动负责人</td>
              <td>183XXXXXXXX</td>
            </tr>
            <tr >
              <td>温海龙</td>
              <td>活动负责人</td>
              <td>183XXXXXXXX</td>
            </tr>
            <tr >
              <td>何光俊</td>
              <td>球赛负责人</td>
              <td>183XXXXXXXX</td>
            </tr>
          </table><br>
        </div>
    </section>


  </div>
  

</div>





<!-- <script type="text/javascript" src="common/footer.js"></script> -->
</body>
</html>
