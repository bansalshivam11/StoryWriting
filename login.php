<?php

$connect = mysqli_connect("localhost","root","");
if(!$connect){
	die("DB Connection Failed" . mysqli_error($connect));
}
$select_db = mysqli_select_db($connect, "story");
if (!$select_db)
{
	die("DB select Faild" . mysqli_error($connect));
}

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
$res = mysqli_query($connect,$sql);
$count = mysqli_num_rows($res);

if($count==1)
{
	session_start();
	$_SESSION['kuchbhi'] = $email;
	header("location:home.php");
}
else
{
	?>
	<Html>
	<script>
	alert("Incorrect Email or Password");
	</script></html>
	<?php
	header("location:start.php");	
}
?>