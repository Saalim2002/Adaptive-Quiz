<?php
include 'db.php';
session_start();
$conn = $con3;
$new_conn = $con4;
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

input
{
font-size:25px;
border-radius:10%;
font-family:cambria;
margin-left:500px;
margin-right:18px;
color:white;
background-color:Aquamarine;
}

input:hover
{
  background-color: Turquoise;
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

table {
  border:1 px solid black;
  width: 70%;
align:center;
font-family:Cambria;
margin-left:400px;
margin-top:40px;
}

th {
  padding-top: 12px;
  padding-bottom: 12px;
font-size:15px;
  text-align: center;
  background-color: DodgerBlue;
  color: white;
}
td {
  text-align: center;
  padding: 8px;
}
tr
{
  background-color: white;
}



</style>

<body>

<div class="topnav">


  <a class="active" href="adminhome.php">Home </a>
</div>

<ul>
  <li><a href="adminhome.php">Home</a></li>
  <li><a class="active" href="adminresult.php">View Result</a></li>

  <li><a href="logout.php">Logout</a></li>
</ul>
<form action="adminresult.php" method="POST">
<input type="submit" class=" w3-hover-green w3-btn w3-white w3-border" value="View Result" name="submit"></div>
</form>
</body>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST')
 if(isset($_POST["submit"]))

{

$sql = "SELECT * FROM userinfo";
if($result = mysqli_query($conn, $sql))
{
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
	 echo "<th>Username</th>";
                echo "<th>Email</th>";
                echo "<th>Score</th>";


            echo "</tr>";
            $i = 1;
        while($i <= mysqli_num_rows($result)){
          $username_query = "SELECT * FROM userinfo where id=$i";
          $password_query= "SELECT * FROM userinfo where id=$i";
          $print_score = "SELECT * FROM score_data where id=$i";
          $username_row= mysqli_query($conn,$username_query);
          $password_row =mysqli_query($conn,$password_query);
          $score_row = mysqli_query($new_conn,$print_score);
          $col1 = mysqli_fetch_assoc($username_row);
          $col2 = mysqli_fetch_assoc($password_row);
          $col3 = mysqli_fetch_assoc($score_row);
            echo "<tr>";
                echo "<td>" . $col1['username'] . "</td>";
                echo "<td>" . $col2['email'] . "</td>";
                echo "<td>" . $col3['score'] . "</td>";
            echo "</tr>";
            $i = $i+1;
        }
        echo "</table>";

    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    echo "ERROR: Could not able to execute $score. " . mysqli_error($new_conn);
} }

mysqli_close($conn);
mysqli_close($new_conn);
?>
</html>
