<?php

										/*TO AVOID CACHE*/
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
										/*END*/
  
 if($_SERVER["REQUEST_METHOD"]=="POST") {
	 
	 if(empty($_POST["pass"])) {
	 echo "Password is Required.<br>";}
	 else $password=$_POST["pass"];
	 
	 if(empty($_POST["email"])) {
	 echo "Email is required.<br>";}
	 else $email=$_POST["email"];
	 
	 
	
 }

/*CONNECTIONS */
$loginconn = new mysqli('sql105.epizy.com','epiz_26934931','aifjdPbNBD','epiz_26934931_agroinvest');


/*CONNECTIONS */
if($loginconn->connect_error) echo "Error Establishing Connection";
/*else echo "Connection Established<br>";*/




$result=mysqli_query($loginconn,"SELECT Email,Password FROM login WHERE Email='$email' and Password='$password' ");
$user=mysqli_fetch_array($result,MYSQLI_ASSOC);

if($user>0) {
	
	
	$username=$user['Name'];
	$email=$user['Email'];
	
	$userdevicekey=bin2hex(random_bytes(20));
	
	
	$savekey=mysqli_query($loginconn,"INSERT INTO userkey(Email,Userkey)
	VALUES('$email','$userdevicekey')");
	/*echo $userdevicekey . " ". $username;
	
	/*SET COOKIE*/
	
	$cookie_name="userkey";
	$cookie_value=$userdevicekey;
	setcookie($cookie_name,$cookie_value,time()+(4*365*24*60*60),"/");/*4 years*/
	echo '<script>
function frontpage() {
	location.replace("index.php");
}
frontpage();
</script>';
}
else echo '<script>
function frontpage() {
	location.replace("login.html");
}
frontpage();
</script>';

/*$conn->close();*/
 ?>
