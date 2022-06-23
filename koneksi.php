<?php 
	$koneksi  = mysqli_connect(
	$server	  = "localhost",
	$user	  = "root",
	$password =	"",
	$db_name  = "simplecrud"
								);
	if(mysqli_connect_errno())
	{
		echo "Failed Connection"
		.mysql_connect_error();
	}
?>