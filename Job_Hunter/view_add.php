

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .carousel-control.right, .carousel-control.left {
  background-image: none;
  color: #f4511e;
}

.carousel-indicators li {
  border-color: #f4511e;
}

.carousel-indicators li.active {
  background-color: #f4511e;
}

.item h4 {
  font-size: 19px;
  line-height: 1.375em;
  font-weight: 400;
  font-style: italic;
  margin: 70px 0;
}

.item span {
  font-style: normal;
  
}

.carousel-inner{
  background-color: gray;
}

h2{
    margin-left: 35%;

}

.container-fluid{
    margin-top: 25px;

}

 </style>
</head>
<body>
    <?php
     if(isset($_SESSION["username"])){ ?>
         
    <h2>What our Placed cadidates want to say</h2>

    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
        <h4>"This site is the best. I am so happy with the result! got placed in good company"<br><span style="font-style:normal;">Rakesh jha ,TCS</span></h4>
        </div>
        <div class="item">
          <h4>"One word... WOW!! lots of opptunity to get "<br><span style="font-style:normal;">sneha patil, wipro</span></h4>
        </div>
        <div class="item">
          <h4>"can't expression feeling after placed in good company "<br><span style="font-style:normal;">jon snow,Finos Tech</span></h4>
        </div>
      </div>
    
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> 

    <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 bg-success">
       <p style="font-size: 20px;"> Welcome Click on view job to find out job opptunity in you specilized area.</p><br>
        <br>
        <form action="viewjob.php" method="get">
        <input type="text" name="userid" placeholder="enter job keyword">
        
        <button class="btn btn-primary" type="submit" style="margin-left: 30px;">View Jobs</button>
        </form>
        
        <br><br><br><br><br>
       
      </div>
      <div class="col-lg-6 bg-warning">
        <p style="font-size: 20px;"> Welcome  if you are new here click on add details  button<br>
        fill the all details so that we will try to match your skill and favourite area so that we  <br>
        can  provide you an opptunity to get your first job or your next job. </p>
        <br><a class="btn btn-primary" href="Register.php" role="button" style="margin-left: 30px;">Add Details</a><br><br><br>

      </div>
    </div>
  </div>




  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 bg-success">
       <p style="font-size: 20px;"> Click Here for admin</p><br>
        <br>
        <form action="adminwork.php" method="get">
         <p> for admin to add modify the job details</p>
        
        <button class="btn btn-primary" type="submit" style="margin-left: 30px;">Admin Only</button>
        </form>
        
        <br><br><br><br><br>
       
      </div>
     
    </div>
  </div>

     <?php
     }else{
         include "login.html";
     }
    
    ?>


    
</body>
</html>