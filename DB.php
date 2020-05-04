<?php
//global $connection;
$connection = mysqli_connect('localhost','root','','iniesta');
if(!$connection)
{
	die("Connection Failed!".mysqli_error($connection));
}
?>