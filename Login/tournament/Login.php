<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="register_style.css" type="text/css">
    <title>Tournament Registration</title>
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
            } else if (Contact_Number.length > 10 && Contact_Number.length < 10) {
                alert("Enter Valid Contact Number !!");
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="main" style="margin-top:150px;">
        <div class="register">
            <h1 align="center">Tournament Registration</h1>
            <hr>


            <form name="myForm" id="register" action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

                <label style="margin-left:0px; padding-bottom: 60px;" for="tname">Team name :</label><br>
                <input type="text" id="name" name="tname" value="" class="box" required><br>
                <br>

                <label style="margin-left:0px; padding-bottom: 60px;" for="logo">Logo :</label><br>

                <input style=" background-color:rgb(5, 58, 5);" id="submit" type="file" name="logo" id="logo" required>
                <br>
                <br>


                <label style="margin-left:0px; padding-bottom: 60px;" for="cname">Coach Name :</label><br>
                <input type="cname" id="name" name="cname" required class="box"><br>

                <br>
                <label style="margin-left:0px; padding-bottom: 60px;" for="address">Address :</label><br>
                <input type="text" rows="3" id="name" cols="20" id="address" name="address" required class="box"><br><br>
                <label style="margin-left:0px; padding-bottom: 60px;" for="city">City :</label><br>
                <input type="text" id="name" name="city" class="box" required><br><br>
                <label style="margin-left:0px; padding-bottom: 60px;" for="phone">Contact No. :</label><br>
                <input type="text" id="name" size="10" id="phone" name="phone" class="box"><br><br>

                <br>
                <input type="submit" value="Register" id="submit" name="submit" class="box" id="magic">
            </form>
        </div><!-- end register-->


    </div><!-- End main-->
</body>

</html>


<?php

include "connection.php";

if (isset($_POST['submit'])) {

    $Team_Name = $_POST['tname'];
    $Coach_Name = $_POST['cname'];
    $Contact_Number = $_POST['phone'];
    $Address = $_POST['address'];
    $City = $_POST['city'];
    $file = $_FILES['logo'];
    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    if ($fileerror == 0) {
        $destfile = 'pic/' . $filename;
        move_uploaded_file($filepath, $destfile);

        $insertquery = "insert into tour1(Team_Name, Coach_Name, Contact_Number, Address, City, logo) values( '$Team_Name', '$Coach_Name' , '$Contact_Number' , '$Address', '$City' , '$destfile')";
        $query = mysqli_query($conn, $insertquery);
        if ($query) {
?>
            <script>
                alert('Inserted successfully');
                // window.location.href('live.php');
            </script>
            <?php
            header('location:live.php');

            ?>
        <?php

        } else {
        ?>
            <script>
                alert('Not inserted successfully');
            </script>
<?php
        }
    } else {
        echo "No button has been clicked";
    }
}



?>