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
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>

      </ul>
<?php
if($loginquery==TRUE) echo '<img alt="profile-image" class="rounded-circle" src="pran.jpg" style="width: 45px;"/>&nbsp;&nbsp;&nbsp;<strong><a href="#" target="_blank">Abhishek Sharma</a></strong>';
else echo '<a class="nav-link" href="login.html">Login</a>';
?>
    </div>
    

  </div>

</nav>




<div style="background-color: wheat;" class="container my-5 p-5 z-depth-1">


  
  <section class="text-center dark-grey-text">

    
    <h2 class="font-weight-bold mb-4 pb-2">Why Agroinvest?</h2>
    
    <p class="lead grey-text mx-auto mb-5">Agroinvest is known all over India for it's best deals to help farmers and investors.</p>

    
    <div class="row">

      
      <div class="col-md-4 mb-4">

        <img style="width: 43%;" src="https://img.pngio.com/benefit-for-your-customers-png-customer-customer-png-550_411.png" style="width: 80%;" />
        <h5 class="font-weight-bold my-4">2 Lakh+ Customers</h5>
        <p class="grey-text mb-md-0">Agroinvest family more than 2lakh happy customers all over india.
        </p>

      </div>
     
      <div class="col-md-4 mb-4">

        <img style="width: 24%;" src="centre.png" />
        <h5 class="font-weight-bold my-4">1000+ Centers</h5>
        <p class="grey-text mb-md-0">We have 1000+ centres to provide our customers a seamless experience of happy dealing.
        </p>

      </div>
      
      <div class="col-md-4 mb-4">

        <img style="width: 33%;" src="support.png" />
        <h5 class="font-weight-bold my-4">Support</h5>
        <p class="grey-text mb-0">We consider each contact an opportunity to advocate for customers and provide support via phone, email and chat 24/7.
        </p>

      </div>
      

    </div>
 

  </section>
  

</div>

  <footer class="page-footer font-small blue">

    
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="index.html"> Agroinvest</a>
    </div>
    

  </footer>
  <style>
  .grey-text{
  color: #1a1818 !important;
  }
  </style>