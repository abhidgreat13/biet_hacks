<?php
$conn = new mysqli('sql105.epizy.com','epiz_26934931','aifjdPbNBD','epiz_26934931_agroinvest');
 
// Check connection
if($conn == false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}
$loginquery=FALSE;
$cookie_name="userkey";
if(!isset($_COOKIE[$cookie_name])) {  }
else {
	$userkey=$_COOKIE[$cookie_name];
	
	$userquery=mysqli_query($conn,"SELECT Email FROM userkey WHERE Userkey='$userkey'");
	
	if(mysqli_num_rows($userquery)<1) setcookie("userkey","",time()-3600);   /*dELETE COOKIE*/
	else {
		$getuser=mysqli_fetch_array($userquery,MYSQLI_ASSOC);
		$username=$getuser['Name'];
		$loginquery=TRUE;
		
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>AGRO-INVEST</title>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
	
		<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light white">

  <div class="container">

    <a class="navbar-brand" href="#">
     <img src="logo.png" height="30" alt="agroinvest logo">
    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    
    <div class="collapse navbar-collapse" id="basicExampleNav">

      
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="main.php">Deals</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link" href="#">Link 2</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" href="features.php">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact Us</a>
        </li>

      </ul>
<?php
if($loginquery==TRUE) echo '<img alt="profile-image" class="rounded-circle" src="pran.jpg" style="width: 45px;"/>&nbsp;&nbsp;&nbsp;<strong><a href="#" target="_blank">Abhishek Sharma</a></strong>';
else echo '<a class="nav-link" href="login.html">Login</a>';
?>
    </div>
    

  </div>

</nav>



  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"  style="50vh;">
    <div class="carousel-inner">
      <div class="carousel-item " style="50vh;">
        <img src="https://agronewsng.com/wp-content/uploads/2018/01/COPERATIVE-BANNER-1.jpg" class="d-block w-100 ssimg" alt="...">
      </div>
      <div class="carousel-item " style="50vh;">
        <img src="https://faraafrica.files.wordpress.com/2016/06/agri-investment.jpg" class="d-block w-100 ssimg" alt="...">
      </div>
      <div class="carousel-item " style="50vh;">
        <img src="https://images.outlookindia.com/public/uploads/articles/2020/5/28/Picture_(3).jpg" class="d-block w-100 ssimg" alt="...">
      </div>
      <div class="carousel-item active" style="50vh;">
        <img src="https://thumbs.gfycat.com/UnrulySerpentineIriomotecat-small.gif" class="d-block w-100 ssimg" alt="...">
      </div>
      <div class="carousel-item " style="50vh;">
        <img src="https://res.cloudinary.com/twenty20/private_images/t_watermark-criss-cross-10/v1580243320000/photosp/bcdcd01f-9fce-477d-ab44-806a98ea90c5/stock-photo-farm-agriculture-money-harvest-growing-startup-agribusiness-profit-loan-bcdcd01f-9fce-477d-ab44-806a98ea90c5.jpg" class="d-block w-100 ssimg" alt="...">
      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div id="container" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/background2.jpg); background-size: cover; background-position: center center;padding: 8px;height: 100%;">
    <div class="desc" style="text-align: center;height:100%;padding-top: 5px;font-family: garamond,serif;">
      <h4 class="text-center font-weight-normal text-white mx-auto mb-4 pb-2">India ia an agriculturally important country. Two-thirds of its population is engaged in agricultural activities. Agriculture is a primary activity, which produces most of the food that we consume. Besides food grains, it also produces raw mateiral for various industries. So through this AGRO-INVEST platform we provide investors to our farmers , who invest in their seasonal crops. This will benefit both the farmers and investors. Here investors can find farmers to invest in their seasonal crops.</h4>
      <br>
      <a class="btn btn-success" href="main.php" style="margin:0rem;font-family: system-ui;"><b>Start Investing</b></a>
      <br><br>
    </div>
  </div>

  
  <footer class="page-footer font-small blue">

   
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="index.html"> Agroinvest</a>
    </div>
    

  </footer>
  
  <script>
    $('.carousel').carousel({
      interval: 2000
    })
  </script>
</body>
<style>
	
.carousel-item{
	height: 50vh;
	
	}
	.ssimg{
	height: 50vh;
    object-fit: fill;
	}
	</style>

</html>