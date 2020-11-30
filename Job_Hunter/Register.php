<?php 
if(!isset($_SESSION)){
session_start();
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .container{
            border: 2px solid black;
        }
        


    </style>
</head>
<body>
    <?php 
    if(isset($_SESSION["username"])){ ?>

    <div class="container">
        <form class="form-horizontal" action="registerdetails.php" role="form" method="post">
            <h2>Registration</h2>
            <div class="form-group">
                <label for="firstName" class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-9">
                    <input type="text" id="firstName" placeholder="First Name" name="fname" class="form-control" autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-9">
                    <input type="text" id="lastName" placeholder="Last Name"  name="lname" class="form-control" autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email* </label>
                <div class="col-sm-9">
                    <input type="email" id="email" placeholder="Email"   class="form-control" name= "email">
                </div>
            </div>
            <div class="form-group">
                <label for="birthDate" class="col-sm-3 control-label">Date of Birth*</label>
                <div class="col-sm-9">
                    <input type="date" id="birthDate"  name="DOB" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
                <div class="col-sm-9">
                    <input type="phoneNumber" id="phoneNumber"  name="phone" placeholder="Phone number" class="form-control">
                    <span class="help-block">Your phone number won't be disclosed anywhere </span>
                </div>
            </div>
            <div class="form-group">
                <label for="hq" class="col-sm-3 control-label">Highest Qualification</label>
                <div class="col-sm-9">
                    <input type="text" id="hq" name="hiqalify" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3" >Skills</div>
                <div class="col-sm-9">
                  <div class="form-check">
                    <input class="form-check-input" name="skill[]" type="checkbox" id="gridCheck1"value="Full and MEAN stack" >
                    <label class="form-check-label" for="gridCheck1">
                      Full and MEAN stack
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="skill[]" type="checkbox" id="gridCheck1" value="Java">
                    <label class="form-check-label" for="gridCheck1">
                      Java
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="skill[]" type="checkbox" id="gridCheck1" value="Python">
                    <label class="form-check-label" for="gridCheck1">
                      Python
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="skill[]" type="checkbox" id="gridCheck1" value="C and C++">
                    <label class="form-check-label" for="gridCheck1">
                      C and C++
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="skill[]" type="checkbox" id="gridCheck1"  value="Database technology">
                    <label class="form-check-label" for="gridCheck1">
                      Database technology
                    </label>
                  </div>
                </div>
              </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Gender</label>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" id="femaleRadio" name="gender" value="Female">Female
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" id="maleRadio" name="gender" value="Male">Male
                            </label>
                        </div>
                    </div>
                </div>
            </div> 
            <button type="submit" class="btn btn-primary btn-block" style="margin-bottom: 5px;">Add Profile Details</button>
        </form> 
    </div> 

    <?php  
    }else{
        include "login.html";
    }
    
    ?>
    
</body>
</html>