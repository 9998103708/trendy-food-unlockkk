<?php
include("connectiondb.php");
error_reporting(0);
?>
<?php
if(isset($_GET['submit']))
{
	$name=$_GET['name'];
	$email=$_GET['email'];
	$phone=$_GET['phone'];
	$msg=$_GET['msg'];

 $query="INSERT INTO meetup (name,email,phone,message) values ('$name','$email','$phone','$msg')";
	$ins_q=mysqli_query($conn,$query);
	if($ins_q)
	{
		echo "record Insert successfully";
	}
exit;
	$to='aalok@gmail.com';
	$subject='form submission';
	$message="name: ".$name."\n"."phone: ".$phone."\n"."wrote the following: "."\n"."\n".$msg;
	$headers="form: ".$email; 

	if(mail($to, $subject, $message, $headers))
	{
		//$query= "INSERT INTO meetup values ('$name','$email','$phone','$msg')";
		echo "<h1>sent successfully! Thank you ".$name.",We will contact you shortly!</h1>";
	}
	else
	{
		echo "Somthing went wrong!";
	}
}

?>