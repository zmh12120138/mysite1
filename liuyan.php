<?php

//�������ݿ������ļ�
include('conn.php');

//д������
$xingming = $_POST['xingming'];
$shouji = $_POST['shouji'];
$liuyan1 = $_POST['liuyan1'];
//�������ݿ������ļ�
include('conn.php');
//д������
$sql = "INSERT INTO liuyan(xingming,shouji,liuyan1)VALUES('$xingming','$shouji','$liuyan1')";
if(mysql_query($sql,$conn)){
	exit('�����ύ�ɹ�������˴� <a href=index.html>������ҳ</a>');
} else {
	echo '��Ǹ������ʧ�ܣ�',mysql_error(),'<br />';
	echo '����˴� <a href="javascript:history.back(-1);">����</a> ����';
}
?>
