<?php
$connection = mysqli_connect('localhost','root','mondal@11','iniesta');
if(!$connection)
{
	die("Connection Failed!".mysqli_error($connection));
}
?>