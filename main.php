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

<body style="
    background-image: url('https://i.pinimg.com/originals/d6/da/3f/d6da3f32affc71a4fe91c8117fb825f8.jpg');
    background-size: 100% 100vh;
    background-repeat: no-repeat;
">
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


    <div class="container" style="padding-top: 10px;">
        <div class="row">

            <div class="col-4" style="background-image: url(https://images.unsplash.com/photo-1523741543316-beb7fc7023d8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80);text-align:center;position:fixed;top: 10%;height: 80%;">
                <br>
                <div class="pic" style="margin-left: auto; margin-right: auto; height: 150px;width: 150px; ">
                
                   <img style="width: 140px;border-radius: 70px;" src="pran.jpg">
				   <h3 class="font-weight-bold pt-4 mb-4" style="padding-top: 0px !important;">Abhishek</h3>
                </div>
                <br> <br>
				<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <select id="state" class="justify-content-center browser-default custom-select" onchange="loginfo();" name="state">
                    <option value="Select" selected>SELECT STATE</option> 
                    <option value="Uttar Pradesh">Uttar Pradesh</option> 
                    <option value="Delhi" >Delhi</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Haryana">Haryana</option>
                  </select>
                  <br> <br>
                  <select id="city" class="justify-content-center browser-default custom-select" name="city">
                    <option value="Select" selected>SELECT CITY</option> 
                    <option value="Mathura">Mathura</option> 
                    <option value="Mumbai" >Mumbai</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Chennai">Chennai</option>
                  </select>
                  <br> <br>
                 <!-- <select  name="">
                    <option value="Select" selected>SELECT TOWN</option> 
                    <option value=" Jhansi">Jhansi</option> 
                    <option value="Lakhimpur" >Lakhimpur Kheri</option>
                    <option value="Sitapur">Sitapur</option>
                    <option value="Lucknow">Lucknow</option>
                  </select>
                  <br> <br>-->
                  <select class="justify-content-center browser-default custom-select" name="crop">
                    <option value="Select" selected>SELECT CROP</option> 
                    <option value="Sugercane ">Sugercane</option> 
                    <option value="Rice" >Rice</option>
                    <option value="Wheat">Wheat</option>
                    <option value="Maize">Maize</option>
                  </select>
			
                  <br> <br> <br>
                  <button type="submit" class="btn btn-primary" style="margin-left: 13px;"> Search</button>
            </form>
			</div>
            <div class="col-8" style="position: absolute;right: 0px;/* margin-top: 0%; */width: 60%;overflow-y: scroll;height: 80%;">
	<!--div class="container" style="margin-top: 15%;"-->
    
	<?php

if(isset($_GET['state'])) $state=$_GET['state'];
if(isset($_GET['city'])) $city=$_GET['city'];
if(isset($_GET['crop'])) $crop=$_GET['crop'];
/*$state="Uttar Pradesh";
$city="Mathura";
$crop="Wheat";*/

$conndata = new mysqli('sql105.epizy.com', 'epiz_26934931', 'aifjdPbNBD', 'epiz_26934931_agroinvest');
if ($conndata->connect_error) {
    die('Connect Error: ' . $conndata->connect_error);
}
$raw_results = mysqli_query($conndata,"SELECT * FROM data WHERE State='$state' AND City='$city' AND Crop='$crop'");
echo $conndata->error;
if(mysqli_num_rows($raw_results) > 0){ 
			
	while($results = mysqli_fetch_array($raw_results)){


	echo '<div class="card" style="width:100%;padding: 14px;">
    <img class="card-img-top" src="'.$results['img'].'" alt="Card image" style="width:25%">
    <div class="card-body" style="/* right:0px; */left: 30%;position: absolute;width: 60%;padding: 0rem;/* height: 44%; */">
      <h4 class="card-title">'.$results["Name"].'</h4>
	  <strong>State: </strong>'.$results["State"].'<br><strong>City: </strong>'.$results["City"].'
	  <br><strong>Crop: </strong>'.$results["Crop"].'
      <div style="font-family: sans-serif;font-size: x-large;"><b>Interest:&nbsp; '.$results["Interest"].'</b></div>
    </div>
	<div>
	<!-- Section heading -->
        <h3 class="font-weight-bold my-4">About</h3>
        <!-- Section description -->
        <p class="font-weight-light mx-auto mb-4 pb-2">'.$results["About"].'</p>
	</div>
    <button type="button" class="btn btn-primary" style="width:200px;">Show Interest</button>
  </div>';
  }
}
else echo '<div class="card" style="width:100%;padding: 14px;">No Results</div>';

?>
  
 
           
             </div>  
        </div>
          

        <br><br>
    \>
  <footer class="page-footer font-small blue" style="position: absolute;width: 100%;left: 0px;">

   
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="index.html"> Agrew</a>
    </div>
   

  </footer>

</body>
<script>


function loginfo() {
	if(document.getElementById('state').value=="Uttar Pradesh") {
		document.getElementById('city').innerHTML="<option value=''>Select City</option><option value='Agra'>Agra</option>\
  <option value='Mathura'>Mathura</option>\
  <option value='Jhansi'>Jhansi</option>";
	}
	else if(document.getElementById('state').value=="Gujrat") {
		document.getElementById('city').innerHTML="<option value=''>Select City</option><option value='Vadodra'>Vadodra</option>\
  <option value='Ahemdabad'>Ahemdabad</option>\
  <option value='Surat'>Surat</option>";
	}
	else {
	document.getElementById('city').innerHTML="<option value=''>Select City</option>";}
		
}
</script>
</html>