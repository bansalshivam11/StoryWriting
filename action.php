<?php
session_start();
if(empty($_SESSION['kuchbhi']))
{
	header("location:start.php");
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

?>

<html>
<head>
<title>Reader's Choice- Action Story</title>
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
#story
{
font-size:125%;
padding-left: 2%;
width:150%;
color: white;
height:210%;
}
#logo
{
position:absolute;
top:1%;
left:3%;
}
ul
{
  position: relative;
font-family:arial;
color:white;
margin:0px;
padding:0px;
list-style:none;
}
ul li
{
  z-index: 1;
  position: relative;
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
body
{
margin:0px;
background:url('https://assets.entrepreneur.com/content/3x2/1300/20150903173413-books-shop-fair-library-used-bookshelf-literature-study-textbooks.jpeg');
background-size:cover;
background-repeat:no-repeat;
overflow-x:hidden;
}

/* Modal Content */
.modal-content {
  position: relative;
  
  margin: auto;
  padding: 0;
  border: 2px solid #ccc;
    border-radius: 5px;
    font-size :17px;
    font-family:Arial;
  width: 80%;
  
}

.modal-header {
  padding: 2px 8px;
  background-color: #E9EBEE;
  color: black;
  text-align: center;
  font-size :17px;
  font-family:Arial;
}

.modal-body {padding: 2px 8px;

  background-color: #E9EBEE;
  color: black;
  text-align: center;
  font-size :17px;
  font-family:Arial;
}
</style>
</head>

<body>
<div id="header">Reader's Choice..</div>
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
</ul><br><br><br>

<div class="list">

</div>


<!-- Trigger/Open The Modal -->
  <?php
               
    $sql = "SELECT * from posts WHERE category='Action'";
    if($res = $connect->query($sql)){
    while($row = $res->fetch_row()){
      
      
      
      ?>
     <br>

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      
      <div id="content">
        <?php
          
          $sql1 = "SELECT title FROM posts where title = '$row[2]'";
          $res1 = $connect->query($sql1);
          $row1 = $res1->fetch_assoc();

          echo $row1["title"];
        ?>
    </div>
    <div class="modal-body">
      <p>
      <?php
          
          $sql2 = "SELECT story FROM posts where title = '$row[2]'";
          $res2 = $connect->query($sql2);
          $row2 = $res2->fetch_assoc();

          echo $row2["story"];
        ?>
      </p>
    </div>
  </div>
</div>
          
  <?php        
    }
  }
  ?>

</body>
</html>
<?php
}
?>