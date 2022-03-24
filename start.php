<?php
  include'db.php';
?>
<?php
session_start();
$msg= 'Welcome ' . $_SESSION['username'] . ' Good to see you !';

echo "<script type='text/javascript'>alert('$msg');</script>";

?>
<?php
$conn = $con1;
$username = $_GET['username'];
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($conn,$query));


?>
<html>
<head>
	<title>Adaptive Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/style_start.css">
</head>
<body >

	<header>
	</header>

	<main>
			<div class="container">
				<center><h1>Adaptive Quiz</h1></center>
				<hr>
				<p>
					<center><h3> This is a multiple choise quiz to test your Knowledge.</h3></center>
				</p>
				<ul>
					<li><strong>Number of Questions:</strong><?php echo $total_questions; ?> </li><br>
					<li><strong>Type:</strong> Multiple Choice</li><br>
					<li><strong> Based on Adaptive Mode</strong></li><br>
					<li><strong>Contains questions from both easy and hard level</strong></li><br>



				</ul>
				<center><button class="start">
				<a href="quiz.php?n=1&i=1&c=0&username="<?php $username;?> >Click here to Start</a>
				</button></center>

			</div>

	</main>



</body>
</html>