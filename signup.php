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

$user = $_POST['us'];
$email = $_POST['em'];
$contact = $_POST['con'];
$password = $_POST['pass'];

	$email = filter_var($email, FILTER_SANITIZE_EMAIL);

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)|| (!preg_match('/^[0-9]{10}+$/', $contact)) || (!preg_match("/^[a-zA-z]*$/", $user)) || 
	(!preg_match("/^[a-zA-z]*$/", $user))||(!preg_match("#[0-9]+#",$password))||(!preg_match("#[A-Z]+#",$password))||(!preg_match("#[a-z]+#",$password)) )
{
	echo ("<script LANGUAGE='JavaScript'>
		window.alert('Check your credentials for the following: \\n 1. Valid Email \\n 2. 10 Digit Contact Number \\n 3. 1 Uppercase, Lowercase and number.. ');
		window.location.href='start.php';
		</script>");
}
else{
	$sql = "SELECT * FROM users WHERE email='$email'";
	$res = mysqli_query($connect,$sql); 
	$count =  mysqli_num_rows($res);

	if($count==1)
	{
		echo ("<script LANGUAGE='JavaScript'>
		window.alert('Account Already Exists');
		window.location.href='start.php';
		</script>");
	}
	else
	{
		$c = "INSERT INTO users VALUES ('','$user','$email','$contact','$password')";
		mysqli_query($connect,$c);
		echo ("<script LANGUAGE='JavaScript'>
		window.alert('Account created');
		window.location.href='start.php';
		</script>");
	}
}

?>