<?php
$servername="localhost";
$username="root";
$password="";
$dbname="trendy food unlock";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	//echo "connect successfully";
}
else 
{
	die("Connection failed because".mysqli_connect_error());
}

?>