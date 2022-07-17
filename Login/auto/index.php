<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Find Football</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="newstyle.css">

  
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <style>
    body 
    {
        background-image: url("bg12.jpg"); /* The image used */
        background-color: #ffffff; /* Used if the image is unavailable */
        height: 800px; /* You must set a specified height */
        background-position:right; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size:auto; /* Resize the background image to cover the entire container */
    }
    .container
    {
      position: absolute;
	    left: 30%;
	    top: 55%;
	    transform: translate(-50%, -50%);
	    padding: 10px;
    }
  </style>
</head>

<body>
<div>
<a href ="..\welcome.php"><button name="back" type="back" class="btn btn-primary " style = "width:5% "  > < </button></a>

  </div>
  <div class="container">
    <div class="row mt-4">
      <div class="col-md-8 mx-auto bg-light rounded p-4">
        <h5 class="text-center font-weight-bold">FIND ACADEMY</h5>
        <hr class="my-1">
        <h5 class="text-center text-secondary">Write any city name in the search box</h5>
        <form action="details.php" method="post" class="p-3">
          <div class="input-group">
            <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-info" placeholder="Search..." autocomplete="off" required>
            <div class="input-group-append">
              <input type="submit" name="submit" value="Search" class="btn btn-info btn-lg rounded-0">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5" style="position: sticky;margin-top: -38px;margin-left: 215px;">
        <div class="list-group" id="show-list">
          <!-- Here autocomplete list will be display -->
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
  <break>
</body>

</html>