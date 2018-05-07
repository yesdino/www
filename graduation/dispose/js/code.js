
$(function() { 

    var code = 9999; 
    function codes(){
        
        var ranColor = '#' + ('00000' + (Math.random() * 0x1000000 << 0).toString(16)).slice(-6); //随机生成颜色
        // alert(ranColor)
        var ranColor2 = '#' + ('00000' + (Math.random() * 0x1000000 << 0).toString(16)).slice(-6); 
        var num1 = Math.floor(Math.random() * 100);  
        var num2 = Math.floor(Math.random() * 100);  
        code = num1 + num2;  
        
        $("#code").html(num1 + "+" + num2 + "=?");  
        if ($("#code").hasClass("nocode")) {  
            $("#code").removeClass("nocode");  
            $("#code").addClass("code"); 
           
        }  
        $("#code").css('background',ranColor);
         $("#code").css('color',ranColor2);

    }
    codes()
   
    $("#code").on('click',codes)
      
    $("#send").click(function(){ 
        var USER = "11";   //设置账号
        var PSD = "22";   // 设置密码
        var str1 = document.getElementById("str1").value;
        var str2 = document.getElementById("str2").value;
        
        if (($(".input").val() == code && code != 9999)&&( (str1 == USER) && (str2 == PSD) ))
        {
            window.location = "../manager.php"; //登录地址
        }
        // 账号
        if(str1 ==""){  
            $("#msg1").html("不能为空");  
        }else if(str1 !== USER){
            $("#msg1").html("请输入正确账号");
        }else if(str1 == USER){
            $("#msg1").html("*");
        }
        // 密码
        if(str2 == ""){  
            $("#msg2").html("不能为空");  
        }else if(str2 !== PSD){  
            $("#msg2").html("请输入正确密码");  
        }else if(str2 == PSD){
            $("#msg2").html("*");
        }
        // 验证码
        if ($(".input").val() == code && code != 9999) {           
            $("#msg3").html("*");
        } else {  
            $("#msg3").html("请输入正确验证码"); 
            return false;
        }  
        
    });  
});  
