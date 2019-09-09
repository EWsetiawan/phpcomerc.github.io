<?php

$db = mysqli_connect('localhost','root','','tutorial');

if (mysqli_connect_errno()){
	echo 'database connection failed with following error: '. mysqli_connect_errno();
	die();
}

require_once $_SERVER['DOCUMENT_ROOT'].'/tutorial/config.php';
 require_once BASEURL.'helper/helpers.php';
