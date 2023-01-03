<?php
//ini_set('MAX_EXECUTION_TIME', -1);
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$database = 'foundry';
$con=mysqli_connect($dbhost, $dbuser, $dbpass, $database);
	// Check connection
//print_r( $con);
	 if(!$con )
	  {
	  echo "Failed to connect to MySQL: " . mysqli_error();
	  }
?>