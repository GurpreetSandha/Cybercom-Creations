<?php

//27. Insert data into mysql using PHP
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
//Add a new trip to the trip table in the database 
$sql="INSERT INTO `phptrip` (`name`, `trip Dest`) VALUES ('Gurpreet', 'Ahmedabad') ";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo"The record has been inserted successfully";
}
else
{
    echo"The record was not successfully inserted beacuse of this error--->".mysqli_error($conn);
} 

?>