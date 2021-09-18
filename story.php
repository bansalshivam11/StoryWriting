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
    $user = $_SESSION['kuchbhi'];
    $title = $_POST['title'];
    $story = $_POST['story'];
	$category = $_POST['category'];

    $connect = mysqli_connect("localhost","root","");
			if(!$connect){
				die("DB Connection Failed" . mysqli_error($connect));
			}
			$select_db = mysqli_select_db($connect, "story");
			if (!$select_db)
			{
				die("DB select Faild" . mysqli_error($connect));
			}

			$sql = " INSERT INTO posts VALUES('','$story','$title', '$category')";
			$res = mysqli_query($connect,$sql);
            if($res){
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('posted!!');
                window.location.href='create.php';
                </script>");
                }
}
?>