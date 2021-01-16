<?php
echo '<DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Dawurobo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>

	<!-- TODO: Add SDKs for Firebase products that you want to use
	     https://firebase.google.com/docs/web/setup#available-libraries -->
	<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>

	<script>
	  // Your web app's Firebase configuration
	  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
	  var firebaseConfig = {
	    apiKey: "AIzaSyBTWuk26fsGPlio3NhS0b4IinD-VJZSO6iFk",
	    authDomain: "dawurobo-44933.firebaseapp.com",
	    projectId: "dawurobo-44933",
	    storageBucket: "dawurobo-44933.appspot.com",
	    messagingSenderId: "1081937017786",
	    appId: "1:1081937017786:web:42d30c91f0f5735ead7b83",
	    measurementId: "G-MSNMXB15K7"
	  };
	  // Initialize Firebase
	  firebase.initializeApp(firebaseConfig);
	  firebase.analytics();
	</script>


	<style>
		body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
		.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
		.fa-anchor,.fa-coffee {font-size:200px}

		input[type=text] {
		  width: 220px;
		  box-sizing: border-box;
		  border: 2px solid #ccc;
		  border-radius: 4px;
		  font-size: 16px;
		  background-color: white;
		  background-image: url('searchicon.png');
		  background-position: 10px 10px; 
		  background-repeat: no-repeat;
		  padding: 12px 20px 12px 40px;
		  -webkit-transition: width 0.4s ease-in-out;
		  transition: width 0.4s ease-in-out;
		}

		input[type=text]:focus {
		  width: 100%;
		}




		.card {
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		  max-width: 300px;
		  margin: auto;
		  text-align: center;
		  font-family: arial;
		}

		.price {
		  color: grey;
		  font-size: 22px;
		}

		.card button {
		  border: none;
		  outline: 0;
		  padding: 12px;
		  color: white;
		  background-color: #000;
		  text-align: center;
		  cursor: pointer;
		  width: 100%;
		  font-size: 18px;
		}

		.card button:hover {
		  opacity: 0.7;
		}

		.left {
		  float: left;
		  width: 300px;
		  /*border: 3px solid #73AD21;*/
		  padding: 10px;
		}


		.center {
		  float: center;
		  width: 300px;
		  /*border: 3px solid #73AD21;*/
		  padding: 10px;
		}

		.left-card {
		  float: left;
		  width: 300px;
		  /*border: 3px solid #73AD21;*/
		  padding: 10px;
		}


	</style>

</head>
<body>
		
	<div class="w3-top">
	  <div class="w3-bar w3-white w3-card w3-left-align w3-large">
	    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
	    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">Dawurobo</a>
	    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Categories</a>
	    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Post Ad</a>
	    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sign up</a>
	    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Login</a>
	  </div>

	  
<!-- 	  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
	    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
	    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
	    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
	    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
	  </div> -->
	</div>

	<header class="w3-container w3-white w3-center" style="padding:128px 16px">
	  <h1 class="w3-margin w3-jumbo">Get what you need</h1>
	  <p class="w3-xlarge">Swap a bed space or get one</p>

	  	<form>
  			<input type="text" name="search" placeholder="Type what you need...">
		</form>



	  <!-- <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button> -->
	</header>

	<div class="container">
	  <h2>On Hostels</h2>
	 
	  <div class="card left-card" style="width:400px">
	    <img class="card-img-top" src="https://www.w3schools.com/w3images/img_avatar1.png" alt="Card image" style="width:100%">
	    <div class="card-body">
	      <h4 class="card-title">Tek Credit Hostel</h4>
	      <p class="card-text">Tek Credit Hostel is on-campus.</p>
	      <a href="#" class="btn btn-primary stretched-link">Available bed spaces</a>
	    </div>
	  </div>

	  <div class="card left-card" style="width:400px">
	    <img class="card-img-top" src="https://www.w3schools.com/w3images/img_avatar1.png" alt="Card image" style="width:100%">
	    <div class="card-body">
	      <h4 class="card-title">Hall 7</h4>
	      <p class="card-text">Hall 7 is on-campus.</p>
	      <a href="#" class="btn btn-primary stretched-link">Available bed spaces</a>
	    </div>
	  </div>

	   <div class="card left-card" style="width:400px">
	    <img class="card-img-top" src="https://www.w3schools.com/w3images/img_avatar1.png" alt="Card image" style="width:100%">
	    <div class="card-body">
	      <h4 class="card-title">SRC Hostel</h4>
	      <p class="card-text">SRC Hostel is on-campus.</p>
	      <a href="#" class="btn btn-primary stretched-link">Available bed spaces</a>
	    </div>

	  </div>
	</div>
	  		<br><br><br><br><br><br><br><br><br><br>
	 <div class="container">


	  <h2>Off-Hostels</h2>
	 
	  <div class="card left-card" style="width:400px">
	    <img class="card-img-top" src="https://www.w3schools.com/w3images/img_avatar1.png" alt="Card image" style="width:100%">
	    <div class="card-body">
	      <h4 class="card-title">Canam Hall</h4>
	      <p class="card-text">Canam Hall is off-campus.</p>
	      <a href="#" class="btn btn-primary stretched-link">Available bed spaces</a>
	    </div>
	  </div>

	  <div class="card left-card" style="width:400px">
	    <img class="card-img-top" src="https://www.w3schools.com/w3images/img_avatar1.png" alt="Card image" style="width:100%">
	    <div class="card-body">
	      <h4 class="card-title">Victory Towers</h4>
	      <p class="card-text">Victory Towers is off-campus.</p>
	      <a href="#" class="btn btn-primary stretched-link">Available bed spaces</a>
	    </div>
	  </div>

	   <div class="card left-card" style="width:400px">
	    <img class="card-img-top" src="https://www.w3schools.com/w3images/img_avatar1.png" alt="Card image" style="width:100%">
	    <div class="card-body">
	      <h4 class="card-title">Frontline Inn</h4>
	      <p class="card-text">Frontline Inn is off-campus.</p>
	      <a href="#" class="btn btn-primary stretched-link">Available bed spaces</a>
	    </div>



	  </div>
 <br><br><br><br>
	 <br><br><br><br> <br><br><br><br>
	 <br><br><br><br>

		</div>











</body>
</html>';
?>
