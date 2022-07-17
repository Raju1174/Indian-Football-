<?php include('nav_bar.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Bar</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
            /* margin-top: 12px; */
        }

        #myUL {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #myUL li a {
            border: 1px solid #ddd;
            margin-top: -1px;
            /* Prevent double borders */
            background-color: #f6f6f6;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block
        }

        #myUL li a:hover:not(.header) {
            background-color: rgb(211, 242, 247);
        }

        h2 {
            text-align: center;
            text-transform: uppercase;
            font-family: 'Poppins', sans-serif;
            background-color: rgb(223, 241, 247);
            display: block;
            margin-top: 10px;
            font-weight: bolder;
            font-size: 40px;
        }

        .btnclas {
            display: flex;
            /* flex-direction: column; */
            justify-content: center;
            margin: 0 70px;
        }

        input[placeholder] {
            text-align: center;
        }

        .body {
            /* display: flex;
            justify-content: center;
            align-items: center; */
            margin-top: 200px;
            margin-bottom: 400px;
        }

        h2 {
            display: inline-block;
            margin: auto;
            margin-left: 40vw;
        }
    </style>
</head>

<body onload="toggledown()">
    <div class="body">
    <h2>Search Indian Football Hub</h2>
    <hr>

    <input type="text" id="myInput" onkeyup="search()" onclick="toggledown()" onkeypress="normal()"
        placeholder="Search anything You want...." title="Type in a name">
    <div class="btnclas">
        <button type="button" onclick="normal()" class="btn btn-outline-primary">Search</button>
    </div>
    <ul id="myUL">
        <li><a href="..">Home</a></li>
        <li><a href="../TEMPLATE\history.html">About</a></li>

        <li><a href="../TEMPLATE\contactus.html">Contact us</a></li>
        <li><a href="../shop/">Shop</a></li>

        <li><a href="../shop\cart.php">Cart</a></li>
        <li><a href="../Login/">find Academy</a></li>
        <li><a href="../Login/">tournaments</a></li>
        <li><a href="../WT_PROJECT_1941027/playercomp.php">player comparison</a></li>
        <li><a href="../WT_PROJECT_1941027/teamcomp.php">team comparison</a></li>
        <li><a href="../TEMPLATE/Generalbody.html">General Body</a></li>
        <li><a href="../TEMPLATE\history.html">History </a></li>
        <li><a href="../WT_PROJECT_1941027\points table\table_points.html">Points table</a></li>
        <li><a href="../DBMS Project\TEMPLATE\Player&Coach_registration.html">Player and coach registration</a></li>
        <li><a href="../DBMS Project\TEMPLATE\grassroots.html">grassroots</a></li>
        <li><a href="../DBMS Project\TEMPLATE\futsal.html">Futsal</a></li>
        <li><a href="../DBMS Project\TEMPLATE\National_Centre_of_Excellence.html">National centre of excellence </a></li>
    </ul>
    </div>

    <script>
        function search() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }

        function toggledown() {
            let myul = document.getElementById('myUL');
            myul.style.display = "none";
        }

        function normal() {
            let myul = document.getElementById('myUL');
            myul.style.display = "block";
        }
    </script>
</body>
<?php include('footer.php'); ?>
</html>