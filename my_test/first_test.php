<?php
//重要！！为了让网页用utf-8的编码正常显示中文
header("Content-type:text/html; charset=utf-8");  

$time1 = strtotime(date("Y-m-d H-i:s"));
$time2 = strtotime("2012-2-10 17:10:00");
$time3 = strtotime("2010-1-1");
$sub1 = ceil(($time2 - $time1)/3600);
$sub2 = ceil(($time3 - $time2)/86400);
echo "离放假还有<font color=red> $sub1 </font>个小时！<br> ";
echo "离2010年元旦还有<font color=red> $sub2 </font>天！<br> ";

echo "<br><br>";
echo '===================================<br>';

$startdate = date("2009-12-09");
$enddate   = date("2009-12-05");
$days = round((strtotime($startdate) - strtotime($enddate))/3600/24);
echo $startdate."与".$enddate."相差".$days."天";

echo "<br><br>";
echo '===================================<br>';

echo '你现在用的文件的名字为：' . __FILE__;  //全局变量不用$符号
echo '<br>你的操作系统为：' . PHP_OS;
echo '<br>你的php版本为：' . PHP_VERSION;



?>