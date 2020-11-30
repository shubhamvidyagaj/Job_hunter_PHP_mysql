
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();
if(isset($_SESSION["username"])){

include_once "mysqlconn.php";
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$DOB=$_POST["DOB"];
$phone=$_POST["phone"] ;
$degree=$_POST["hiqalify"];
$skill=$_POST["skill"];
$gender=$_POST["gender"];

$query ="select Fname,Lname,DOB from user_details where Fname='".$fname."' and Lname='".$lname."' and DOB='".$DOB."'";
$result=mysqli_query($conn,$query);

if($row=mysqli_fetch_row($result)){ ?>
<div class="alert alert-danger" role="alert" >
    <p style="font-weight: bold;font-size: 20px;margin-left: 32%;"> User details already exits</p>
   </div>
       
<?php
include "Register.php";
}else{
    $newskill = implode(",",$skill);
    $query ="insert into user_details(Fname,Lname,Email,DOB,Phone,Degree,Skill,Gender) values
    ('".$fname."','".$lname."','".$email."','".$DOB."','".$phone."','".$degree."','".$newskill."','".$gender."')";

    if (mysqli_query($conn, $query)) { ?>

     <div class="alert alert-success" role="alert" >
      <p style="font-weight: bold;font-size: 20px;margin-left: 32%;"> Details inserted sucessfully</p>
    </div>

    <?php
      include "view_add.php";
      } else { ?>
        <div class="alert alert-danger" role="alert" >
         <p style="font-weight: bold;font-size: 20px;margin-left: 32%;"> could not inserted reenter again!!</p>
        </div>
      <?php
      }




}







}else{
    include "login.html";
}

?>
    





</body>
</html>

