<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";	
	$dbname	= "ouderdom";
 
	$conn = mysqli_connect($servername, $username, $password,$dbname);


	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if (mysqli_query($conn, $sql)) {
		}
		else{
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn); 	 
		}
	

	$db = new mysqli('localhost','root','','ouderdom');

		$id = $db->escape_string($_POST["id"]);
		$name = $db->escape_string($_POST["name"]);
		$birthday = $db->escape_string($_POST["birthday"]);
		$height = $db->escape_string($_POST["height"]);
	//	$sql = "UPDATE tabel1 SET ('".$_POST["name"]."','".$_POST["birthday"]."','".$_POST["height"]."'");
		$query = "update tabel1 set name='$name', birthday='$birthday', height='$height' where id=$id";
		$result = $db->query($query);
			
	} 
header("location: todo2.php")
	?>