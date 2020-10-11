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
	
	$userquery=mysqli_query($conn,"SELECT Email,Name FROM userkey WHERE Userkey='$userkey'");
	
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
if($loginquery==TRUE) echo '<img alt="profile-image" class="rounded-circle" src="pran.jpg" style="width: 45px;"/>&nbsp;&nbsp;&nbsp;<strong><a href="#" target="_blank">''.$username.'</a></strong>';
else echo '<a class="nav-link" href="login.html">Login</a>';
?>
    </div>
    

  </div>

</nav>




<div class="container my-5 py-5 z-depth-1" style="background-color:white;">


    
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text" >

      
      <div class="row" >

        
        <div class="col-lg-7 col-md-12 mb-4 mb-md-0">
		<h3 class="font-weight-bold">Write Us</h3>
          
          <div class="row">
			
           
            <div class="col-md-6">
			

              
              <div class="md-form md-outline mb-0">
                <input type="text" id="form-first-name" class="form-control">
                <label for="form-first-name">First name</label>
              </div>

            </div>
            
            <div class="col-md-6">

              
              <div class="md-form md-outline mb-0">
                <input type="text" id="form-last-name" class="form-control">
                <label for="form-last-name">Last name</label>
              </div>

            </div>
         

          </div>
          
		  
          <div class="md-form md-outline mt-3">
            <input type="email" id="form-email" class="form-control">
            <label for="form-email">E-mail</label>
          </div>

         
          <div class="md-form md-outline">
            <input type="text" id="form-subject" class="form-control">
            <label for="form-subject">Subject</label>
          </div>

         
          <div class="md-form md-outline mb-3">
            <textarea id="form-message" class="md-textarea form-control" rows="3"></textarea>
            <label for="form-message">How we can help?</label>
          </div>

          <button type="submit" class="btn btn-info btn-sm ml-0">Submit<i class="far fa-paper-plane ml-2"></i></button>

        </div>
        
		<div class="col-lg-5 col-md-12 mb-0 mb-md-0">

          <h3 class="font-weight-bold">Contact Us</h3>

          <p class="text-muted">Agro INVEST is leading in market.</p>

          <p><span class="font-weight-bold mr-2">Phone:</span><a href="">+91 8171058198</a></p>
		  <p><span class="font-weight-bold mr-2">Email:</span><a href="">challengers@agroinvest.com</a></p>
          

        </div>
       

      </div>
      


    </section>
    


  </div>
  <footer class="page-footer font-small blue">

   
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="index.html"> Agroinvest</a>
    </div>
  

  </footer>
  