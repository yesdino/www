<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>管理员登录</title>
<script src="js/jquery-1.12.3.min.js"></script>

<script type="text/javascript" src="js/code.js"></script>
<!-- <script type="text/javascript" src="js/check.js"></script> -->
<link rel="stylesheet" type="text/css" href="../css/mng_identify.css">

<script src="js/jquery-1.12.3.min.js"></script>


</head>
<body>
 
<div style="" id="identity">
   <h4 style="margin-left: 25%;">管理员验证</h4>
   <form id="my" action="" method="post">
      <p>
        <span>账号：</span>
        <input type="text" name="username" id="str1" />
        <span id="msg1">*</span>
      </p>
      <p>
        <span>密码：</span>
        <input type="text" name="password" id="str2" />
        <span id="msg2">*</span>
      </p>

      <div>
          <span id="code" class="nocode" style="font-size: 22px;">验证码</span> 
          <input type="text" class="input" style="width: 20%;" id="str3" /> 
          <span id="msg3">*</span>
          
      </div>
      
     </form>
     <div style="margin-left: 20%;margin-top: 20px;">
        <button id="send">提交</button>
        <button onclick="javascript:history.back();">返回</button>
     </div>

</div>
</body>
</html>
