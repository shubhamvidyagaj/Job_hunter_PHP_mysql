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
session_start();

if($_SESSION["role"]=="admin"){
    include "adminADDREMOVE.php";

}else{ ?>

    <div class="alert alert-danger" role="alert" >
    <p style="font-weight: bold;font-size: 20px;margin-left: 32%;"> You Don't have Permission to acces admin</p>
   </div>

   <?php
    include "view_add.php";
}

?>
    
</body>
</html>

