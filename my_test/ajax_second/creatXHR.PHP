<script>
/*-----------------
函数功能：初始化HXR对象
参数：HXR对象名
----------------------*/
function createRequest(var http_request)
{
	http_request = false;  
	if(window.XMLHttpRequest)
	{
		http_request = new XMLHttpRequest();
		if(http_request.overrideMimeType)
		{	http_request.overrideMimeType("text/xml");	}
	}
	else if(window.ActiveXObject)  //IE浏览器
	{
		try
		{	http_request = new ActiveXObject("Msxml2.XMLHTTP");	}
		catch(e)
		{	}
	}
	if(!http_request)  //如果没有XHR对象
	{
		alert("不能创建XMLHTTP对象");
		return false;
	}
	
}


</script>