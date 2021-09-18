<?php
session_start();
if(empty($_SESSION['kuchbhi']))
{
	header("location:start.php");
}
else
{
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Reader's Choice - Create Your Own Story</title>
</head>

<style>
#header
{
height:12%;
width:100%;
background-color:#333333;
color:white;
padding-left:11%;
padding-top:1%;
font-size:350%;
font-family:Brush Script MT;
}
#create
{
position: absolute;
top:20%;
left:28%;
color: #000000;
font-size:125%;
font-family:arial;
height:50%;
width:50%;
}
#logo
{
position:absolute;
top:1%;
left:3%;
}
ul
{
font-family:arial;
color:white;
margin:0px;
padding:0px;
list-style:none;
z-index: 1;
}
ul li
{
    
    z-index: 1;
float:left;
width:200px;
height:40px;
background-color:black;
opacity:0.8;
line-height:40px;
text-align:center;
font-size:20px;
margin-right:2px;
}
ul li a
{
    
    z-index: 1;
text-decoration:none;
color:white;
display:block;
}
ul li a:hover
{
    
    z-index: 1;
background-color:red;
}
ul li ul li
{
    
    z-index: 1;
display:none;
}
ul li:hover ul li
{
    
    z-index: 1;
display:block;
}
#submit
{
width:30%;
    background-color:#b30000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
body
{
margin:0px;
background:url('https://assets.entrepreneur.com/content/3x2/1300/20150903173413-books-shop-fair-library-used-bookshelf-literature-study-textbooks.jpeg');
background-size:cover;
background-repeat:no-repeat;
overflow:hidden;
}
.main
{
	width:300px;
	height:250px;
	border:1px solid black;
	margin-top:10px;
}

.img
{
	width:90%;
	margin-left:5%;
	height:150px;
	border:1px solid black;
	margin-top:15px;
}

.pic
{
	width:100%;
	height:100%;
}
#area
{
	
    padding: 10px 10px;
    margin: 3px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 5px;
	font-family:Arial;
    overflow: scroll;
}
</style>
</head>

<body>
<div id="header">Reader'sChoice.. </div>
<div id="logo"><img height="85" width="80" src="logo5.png"></div>
<div id="sh1"></div>
<ul>
<li><a href="home.php">Home</a></li>
    <li>Discover
    <ul>
    <li><a href="adventure.php">Adventure</a></li>
    <li><a href="horror.php">Horror</a></li>
    <li><a href="sci-fi.php">Sci-Fi</a></li>
    <li><a href="action.php">Action</a></li>
    <li><a href="romantic.php">Romantic</a></li>
    <li><a href="other.php">Other</a></li>
    </ul>

    <li><a href="create.php">Create</a></li>
    <li><a href="settings.php">Account Settings</a></li>
    <li><a href="logout.php">Logout</a></li>
</li>
</ul><br><br>

<center><div id="create"><br><br><br>
<form action="story.php" method="post" enctype="multipart/form-data">
Select your Category:
<select name="category" required>
	<option value="">Choose</option>
	<option value="Action">Action</option>
	<option value="Horror">Horror</option>
	<option value="Adventure">Adventure</option>
	<option value="Sci-Fi">Sci-Fi</option>
	<option value="Romantic">Romantic</option>
	<option value="Other">Other</option>
</select><br><br>
Post Your Story<br>
<input id="area" name = "title" required placeholder="Title of the story"><br>
<textarea id="area" name="story" required placeholder="Enter your story here.." rows="12" cols="50"></textarea><br>
<!-- Image<input type="radio" name="ftype" value="image">
Video<input type="radio" name="ftype" value="video"><br><br> -->
<!-- <input type="file" name="ufile"><br><br> -->
<input id="submit" type="submit" value="Post">
</form></div></center>

</div>
</body>
</html>