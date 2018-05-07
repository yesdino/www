function chkreg(p)
{
	var req_Obj = new XMLHttpRequest();
	req_Obj.open("GET","server.php?content="+document.getElementById("email").value);
	req_Obj.send();
	req_Obj.setRequestHeader("Content-type","application/x-www-form-urlencode");
	req_Obj.onreadystatechange = function()
	{
		if(req_Obj.status ===200 && req_Obj.readyState ===4 )
		{
			document.getElementById("massage").innerHTML = req_Obj.responseText;
		}
		else
		{
			alert("发生错误："+req_Obj.status);
		}
	}
}

