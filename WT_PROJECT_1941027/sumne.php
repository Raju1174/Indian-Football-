<?php
$servername="localhost";
$username="root";
$password="password";
$dbname="teams";

$conn=mysqli_connect($servername,$username,$password,$dbname);
//$conn = mysqli_connect("localhost","root","kalieshwar%25","footballers");
//$conn1 = mysqli_connect('localhost','root','kalieshwar%25','footballers');

if(!$conn)
{
    die("Connection failed:" . mysqli_connect_error());
}
else
{
	echo "string";
}