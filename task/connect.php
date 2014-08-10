<?php
//var_dump($_POST);
//require_once 'index.html';
$name =$_POST['nameText'];
//$created =$_POST['createDate'];

mysql_connect('localhost','root','');
mysql_select_db('student');

 $data = mysql_query("INSERT into students_info (name,created) values ('$name',now())");
var_dump ($data);
if($data)
{
echo "data inserted";
}



?>