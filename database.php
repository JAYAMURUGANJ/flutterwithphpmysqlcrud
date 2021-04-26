<?php 

	$link = new mysqli('localhost','root','','php_mysql_crud');

	if ($link->connect_errno) {
		printf('faild database connect',$link->connect_errno);
		exit();
	}

?>