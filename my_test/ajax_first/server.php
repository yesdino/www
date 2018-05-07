<?php
header("Content-type:text/html; charset=utf-8");

$content = $_GET["content"]; 
if($content = "")
{
	alert("不能为空");
}
?>