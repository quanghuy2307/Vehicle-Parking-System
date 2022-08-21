<?php

// Information connection
define("SERVER_NAME", "localhost");
define("USER_NAME", "root");
define("USER_PASSWORD", "");
define("DATABASE_NAME", "avps-db");

// Create connection
$conn = mysqli_connect(SERVER_NAME, USER_NAME, USER_PASSWORD, DATABASE_NAME);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>