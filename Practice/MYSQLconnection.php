<?php
//24. Connecting to MYSQL database using PHP
echo "Welcome to the stage where we are ready to connect with database";
/*Ways to connect to a MYSQL database
1.MySQli extension
2.PDO*/

//Connecting to the database
$servername="localhost";
$username="root";
$password="dfg";

$conn=mysqli_connect($servername,$username,$password);

//Die if connection was not successfull

if(!$conn){
    die("Sorry we failed to connect:".mysqli_connect_error());
}

echo "Connection was successfull";