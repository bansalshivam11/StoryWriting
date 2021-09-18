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
<title>Reader's Choice- Settings</title>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
input
{
padding:10px;
border-radius:5px;
}
#submit
{
width:23%;
    background-color: #ff3333;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size:120%;
    box-shadow:0px 1px 20px;
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
overflow-x:hidden;
}
#box
{
    padding: 12px 12px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-family:Arial;
    box-sizing: border-box;
}
#footer
{
    
font-size:200%;
font-family:Arial;
color: #333333;
}
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
/* popup css end */
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
    <li><a href="create.php">Create</a></li>
    <li><a href="settings.php">Account Settings</a></li>
    <li><a href="logout.php">Logout</a></li>

</li>
</ul>
<br><br><br><br>
<center>
<div id="footer">Change your settings</div><br>
<form action="update setting.php" method="post" enctype="multipart/form-data">
<input type="text" id="box" size="17" name="user" placeholder="New User Name">
<input type="text" id="box" size="17" name="contact" placeholder="Update Contact"><br>
<input type="password" id="box" size="35"  name="pass" required placeholder="Current Password"><br>

<div class="popup" onclick="myPopUp()">
    <input type="password" id="box" size="35" name="newpass" placeholder="New Password"><br>
<!-- <div class="popup" onclick="myFunction()">Click me to toggle the popup! -->
  <span class="popuptext" id="myPopup">Password must contain:<br>1 Upper Case Letter<br>1 Lower Case Letter<br>1 Number</span>
</div><br>

<input type="password" id="myInput" size="35" name="confirmpass" placeholder="Re-Enter New Password"><br>
<input type="checkbox" onclick="myFunction()">Show Password<br>

<input id="submit" type="submit" value="Submit"></form>
</center>
<script>
  function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myPopUp() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
</body>
</html>
<?php
 
}

?>