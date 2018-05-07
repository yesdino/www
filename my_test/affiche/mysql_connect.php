<?php
header("Content-type:text/html; charset=utf-8");

$con = mysql_connect('localhost','root','')or die("不能连接服务器".mysql_error());  //1.连接数据库服务器
mysql_select_db("fir_db",$con);  //2.选择数据库
mysql_query("set names 'utf8'");    //3.设置数据库输出编码
?>