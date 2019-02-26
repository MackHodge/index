<?php 
$host ='localhost' ;
$user ='root';
$pass= '1234'; 
$db ='product'; 

$con=mysqli_connect($host,$user,$pass,$db) ;
if($con) 
	echo "connected to product";

$sql="insert into tools1 (Tape Measure ,Small Tape Measure) values ('25 inch ', '25 inch')" ;
$query=mysqli_query($con,$sql); 
if($query)
	echo "Data inserted successfully my dude";
?>