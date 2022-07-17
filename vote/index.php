<?php
include ('navbar.php');
?>
<html>  
<head>  
    <title>Vote</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="vote.css"> -->
    <link rel="stylesheet" href="customculor.css">
</head>  
<body>  
    <div class="container">  
        <br />  
        <br />
<br />
<div class="jumbotron ">
<h2 align="center">Who Will Win Indian Football League Season 8</h2><br />
</div>
<div class="row">
<div class="col-md-6">
 <form method="post" id="poll_form">
  <h3>Select Your Favourite team:</h3>
  <br />
  <div class="radio">
   <label><h4><input type="radio" name="poll_option" class="poll_option" value="mohunbagan" /> ATK Mohun Bagan</h4></label>
   <img src="images/mohun.png" alt="" width="30px" height="30px">
  </div>
  <div class="radio">
   <label><h4><input type="radio" name="poll_option" class="poll_option" value="bengaluru" /> Bengaluru FC</h4></label>
   <img src="images/bfc.png" alt="" width="20px" height="30px">
  </div>
  <div class="radio">
   <label><h4><input type="radio" name="poll_option" class="poll_option" value="chennainyin" /> Chennaiyin FC</h4></label>
   <img src="images/chennaiyin.png" alt="" width="30px" height="30px">
  </div>
  <div class="radio">
   <label><h4><input type="radio" name="poll_option" class="poll_option" value="odisha" /> Odisha FC</h4></label>
   <img src="images/odisha.png" alt="" width="30px" height="30px">
  </div>
  <div class="radio">
   <label><h4><input type="radio" name="poll_option" class="poll_option" value="fcgoa" /> FC Goa</h4></label>
   <img src="images/fc goa.png" alt="" width="30px" height="30px">
  </div>
  <div class="radio">
   <label><h4><input type="radio" name="poll_option" class="poll_option" value="hyderabad" /> Hyderabad FC</h4></label>
   <img src="images/hyderabad.png" alt="" width="30px" height="30px">
  </div>
  <div class="radio">
   <label><h4><input type="radio" name="poll_option" class="poll_option" value="jamshedpur" /> Jamshedpur FC</h4></label>
   <img src="images/jamshedpur.png" alt="" width="30px" height="30px">
  </div>
  <div class="radio">
   <label><h4><input type="radio" name="poll_option" class="poll_option" value="kerala" /> Kerala Blasters FC</h4></label>
   <img src="images/kerala.png" alt="" width="30px" height="30px">
  </div>
  <div class="radio">
   <label><h4><input type="radio" name="poll_option" class="poll_option" value="mumbai" /> Mumbai City FC</h4></label>
   <img src="images/mumbai.png" alt="" width="30px" height="30px">
  </div>
  <div class="radio">
   <label><h4><input type="radio" name="poll_option" class="poll_option" value="eastbengal" /> SC East Bengal</h4></label>
   <img src="images/bengal.png" alt="" width="30px" height="30px">
  </div>
  <div class="radio">
   <label><h4><input type="radio" name="poll_option" class="poll_option" value="northeast" /> NorthEast United FC</h4></label>
   <img src="images/northeast.png" alt="" width="30px" height="30px">
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
    $(document).ready(function () 
    {

        fetch_poll_data();

        function fetch_poll_data() {
            $.ajax({
                url: "fetch_poll_data.php",
                method: "POST",
                success: function (data) {
                    $('#poll_result').html(data);
                }
            })
        }

        $('#poll_form').on('submit', function (event) {
            event.preventDefault();
            var poll_option = '';
            $('.poll_option').each(function () {
                if ($(this).prop("checked")) {
                    poll_option = $(this).val();
                }
            });
            if (poll_option != '') {
                $('#poll_button').attr("disabled", "disabled");
                var form_data = $(this).serialize();
                $.ajax({
                    url: "poll.php",
                    method: "POST",
                    data: form_data,
                    success: function (data) {
                        $('#poll_form')[0].reset();
                        $('#poll_button').attr('disabled', false);
                        fetch_poll_data();
                        alert("Poll Submitted Successfully");
                    }
                });
            }
            else {
                alert("Please Select Option");
            }
        });

    });
</script>

<?php
include ('comments.php');
// include ('footer.php');

?>