<?php

//包含数据库连接文件
include('conn.php');

//写入数据
$xingming = $_POST['xingming'];
$shouji = $_POST['shouji'];
$liuyan1 = $_POST['liuyan1'];
//包含数据库连接文件
include('conn.php');
//写入数据
$sql = "INSERT INTO liuyan(xingming,shouji,liuyan1)VALUES('$xingming','$shouji','$liuyan1')";
if(mysql_query($sql,$conn)){
	exit('留言提交成功！点击此处 <a href=index.html>返回主页</a>');
} else {
	echo '抱歉！留言失败：',mysql_error(),'<br />';
	echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}
?>
