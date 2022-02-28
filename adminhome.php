<?php
include 'db.php';
session_start();
?><?php
$link = $con0;
?>
<?php
$msg= 'Welcome Admin ' . $_SESSION['username'] . ' Good to see you !';

echo "<script type='text/javascript'>alert('$msg');</script>";
?>
 <html>
<head>
<title>Admin Page</title>
</head>
<style>


body{
background:url('https://t4.ftcdn.net/jpg/04/39/13/37/360_F_439133763_FrLdhZsd5aGC23r9ATARuKJBr8ifZjIe.jpg');
background-size:cover;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 20%;
  background-color: #f1f1f1;
  position:fixed;
font-size:20px;
font-family:cambria;
  height: 100%;
opacity:0.8;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #060548 ;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
.topnav {
  overflow: hidden;
  background-color: transparent;
width:100%;
float:right;

}

.topnav a {
  float: right;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
margin-left:20px;
font-family:cambria;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #f1f1f1;
  color: black;
}
.info
{  color: white;
  text-align: left;
  text-decoration: none;
  font-size: 30px;
margin-left:350px;
font-family:cambria;
padding: 100px;
}

.name
{
 color: white;
  text-align: left;
  text-decoration: none;
  font-size: 30px;
margin-left:250px;
font-family:cambria;
}

</style>

<body>

<div class="topnav">

  <a class="active" href="adminhome.php">Home </a>
</div>

<ul>
  <li><a  class="active" href="adminhome.php">Home</a></li>
  <li><a href="adminresult.php">View Result</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>

<div class="info">

This is a adaptive quiz web application. The questions presented to the user <br> are selected on based of his skills. The logic behind the adaptiveness is very simple.<br>
Contributors :-<br>
<div class="name">Saalim Shaikh<br>
Avesh Momin<br>
Hassan Khan<br></div>


</info>
</body>
