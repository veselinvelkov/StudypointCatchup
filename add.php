<?php session_start(); ?> 

<?php
if(!isset($_SESSION['valid'])) {
   
	header('Location: login.php');
}
?>

<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//database connect
include_once("dbcon.php");

    //Form validation.
if(isset($_POST['Submit'])) {	
	$name = $_POST['name'];
	$qty = $_POST['qty'];
	$price = $_POST['price'];
	$loginId = $_SESSION['id'];
		
	// Echo problems
	if(empty($name) || empty($qty) || empty($price)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($qty)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		if(empty($price)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}
		
		//link to the previous page if there is an error if validation fails.
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//Here we must send the data to the database. 	
		$result = mysqli_query($mysqli, "INSERT INTO products(name, qty, price, login_id) VALUES('$name','$qty','$price', '$loginId')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='view.php'>View Result</a>";
	}
}
?>
</body>
</html>
