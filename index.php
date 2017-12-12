<?php session_start(); ?> <!--our session starts here -->
<html>
<head>
	<title>CRUD</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="header" style="color: brown">
		CRUD 
	</div>
	<?php
	if(isset($_SESSION['valid'])) {	//if we find the user in the db the session is valid		
		include("dbcon.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>
				
		Welcome <b><?php echo $_SESSION['name'] ?></b> ! <a href='logout.php'>Logout</a><br/>
    <!--Welkome is in HTML, we echo the name of the user via PHP. -->
		<br/>
    <hr>
		<a href='view.php'>View and Add Products</a>
		<br/><br/>
	<?php	
	} else {
		echo "You must be logged in to view this page.<br/><br/>";
		echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>";
	}
	?>
	
</body>
</html>
