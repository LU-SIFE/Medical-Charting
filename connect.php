<?php

	define('USER', 'catalystuser24');
	define('PASSWORD', 'downloud42');
	define('HOST', 'localhost');
	define('DATABASE', 'chart_db');

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$con = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}