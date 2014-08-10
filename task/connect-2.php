<?php


$title =$_POST['titleText'];

$code =$_POST['codeText'];
//$created =$_POST['createDate'];

mysql_connect('localhost','root','');
mysql_select_db('student');

 
if(mysql_query("INSERT into courses (title,code,created) values ('$title','$code', now())"))
{
	echo "data inserted";
}
else{
	echo "error";
}

?>