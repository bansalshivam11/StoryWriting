<?php
session_start();
if(empty($_SESSION['kuchbhi']))
{
	// header("location:start.php");
	echo ("<script LANGUAGE='JavaScript'>
			window.location.href='start.php';
			</script>");
}
else
{    
	// session_start();
	$user = $_SESSION['kuchbhi'];
	$name = $_POST['user'];
	$contact = $_POST['contact'];
	$pass = $_POST['pass'];
    $newpass = $_POST['newpass'];
	$cnfpass = $_POST['confirmpass'];

    if(empty($newpass) && empty($cnfpass) )
    {
		$connect = mysqli_connect("localhost","root","");
		if(!$connect){
			die("DB Connection Failed" . mysqli_error($connect));
		}
		$select_db = mysqli_select_db($connect, "story");
		if (!$select_db)
		{
			die("DB select Faild" . mysqli_error($connect));
		}
		if( (!preg_match('/^[0-9]{10}+$/', $contact))){
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Check your contact ');
                window.location.href='settings.php';
                </script>");
        }
		else{
    $sql = "SELECT * FROM users WHERE email='$user' AND password='$pass'";
    $res = mysqli_query($connect,$sql);
    $count = mysqli_num_rows($res);
    if($count==1)
    {
        $change = " UPDATE users SET username= '$name', contact= $contact  WHERE email='$user';";
        $res = mysqli_query($connect,$change);
		if($res)
        {
			echo ("<script LANGUAGE='JavaScript'>
			window.alert('User Name and Contact Upadted');
			window.location.href='settings.php';
			</script>");
        }
    }
        else
        {
            echo ("<script LANGUAGE='JavaScript'>
			window.alert('Incorrect Password');
			window.location.href='settings.php';
			</script>");	        	
        }
	}

    
    }
	else if($newpass == $cnfpass)
    {
		if((!preg_match("#[0-9]+#",$newpass))||(!preg_match("#[A-Z]+#",$newpass))||(!preg_match("#[a-z]+#",$newpass)))
		{
			echo ("<script LANGUAGE='JavaScript'>
			window.alert('Incorrect Password Format!');
			window.location.href='settings.php';
			</script>");
		}
        else
		{
			$connect = mysqli_connect("localhost","root","");
		if(!$connect){
			die("DB Connection Failed" . mysqli_error($connect));
		}
		$select_db = mysqli_select_db($connect, "story");
		if (!$select_db)
		{
			die("DB select Faild" . mysqli_error($connect));
		}
		if( (!preg_match('/^[0-9]{10}+$/', $contact))){
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Check your contact ');
                window.location.href='settings.php';
                </script>");
        }
		else{
            $sql = "SELECT * FROM users WHERE email='$user' AND password='$pass'";
            $res = mysqli_query($connect,$sql);
            $count = mysqli_num_rows($res);
            if($count==1)
            {
                $change = " UPDATE users SET username= '$name', contact= $contact, password = '$newpass'  WHERE email='$user';";
                $res = mysqli_query($connect,$change);
		        if($res)
                {   
			        echo ("<script LANGUAGE='JavaScript'>
			        window.alert('User Name, Contact and Password Upadted');
			        window.location.href='settings.php';
			        </script>");
                }
            }
            else
            {
                echo ("<script LANGUAGE='JavaScript'>
			    window.alert('Incorrect Password');
			    window.location.href='settings.php';
			    </script>");	        	
            }
		}
			
        }
	}
	elseif ($newpass!=$cnfpass)
    {	    
	?>
	<Html>
		<body>
	<script>
	alert("Passwords Don't Match");
	</script>
	</body>
	</html>
	<?php
	header("location:settings.php");
	}
	
		
	
}

?>