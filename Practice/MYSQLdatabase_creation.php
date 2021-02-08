<?php
//25 Creating a MYSQL database using PHP 
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

if(!$conn)
{
    die("Sorry we failed to connect:".mysqli_connect_error());
}
echo "Connection was successful <br>";

//Creating a Database
$sql="CREATE DATABASE GS";
$result= mysqli_query($conn, $sql);
//Check for the database creation success
if($result)
{
    echo"The db was created successfully";
}
else
{
    echo"The db was not created successfully beacuse of this errot--->".mysqli_error($conn);
}

//Here we are storing the result and then printing it in terms of true or false.
//If I will create database GS and then refresh it will show true and if I again refresh then it will show false as database has been created once so it won't create same database again and again.
?>