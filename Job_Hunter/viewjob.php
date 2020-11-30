
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

include_once "mysqlconn.php";

if(isset($_SESSION["username"])){
    
    $key=$_GET["userid"];
    $query="select * from job_details";
    $result=mysqli_query($conn,$query);   ?>

   <div class="container">          
   <table class="table table-striped">
    <thead>
      <tr>
        <th>job name</th>
        <th>job skill</th>
        <th>status</th>
        <th>apply</th>
      </tr>
    </thead>

    <?php

    while($row=mysqli_fetch_row($result)){
       $skill = explode(":",$row[2]);
       if(!isset($skill[0])){
         $skill[0]=null;
       }
       if(!isset($skill[1])){
        $skill[1]=null;
      }
      if(!isset($skill[2])){
        $skill[2]=null;
      }

      if($skill[0]==$key or $skill[1]==$key or $skill[2]==$key){     ?>
           
     <tbody>
      <tr>
        <td><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
        <td><?php echo $row[3] ?></td>
        <td><a href="#" class="btn btn-danger" role="button">Apply</a></td>
      </tr>

      <?php
      }
    }

    ?>

    </tbody>
  </table>
</div>


<?php
    
}else{
    include "login.html";
}


?>
    
</body>
</html>
