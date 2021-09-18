<?php
session_start();
if(empty($_SESSION['kuchbhi']))
{
	header("location:start.php");
}
else
{

?>
<html>
<head>
<title>Reader's Choice</title>
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
}
ul li
{
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
text-decoration:none;
color:white;
display:block;
}
ul li a:hover
{
background-color:red;
}
ul li ul li
{
display:none;
}
ul li:hover ul li
{
display:block;
}
body
{
margin:0px;
background:url('https://assets.entrepreneur.com/content/3x2/1300/20150903173413-books-shop-fair-library-used-bookshelf-literature-study-textbooks.jpeg');
background-size:cover;
background-repeat:no-repeat;
/* overflow:hidden; */
}
</style>
</head>

<body>
<div id="header">Reader'sChoice..</div>
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
    </li>
    <li><a href="create.php">Create</a></li>
    <li><a href="settings.php">Account Settings</a></li>
    <li><a href="logout.php">Logout</a></li>

</li>
</ul><br><br><br><br>
<center><img height="300" width="300" src="book1.jpg">&nbsp; &nbsp;
<img height="300" width="300" src="book2.jpg">&nbsp; &nbsp;
<img height="300" width="300" src="book3.jpg">&nbsp; &nbsp;
<img height="300" width="300" src="book4.jpg"></center>
</body>
</html>
<?php
}

?>