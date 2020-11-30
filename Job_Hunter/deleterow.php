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

$id = $_GET["id"];



if(isset($_SESSION["username"])){
    
    $query="delete FROM job_details WHERE jobid=$id";
    if (mysqli_query($conn, $query)) { ?>
      <div class="alert alert-danger" role="alert" >
      <p style="font-weight: bold;font-size: 20px;margin-left: 32%;"> Deleted sucessfully</p>
      </div>

    <?php
      } else { ?>
       <div class="alert alert-danger" role="alert" >
       <p style="font-weight: bold;font-size: 20px;margin-left: 32%;"> Deleted opration unsucessfully</p>
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