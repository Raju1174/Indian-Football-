<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "email_subscription";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


// Check connection
if($conn){
    ?>
    <script>
    // alert('Connection successfully');
    </script>
    <?php
    }
    else{
        ?>
        <script>
        // alert('Not Connected Successfully');
        </script>
        <?php

    }
?>