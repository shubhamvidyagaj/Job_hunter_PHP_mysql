

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

include_once "mysqlconn.php";
session_start();

$username =$_POST["username"];
$pass =$_POST["password"];

$query = "select * from user_table where username='".$username."'and password='".$pass."'";
$result = mysqli_query($conn,$query);

if($row=mysqli_fetch_row($result)){
    if($row[0]==$username && $row[1]==$pass){
        $_SESSION["username"]=$username;
        $_SESSION["role"]=$row[2];
        include "view_add.php";

    }

}else{ ?>

<div class="alert alert-danger" role="alert" >
    <p style="font-weight: bold;font-size: 20px;margin-left: 32%;"> Username or Password is incoorect please re-enter again</p>
   </div>


<?php 

include "login.html";

}

?>
    



</body>
</html>



