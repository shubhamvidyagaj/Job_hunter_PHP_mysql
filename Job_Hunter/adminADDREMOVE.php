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
    
    $query="select * from job_details";
    $result=mysqli_query($conn,$query);   ?>

    <div class="container"> <div class=" text-center mt-5 ">
        <h1>Add job Form</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" role="form" action="addrow.php" method="post" >
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Job ID *</label> <input id="form_name" type="text" name="jobid" class="form-control" placeholder="Please enter your job id *" required="required" data-error="job id is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Job Name *</label> <input id="form_lastname" type="text" name="jname" class="form-control" placeholder="Please enter job name *" required="required" data-error="job name is required."> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Job Skills *</label> <input id="form_email" type="text" name="jskill" class="form-control" placeholder="Please enter job skills *" required="required" data-error="job skill is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email1">Status *</label> <input id="form_email1" type="text" name="status" class="form-control" placeholder="Please enter job status *" required="required" data-error="job status is required."> </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Add Details"> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
</div>










   <div class="container" style="margin-top:30px">          
   <table class="table table-striped">
    <thead>
      <tr>
        <th>job id</th>
        <th>job name</th>
        <th>job skill</th>
        <th>status</th>
        <th>remove</th>
      </tr>
    </thead>

    <?php

    while($row=mysqli_fetch_row($result)){     ?>
           
     <tbody>
      <tr>
        <td><?php echo $row[0] ?></td>
        <td><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
        <td><?php echo $row[3] ?></td>
        <td><a href='deleterow.php?id=<?php echo $row[0] ?>' class="btn btn-danger" role="button" value="<?php echo $row[0] ?>">remove</a></td>
      </tr>

      <?php
      
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