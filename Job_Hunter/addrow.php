<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<?php
if(!isset($_SESSION)){
session_start();
}

include_once "mysqlconn.php";


if(isset($_SESSION["username"])){
    $jobid=$_POST["jobid"];
    $jobname =$_POST["jname"];
    $jobskill=$_POST["jskill"];
    $jobstatus=$_POST["status"];
    
    $query="insert into job_details values($jobid,'".$jobname."','".$jobskill."','".$jobstatus."')";
    if (mysqli_query($conn, $query)) { ?>
      <div class="alert alert-success" role="alert" >
      <p style="font-weight: bold;font-size: 20px;margin-left: 32%;"> Data added sucessfully</p>
      </div>

    <?php
      } else { ?>
       <div class="alert alert-success" role="alert" >
       <p style="font-weight: bold;font-size: 20px;margin-left: 32%;"> Data added unsucessfully</p>
       </div>
    <?php
      } 
    
    
    ?>   
    
    

<?php
include "adminADDREMOVE.php";
  
}else{
    include "login.html";
}


?>
    
</body>
</html>