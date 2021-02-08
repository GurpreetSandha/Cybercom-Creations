<?php
//Creating a table in MySQL using PHP

$servername="localhost";
$username="root";
$password="";
$database="GS";

$conn=mysqli_connect($servername,$username,$password,$database);
 
if(!$conn)
{
die("Sorry we failed to connect".mysqli_error());
}
else{
    echo"Connection was successfull<br>";
}
//Create a table in DB
$sql="CREATE TABLE `phptrip` ( `Sr No` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `trip Dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`Sr No`))";
//copy from previous program

$result= mysqli_query($conn, $sql);
//Check for the database creation success
if($result)
{
    echo"The table was created successfully";
}
else
{
    echo"The table was not created successfully beacuse of this errot--->".mysqli_error($conn);
} 
-----------------------------------------------------------------------------------------
?>