
<html lang="en">
    <head>
        <title>Soccer Live Score</title>   
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


  <style>
      .btn{
          padding: 20px;
      }
  </style>
    </head>
    
    <body>
        <div class="container">
            <h1>ScoreBoard</h1>
            <div class="title-box">
                <p id="elapsed">0'</p>
            </div>
            <div class="title-box">
                <div class="team">
                <?php
                include 'connection.php';
               
                $selectquery = "select * from tour1";
             
                $query = mysqli_query($conn,$selectquery);
               
                while($result= mysqli_fetch_array($query))
                {  
                    ?>
                    <img src= " <?php echo $result['logo']; ?>" width="200px" height="200px"> 
                   <?php echo $result['Team_Name']."\n"; ?>
                   <?php echo $result['Coach_Name']; ?>
                    <?php

                   
                }
                mysqli_close($conn);
                ?>
                
            </div>
                <p id="goals">0  -  0</p>
                <div class="team">
                <?php
                include 'connection.php';
                $rand=rand(1,4);
                $selectquery1 = "select * from tour2_random where id=$rand";
             
                $query1= mysqli_query($conn,$selectquery1);
              
               
                while($result1= mysqli_fetch_array($query1))
                {  
                    ?>
                    <img src= " <?php echo $result1['pic']; ?>" width="400px" height="400px"> 
                    <br>
                   <?php echo $result1['Team_Name']."\n"; ?>
                   <br>
                   <?php echo $result1['Coach_Name']; ?>
                    <?php

                   
                }
                mysqli_close($conn);
                

                
                
                 
            ?>
                </div>
                 
            </div>
            <hr>
            <div id="matchTable" class="matches-table">

            </div>
            <a href="#" class="btn btn-info" role="button">Play</a>
        </div>
         <script src="main.js"></script>
    </body>
</html>

