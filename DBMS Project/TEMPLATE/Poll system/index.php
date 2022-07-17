<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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

  <title>Poll System</title>
  <!-- CSS-->
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <div class="wrapper">
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
              <li><a href="#">Points Table</a></li>
              <li><a href="#">Leagues & Fixtures</a></li>
              <li><a href="#">Player Comparison</a></li>
              <li><a href="#">Team Comparison 4</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="desktop-link">Development Activities</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Features</label>
            <ul>
              <li><a href="#">Find Football</a></li>
              <li><a href="#">Player & Coach Registration</a></li>
              <li><a href="#">Scouting</a></li>
              <li><a href="#">National Center of Excellence</a></li>
              <li><a href="grassroot.html">Grassroots</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="desktop-link">Who are we</a>
            <input type="checkbox" id="show-services">
            <label for="show-services">Services</label>
            <ul>
              <li><a href="#">History</a></li>
              <li><a href="#">General Body</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </li>
          <li><a href="#">Shop</a></li>
        </ul>
      </div>
      </form>
    </nav>
  </div>

  <div class="container">  
    <br />  
    <br />
    <br />
<h2 align="center">Live Poll System in PHP Mysql using Ajax</h2><br />
<div class="row">
<div class="col-md-6">
<form method="post" id="poll_form">
<h3>Which is Best PHP Framework in 2018?</h3>
<br />
<div class="radio">
<label><h4><input type="radio" name="poll_option" class="poll_option" value="Laravel" /> Laravel</h4></label>
</div>
<div class="radio">
<label><h4><input type="radio" name="poll_option" class="poll_option" value="CodeIgniter" /> CodeIgniter</h4></label>
</div>
<div class="radio">
<label><h4><input type="radio" name="poll_option" class="poll_option" value="CakePHP" /> CakePHP</h4></label>
</div>
<div class="radio">
<label><h4><input type="radio" name="poll_option" class="poll_option" value="Symfony" /> Symfony</h4></label>
</div>
<div class="radio">
<label><h4><input type="radio" name="poll_option" class="poll_option" value="Phalcon" /> Phalcon</h4></label>
</div>
<br />
<input type="submit" name="poll_button" id="poll_button" class="btn btn-primary" />
</form>
<br />
</div>
<div class="col-md-6">
<br />
<br />
<br />
<h4>Live Poll Result</h4><br />
<div id="poll_result"></div>
</div>
</div>


<br />
<br />
<br />
</div>

</body>
</html>

<script>  
  $(document).ready(function(){
    
   fetch_poll_data();
  
   function fetch_poll_data()
   {
    $.ajax({
     url:"fetch_poll_data.php",
     method:"POST",
     success:function(data)
     {
      $('#poll_result').html(data);
     }
    })  
   }
   $('#poll_form').on('submit',function(event)){
     event.preventDefault();
     var poll_option = '';
     $('.poll_option').each(function(){
        if($(this).prop("checked")){
          poll_option = $(this).val();
        }

     });
     if(poll_option != '')
     {
        $('#poll_button').attr("disabled","disabled");
        var form_data = $(this).serialize();
        $.ajax({
          url:"poll.php",
          method : "POST" ,
          data: form_data ,
          success:function(data)
          {
            $('#poll_form')[0].reset();
            $('#poll_form').attr('disabled', false);
            fetch_poll_data();
            alert("Poll Submitted Successfully");
          }
        })
     }
     else
     {

     }
  
  });  
  </script>
  
