<?php
function config(){
$link=mysql_connect('localhost','root','') or die('cant connect database');
$conn=mysql_select_db('course_mash') or die("error in selecting database");

}
?>