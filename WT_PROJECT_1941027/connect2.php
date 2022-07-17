<?php


$servername="localhost";
$username="root";
$password="";
$dbname="footballers";

$conn=mysqli_connect($servername,$username,$password,$dbname);
//$conn = mysqli_connect("localhost","root","kalieshwar%25","footballers");
//$conn1 = mysqli_connect('localhost','root','kalieshwar%25','footballers');

if(!$conn)
{
    die("Connection failed:" . mysqli_connect_error());
}





if (isset($_POST['compare'])) 
{

    $n1 = $_POST['name1'];
    $n3 = trim($n1);
    $n2 = $_POST['name2'];
    $n4 = trim($n2);


echo '<table id="myTable" style="float:left">
                <tr class="header">
                    <td style="width:25%;">Name</td>
                    <td style="width:25%;">Age</td>
                    
                </tr>';
            
            
            $sql1="SELECT name,age FROM player_details WHERE name = '$n3'";
            $sql2="SELECT name,age FROM player_details WHERE name = '$n4'";
            $r=mysqli_query($conn,$sql1);
            $s=mysqli_query($conn,$sql2);

            while ($row = mysqli_fetch_assoc($r))
            {
                    $field1name = $row["name"];
                    //$mydate=getdate(date("U"));
                   // echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]"2
                    $field2name = $row["age"];
                    // $field3name = $row["team"];
                    // $field4name = $row["transfer_value"];

                    echo '<tr> 
                        <td>'.$field1name.'</td> 
                        <td>'.$field2name.'</td> 
                        
                    </tr>';
            }

            while ($row = mysqli_fetch_assoc($s))
            {
                    $field1name = $row["name"];
                    //$mydate=getdate(date("U"));
                   // echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]"2
                    $field2name = $row["age"];
                    // $field3name = $row["team"];
                    // $field4name = $row["transfer_value"];

                    echo '<tr> 
                        <td>'.$field1name.'</td> 
                        <td>'.$field2name.'</td> 
                        
                    </tr>';
            }
           
        echo '</table>';
    }

 ?>