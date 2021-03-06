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

  <title>Email Subscription</title>
  <!-- CSS-->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="styling.css">
  
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body >
  <!-- <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#"><img src=logo.png width="30px" height="30px">&nbsp Indian Football</a></div>
        <ul class="links">
          <li><a href="#">Home</a></li>
          <li><a href="#">Tournament</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Features</label>
            <ul>
              <li><a href="pointstable.html">Points Table</a></li>
              <li><a href="#">Leagues & Fixtures</a></li>
              <li><a href="#">Player Comparison</a></li>
              <li><a href="#">Team Comparison </a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="desktop-link">Development Activities</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Features</label>
            <ul>
              <li><a href="findfootball.html">Find Football</a></li>
              <li><a href="#">Player & Coach Registration</a></li>
              <li><a href="#">Scouting</a></li>
              <li><a href="#">National Center of Excellence</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="desktop-link">Who are we</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Services</label>
            <ul>
              <li><a href="history.html">History</a></li>
              <li><a href="Generalbody.html">General Body</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </li>
          <li><a href="store.html">Shop</a></li>
        </ul>
      </div>
      </form>
    </nav>
  </div> -->
  <div class="start-btn">
    <a href="#"> Free Subscription </a>
  </div>
<div class="center modal-box">
    <div class="fas fa-times">
</div>
<div class="fas fa-envelope icon1">
</div>
<header>Don't miss updates from us!</header>
<p>
    Get Daily Articles And Latest News</p>
    <p>
        Enroll Now !!</p>
<form name="myforms" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
      <div class="fas fa-envelope icon2">
</div>
<input type="email" required placeholder="abc@example.com" name="email">
      <button  name="submit" >Subscribe</button>
    </form>
<div class="icons">
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-instagram"></i>
      <i class="fab fa-youtube"></i>
    </div>
</div>
<script>
    $(document).ready(function(){
      $('.start-btn').click(function(){
        $('.modal-box').toggleClass("show-modal");
        $('.start-btn').toggleClass("show-modal");
      });
      $('.fa-times').click(function(){
        $('.modal-box').toggleClass("show-modal");
        $('.start-btn').toggleClass("show-modal");
      });
    });
  </script>

</div>
</body>
</html>

       
        <?php
        
        include 'Connection.php';
       
        if(isset($_POST['submit']))
        {
          $Email = mysqli_real_escape_string($conn, $_POST['email']);
          $insertquery ="insert into subscribers(Email) values('$Email')";
          $to_email = $_POST['email'];
          $subject= "Indian Football Newsletter Subscription";
         
          $file = "IndianFootballNewsletter.pdf";
          $body ="Thank, You for Subscribing Newsletter....... \n Now you will receive newsletter every week!!\n";
          
          $headers = "From: admin@evergreenvibes.com";
          $query = mysqli_query($conn, $insertquery);
          if($query){
            ?>
            <script>
            // alert('Inserted successfully');
            </script>
            <?php
            
            }
            else{
                ?>
                <script>
                // alert('Not inserted successfully');
                </script>
                <?php
    
            }

            if(mail($to_email, $subject, $body, $headers)){
              ?>
              <script>
              alert('Email successfully sent' . $to_email);
              </script> 
              <?php
            }else {
              ?>
              <script>
              alert('Email Sending Failed..........');
              </script>
              <?php
              }
        

            
            
    
        }

       

        
        
        ?>
    