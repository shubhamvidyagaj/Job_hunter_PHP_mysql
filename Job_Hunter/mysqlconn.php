<?php 

$server = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "job_hunter";

$conn = mysqli_connect($server,$dbuser,$dbpass,$dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }



?>