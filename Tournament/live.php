
<html lang="en">
    <head>
        <title>Matches</title>   
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
            <h1>Match</h1>
            <div class="title-box">
               
            </div>
            <div class="title-box" >
                <div class="team" style=
                "border:2px solid white; width:200px ;height:200px;">
                <?php
                include 'connection.php';
               
                $selectquery = "select * from tour1";
             
                $query = mysqli_query($conn,$selectquery);
               
                while($result= mysqli_fetch_array($query))
                {  
                    ?>
                    <img src= " <?php echo $result['logo']; ?>" style="width:100%; height:95%"> 
                    <div style="font-style:10px; margin-top:15px;">
                   <?php echo $result['Team_Name']."\n"; ?>
                   </div>
                   
                    <?php

                   
                }
                mysqli_close($conn);
                ?>
                
            </div>
                <p id="goals">Vs</p>
                <div class="team" style=
                "border:2px solid white; width:200px ;height:200px;">
                <?php
                include 'connection.php';
                
                $rand=rand(1,4);
                $selectquery1 = "select * from tour2_random where id=$rand";
             
                $query1= mysqli_query($conn,$selectquery1);
              
               
                while($result1= mysqli_fetch_array($query1))
                {  
                    ?>
                    <img src= " <?php echo $result1['pic']; ?>" style="width:100%; height:95%"> 
                    <br>
                    <div style="font-style:10px; margin-top:20px;margin-top:15px;">
                   <?php echo $result1['Team_Name']."\n"; ?>
                   <br>
                   </div>
                   
                    <?php

                   
                }
                mysqli_close($conn);
                
                

                
                
                 
            ?>
                </div>
                 
            </div>
            <hr>
            <div id="matchTable" class="matches-table">

            </div>
            <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
            <a class="btn btn-info" role="button" href="counter.php" name="submit">Play</a>
            </form>
        </div>
         <script src="main.js"></script>
    </body>
</html>

