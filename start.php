<?php
session_start();
if(empty($_SESSION['kuchbhi']))
{

?>

<html>
<head>
<title>Reader's Choice - Login/Sign Up</title>

<style>
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
  background-color: #fff ;
  color: #555;
  text-align: center;
  font-size: 15px;
  border-radius: 6px;
  border: 1px solid #ccc;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 100%;
  left: 50%;
  margin-left: -8px;
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
  border: 6px;
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
body
{
margin:0px;
overflow-x:hidden;
overflow-y:hidden;
}
#footer
{
width:100%;
background-size:100% 100%;
height:100%;
background-image:url("https://static.wixstatic.com/media/4700cf_06e2dbb7e3b44742bc715eed9e3231a4~mv2.jpeg");
font-size:180%;
font-family:Arial;
color: #333333;
padding-top:2%;
padding-left:4%;
float:left;

}
#forms
{
    padding: 12px 12px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type=submit] 
{
    width:20%;
    background-color:#ff3333;
    color: white;
	font-weight:bold;
    padding: 10px 2px;
    margin: 8px 0;
    border: 1px solid #4d4d4d;
    border-radius: 4px;
    cursor: pointer;
}
</style></head>
<body>
<form action="signup.php" method="POST">
<div id="footer">Create an Account<br><br>

<input size="30" id="forms" type="text" required placeholder="Full Name" name="us"><br>

<input size="30" id="forms" type="text" required placeholder="Email" name="em"><br>

<input size="30" id="forms" type="text" required placeholder="Contact" name="con"><br>

<div class="popup" onclick="myFunction()"><input size="30" id="forms" type="password" required placeholder="Password" name="pass">
<span class="popuptext" id="myPopup">Password must contain:<br>1 Upper Case Letter<br>1 Lower Case Letter<br>1 Number</span></div><br>

<input type="submit" value="Create Account">
</form>

<h3>Login Here</h3>
<form action="login.php" method="post">
<input size="30" id="forms" type="text" name="email" placeholder="Email" required><br>
<input size="30" id="forms" type="password" name="pass" placeholder="Password" required><br>
<input type="submit" value="Login"></div>
</form>
<script>
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
</body>
</html>
<?php
}
else
{
	header("location:home.php");
}

?>