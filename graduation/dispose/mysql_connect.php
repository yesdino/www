<?php
header("Content-type:text/html; charset=utf-8");

$host = "localhost";     //数据库服务器端口
$user = "root";          //用户名
$pwd = "";               //密码
$dbname = "graduate";    //选择数据库名

// if($con) {	echo "连接成功";	}
// $con = mysql_connect('localhost','root','')or die("不能连接服务器".mysql_error());  //1.连接数据库服务器
// mysql_select_db("fir_db",$con);  //2.选择数据库
$dbms = "mysql";
$dsn = "$dbms:host=$host;dbname=$dbname";  
$pdo = new PDO($dsn,$user,$pwd);   //实例化PDO对象
// if($pdo) { echo "连接成功"; }

// mysql_query("set names 'utf8'");    //3.设置数据库输出编码
$pdo ->exec("set names 'utf8'");
?>