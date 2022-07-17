<?php

require ('connection.inc.php');
require ('functions.inc.php');
$msg = '';
if(isset($_POST['submit'])){
    $username = get_safe_value($con,$_POST['username']);
    $password = get_safe_value($con,$_POST['password']);
    $sql = "select * from admin_users where username = '$username' and password='$password'";
    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);
    if($count>0){
        $_SESSION['ADMIN_LOGIN'] = 'yes';
        $_SESSION['ADMIN_USERNAME'] = '$username';
        header('location:admin/categories.php');
        die();
    }else{ ?>

    <script>
         alert ("Please Enter Correct login details");
    </script>
    
    <?php
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart-Indian Football Hub</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="images\favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images\favicon-16x16.png">
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="shop_index.html"><img src="images\logo1.png" alt="" width="75px"></a>
                </div>
                <nav>
                    <ul>
                    <li><a href="shop_index.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li class="dropdown"><a href="account.php">Account</a></li>
                            
                    </ul>
                </nav>
                <a href="cart.php"><img src="images/cart.png" alt="" width="30px" height="30px"></a>
            </div>

        </div>

        <!-- accountpage -->
        <div class="account-page">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img src="images\1818052 (1).png" alt="" width="100%">
                    </div>
                    <div class="col-2">
                        <div class="form-container">
                            <div class="form-btn">
                                <span onclick="login()">Login</span>
                                <span onclick="register()">Register</span>
                                <hr id="indicator">
                            </div>

                            <form id="loginform" method="POST">
                                <input type="text" placeholder="username" name="username" required>
                                <input type="password" placeholder="password" name="password" required>
                                <button type="submit" name="submit" class="btn" >Login</button>
                                <a href="">Forgot Password</a>
                            </form>
                            <?php echo $msg;?>

                            <form id="regform" >
                                <input type="text" placeholder="username">
                                <input type="email" placeholder="email">

                                <input type="password" placeholder="password">
                                <button type="submit" class="btn" >Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- footer? -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3> Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="footer-col-2">
                    <img src="images\logo1.png" alt="" width="100px">
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="footer-col-3">
                    <h3> Lorem, ipsum dolor.</h3>
                    <ul>
                        <li>blog1</li>
                        <li>blog1</li>
                        <li>blog1</li>
                        <li>blog1</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3> Social Media</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>instagram</li>
                        <li>Youtube</li>
                        <li>Pinterest</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright @2021 #Team15</p>
        </div>
    </div>


    <script>
        var loginform = document.getElementById("loginform");
        var regform = document.getElementById("regform");
        var indicator = document.getElementById("indicator");


        function register() {
            regform.style.transform = "translateX(0px)";
            loginform.style.transform = "translateX(0px)";
            indicator.style.transform = "translateX(100px)";
            
        }
        function login() {
            regform.style.transform = "translateX(300px)";
            loginform.style.transform = "translateX(300px)";
            indicator.style.transform = "translateX(0px)";
            
        }
    </script>
</body>

</html>