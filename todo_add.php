<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";	
	$dbname	= "ouderdom";
 
	$conn = mysqli_connect($servername, $username, $password,$dbname);


	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
			echo "Connected successfully";


		$sql = "INSERT INTO tabel1 (`name`, `gender`, `height`)
		VALUES ('".$_POST["name"]."','".$_POST["birthday"]."','".$_POST["height"]."')";

		if (mysqli_query($conn, $sql)) {
		}
		else{
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn); 	 
		}
	} 
header("location: todo2.php")
	?>
	