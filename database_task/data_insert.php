<?php


$student_name = $_POST['student_name'];
$course_title = $_POST['course_title'];
//$course_code = $_POST['course_code'];


mysql_connect('localhost','root','');

mysql_select_db('student_courses');

mysql_query("INSERT into students_info (name,created) values ('$student_name',now())");

//mysql_query("INSERT into courses (title,code) values ('$course_title','$course_code')");

$student_query = mysql_query("SELECT id from students_info where name = '$student_name'");

$student_id = mysql_fetch_object($student_query);

$course_query = mysql_query("SELECT id from course_details where title = '$course_title'");

$course_id = mysql_fetch_object($course_query);

$input_student_id = $student_id->id;
$input_course_id = $course_id->id;

//echo $input_student_id;
//echo $input_course_id;


$data = mysql_query("INSERT into map_students_courses (student_id,course_id,created,modified) values ('$input_student_id','$input_course_id',now(),now())");
//$data = mysql_query("INSERT into students (name) values ('$student_name')");

//var_dump($data);
if ($data)
{
	echo "Data inserted";
}	
else
{
	echo "Error";
}


//echo $student_id->id;
//echo $course_id->id;

//echo "Data has sucessfully inserted.<br />";


?>