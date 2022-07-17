<!DOCTYPE html>
<html>
    <head>
        <link href="tournament.css" rel="stylesheet" type="text/css">
        <title >Tournament Registration</title>
        <script>
            function validateForm() {
            var Team_Name = document.forms["myForm"]["tname"].value;
            var Coach_Name = document.forms["myForm"]["cname"].value;
            var Address = document.forms["myForm"]["address"].value;
            var City = document.forms["myForm"]["city"].value;
            var Contact_Number = document.forms["myForm"]["phone"].value;
            if (Team_Name == "") {
            alert("Enter Team Name !!");
            return false;
            }
            if (Coach_Name == "") {
            alert("Enter Coach Name !!");
            return false;
            }
            if (Address == "") {
            alert("Enter Valid Address !!");
            return false;
            }
            if (City == "") {
            alert("Enter City Name!!");
            return false;
            }
            if (Contact_Number == "") {
            alert("Enter Valid Contact Number !!");
            return false;
            }else if(Contact_Number.length > 10 && Contact_Number.length < 10){
                alert("Enter Valid Contact Number !!");
                return false;
            }
}
        </script>
    </head>
    <body>
        <h1 align="center" style="color:white;">Tournament Registration</h1>
        <hr>
        <br>
        <div id="tour1">
        <form  name= "myForm" action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            
            <label for="tname">Team name :</label><br>
            <input type="text" id="tname" name="tname" value="" class="box"><br>
            <label for="logo">Logo :</label><br>
            <input type="file" name="logo" id="logo" ><br>
            

            <label for="cname">Coach Name :</label><br><br>
            <input type="cname" id="cname" name="cname" class="box"><br><br>
           
            
            <label for="address">Address :</label><br>
            <textarea rows="3" cols= "20" id="address" name="address" required class="box"> </textarea><br>
            <label for="city">City :</label><br>
            <input type="text" id="city" name="city" class="box"><br>
            <label for="phone">Contact No. :</label><br>
            <input type="text"  size="10" id="phone" name="phone" class="box"><br>
            
            <br>
            <input type="submit" value="Register" name="submit" class="box" id="magic">
            <!-- <input type="submit" value="Register" name="submit" class="box" id="magic"> -->
          </form> 
        <div>
    </body>
</html>


<?php
  
include "connection.php";

if(isset($_POST['submit']))
{
  
  $Team_Name = $_POST['tname'];
  $Coach_Name = $_POST['cname'];
  $Contact_Number = $_POST['phone'];
  $Address = $_POST['address'];
  $City =$_POST['city'];
  $file =$_FILES['logo'];
  $filename= $file['name'];
  $filepath= $file['tmp_name'];
  $fileerror= $file['error'];

  if($fileerror == 0)
  {
      $destfile='pic/'.$filename;
      move_uploaded_file($filepath, $destfile);

      $insertquery ="insert into tour1(Team_Name, Coach_Name, Contact_Number, Address, City, logo) values( '$Team_Name', '$Coach_Name' , '$Contact_Number' , '$Address', '$City' , '$destfile')";
  $query = mysqli_query($conn, $insertquery);
  if($query){
    ?>
    <script>
    alert('Inserted successfully');
    // window.location.href('live.php');
    </script>
    <?php
    header('location:live.php');
    
    ?>
    <?php
    
    }
    else{
        ?>
        <script>
        alert('Not inserted successfully');
        </script>
        <?php
    }

  }else{
        echo "No button has been clicked";
  }
  


  
}

  

?>