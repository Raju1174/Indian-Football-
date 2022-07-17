<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <!-- FAVICON -->
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2019.css">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    

  <title>Home</title>
  <!-- CSS-->
  <link rel="stylesheet" href="newstyle.css">
  <link rel="stylesheet" href="slider.css">
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    h4
    {
        color:#EE7128;
    }
   .mySlides {display:none}
   .w3-left, .w3-right, .w3-badge {cursor:pointer}
   .w3-badge {height:13px;width:13px;padding:0}
   @media (min-width: 768px) 
   {
    .h-md-100 { height: 50vh; }
    }
.btn-round { border-radius: 30px; }
.bg-indigo { background:#67b5f5; }
.bg-white {background:black;}
.text-cyan { color: #35bdff; }
   
</style>
  </style>
</head>
<body>
  <div class="wrapper">
    <nav style="text-decoration:none;">
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#"><img src=logo.png width="30px" height="30px">&nbsp Indian Football Hub</a></div>
        <ul class="links">
          <li><a href="welcome.php">Home</a></li>
          <li><a href="tournament/tournament.php">Tournament</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Features</label>
            <!--<ul>
              <li><a href="pointstable.html"></a></li>
              <li><a href="#">Leagues & Fixtures</a></li>
              <li><a href="#">Player Comparison</a></li>
              <li><a href="#">Team Comparison </a></li>
            </ul>-->
          </li>
            <li><a href="auto/">Find Academy</a></li>
            <li><a href="calender/">Book Ground</a></li>
          <!-- <li><a href="#">Vote</a></li> -->
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
      </form>
    </nav>
    </div>
    <span class="w3-container w3-section w3-2019-orange-tiger">
    <?php echo "<h4>Welcome " . $_SESSION['username'] . "</h4>"; ?>
   </span>

    <div class ="slider">
    <div class="w3-content w3-display-container" style="max-width:800px">
      <img class="mySlides" src="bg121.png" style="width:100%">
      <img class="mySlides" src="bg122.png" style="width:100%">
      <img class="mySlides" src="bg123.png" style="width:100%">
      <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
         <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
         <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
         <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
         <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
         <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
   </div>
</div>

<br>

<div class="d-md-flex h-md-100 align-items-center">

<!-- First Half -->

<div class="col-md-6 p-0 bg-indigo h-md-100">
    <div class="text-white d-md-flex align-items-center h-100 p-5 text-center justify-content-center">
        <div class="logoarea pt-5 pb-5">
        <br><br><br>
            <p style="	font-size: 25px; color:black;"> FIND ACADEMY </p>
            <br>
            <p style="	font-size: 22px;color:black;"> Here you can enter the city and the list of Football Academics are available and user can view it !! </p>
            <a href="auto/"><button style="	font-size: 24px; padding: 14px 40px; background-color:#263288 ;color:white; "> FIND </button></a>
        </div>
    </div>
</div>

<!-- Second Half -->

<div class="col-md-6 p-0 bg-white h-md-100 loginarea">
    <div class="d-md-flex align-items-center h-md-100 p-5 text-center justify-content-center">
    <br><br>
        <p style="	font-size: 25px; color:white;"> GROUND BOOKING </p>
        <br>
        <p style="	font-size: 22px; color:white;"> Here you have an option where user can book ground by choosing the ground or turf and choosing the time along with it and they just need to enter the name and email </p>
        <a href="calender/"><button style="	font-size: 24px; padding: 14px 40px; background-color:#EE7128;color:white; "> BOOK </button></a>   
    </div>
</div>
    
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>



    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <span>
    <div class="elfsight-app-f49a92a5-5a90-4582-9c1b-3ce2095cec54"></div>
    </span>
    <hr>



</body>
</html>