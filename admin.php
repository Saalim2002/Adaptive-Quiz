<?php
  include 'db.php';
  session_start();
?>

<?php

   $db = $con0;
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT password FROM adminlogin WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


      $count = mysqli_num_rows($result);



      if($count == 2) {

         $_SESSION['username'] = $username;

         header("location: adminhome.php");
      }else {

         $error = "Your Login Name or Password is invalid";
echo '<script>alert("Admin your Login Name or Password is invalid ! PLEASE TRY AGAIN")</script>';
      }
   }
?>
<html>

   <head>
      <title>Admin Page</title>

      <style>
@import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

.body{
	position: absolute;
	width: 1920;
	height:1080;
	background-image: url(https://img.freepik.com/free-photo/woman-typing-keyboard-laptop-account-login-screen-working-office-table-background-safety-concepts-about-internet-use_2034-1339.jpg?size=626&ext=jpg);
	background-size: cover;
}

.login{

position: absolute;
	height: 150px;
	width: 350px;
	padding: 10px;
margin-top:200px;
margin-left:200px;

}


.header{
	position: absolute;
	margin-top:170px;
margin-left:230px;

}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: black;
}


.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=submit]{
	width: 250px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}
      </style>

   </head>

   <body>
<div class="body"></div>
      <div class="header">
			<div>Admin<span> Login</span></div>
		</div>

               <form action = "" method = "post">
<div class="login">
                <input type = "text" name = "username" placeholder="username"/><br /><br />
                 <input type = "password" name = "password" placeholder="password"/><br/><br />
                  <input type = "submit" value = " Login"/><br /></div>
               </form>




   </body>
</html>
