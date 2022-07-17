<!doctype html>
<html>
    <head>
        <title>Tournament</title>
         <link href="Tournament.css" rel="stylesheet" type="text/css">
    </head>
    <body id="maintheme" style="background-image: url('unnamed.jpg'); image-width:100%; height:800px; background-repeat:no-repeat;">
        <h1 align="Center">Match</h1>
        <br>
        <hr>
        <div id="firstcircle">
           
            
            
            
            
            
           
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
        <div id="secondcircle">
                <h1 style="font-size:140px; color:blue; margin-top:-1px;">VS</h1>
        </div>
        <div id="thirdcircle">
        
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


    </body>
</html>