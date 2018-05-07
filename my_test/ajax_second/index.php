<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=utf-8">
		<title>ajax2</title>
		<script>
			function chkreg(form)
			{
				var content = form.value;
				if(content =="" )
				{
					document.getElementById("message").innerHTML = "不能为空！";
					form.focus();
					return false; 
				}
				// else
				// {
					// createRequest(var request_obj);//创建名为request_obj的HXR对象 
					// request_obj.onreadystatechange = function()
					// {
						// if(request_obj.readyState==4 && request_obj.status==200 )
						// {	
							// document.getElementById("message").innerHTML = request_obj.responseText;
						// }
						// else
						// {	alert("您请求的页面发生错误");	}
					// }
					// request_obj.open("GET","server.php?content="+form.value);
					// request_obj.send();
				// }
			}
		</script>
	</head>
	<body>
		<div>
			<form>
				<table>
					<tr>
						<td height="30">邮箱：</td>
						<td height="30"><input type="text" size="20" name="email" onBlur="chkreg(email)"></td>
						<td height="30" width="100"><div id="message" style="color:red">*</div></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>