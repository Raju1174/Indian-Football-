<?php
  require_once 'config.php';

  if (isset($_POST['submit'])) {
    $countryName = $_POST['search'];

    $sql = "SELECT * FROM academy WHERE city = :city";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['city' => $countryName]);
    $row = $stmt->fetch();
  } else {
    header('location: .');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
</head>
<style>
    body 
        {
            background-image: url("bg1.jpg"); /* The image used */
            background-color: #ffffff; /* Used if the image is unavailable */
            height: 800px; /* You must set a specified height */
            background-position:static; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size:auto; /* Resize the background image to cover the entire container */
        }
        

</style>
<body>


<!-- 
<div class="container">
  <h2>Basic Table</h2>
  if($stmt->$row > 0)
  {
        echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Assciation</th>";
                                        echo "<th>Address</th>";
                                        echo "<th>city</th>";
                                        echo "<th>contact</th>";
                                        echo "<th>image</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $stmt->fetch()){
                                    echo "<tr>";
                                        echo "<td>" . $row['association'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['city'] . "</td>";
                                        echo "<td>" . $row['contact'] . "</td>";
                                        echo "<td>" . $row['image'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="details.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                            echo "</table>";
     }
                            ?>
</div>
    -->
    <div class="container">
    <div class="row mt-5">
      <div class="col-5 mx-auto">
        <div class="card shadow text-center">
          <div class="card-header">
            <h1><?= $row['city'] ?></h1>
          </div>
          <div class="card-body">
            <h4><b>Association :</b> <?= $row['association'] ?></h4>
            <h4><b>Address :</b> <?= $row['address'] ?></h4>
            <h4><b>City :</b> <?= $row['city'] ?></h4>
            <h4><b>Contact :</b> <?= $row['contact'] ?></h4>
            <!-- <h4><b>Image :</b> <?= $row['image'] ?></h4> -->
          </div>
          
        </div>
      </div>
    </div>
  </div>
 
</body>

</html>