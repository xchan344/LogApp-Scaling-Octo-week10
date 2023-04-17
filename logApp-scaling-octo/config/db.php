<?php
	$conn = mysqli_connect("localhost", "root", "MySQL344", "delagente-logapp");
	if(mysqli_connect_errno()){
		echo 'Failed to connect to MySQL '. mysqli_connect_errno();
	}