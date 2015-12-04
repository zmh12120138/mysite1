<?php
/*****************************
*数据库连接
*****************************/
$conn = mysql_connect("localhost","a1223194951","d6e73c4c");
if (!$conn){
    die("连接数据库失败：" . mysql_error());
}
mysql_select_db("a1223194951", $conn);
//字符转换，读库
mysql_query("set character set 'gbk'");
//写库
mysql_query("set names 'gbk'");
?>