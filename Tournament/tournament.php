<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("bg11.jpg");
  
  /* Add the blur effect */
  filter: blur(1px);
  -webkit-filter: blur(0px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 60%;
  padding: 10px;
  text-align: center;
}
.buttonload {
  background-color: #ff970f; /* Green background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 12px 24px; /* Some padding */
  font-size: 16px; /* Set a font-size */
}

/* Add a right margin to each icon */
.fa {
  margin-left: -12px;
  margin-right: 8px;
}
</style>
</head>
<body>
<div class="bg-image"></div>

<div class="bg-text">
  <h2 style="font-size:40px">C'mon India , #LETSFOOTBALL !!</h2>
  <h3 style="font-size:20px">Join,Play and Enjoy the tournament from anywhere using us.</h3>
  <p>
   	  <button class="buttonload">
		<a href="./Login.php"><i class="fa fa-hand-o-up"></i>Join Now</a>
	  </button>	
</p>
</div>

</body>
</html>
