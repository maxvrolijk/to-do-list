<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";	// database verbinden
	$dbname	= "ouderdom";
 
	$conn = mysqli_connect($servername, $username, $password,$dbname);


//controleer of de id in de url staat
	if(isset($_GET['id'])){
//als de id in de url staat ,Bouw een qeury om de juiste regel te  verwijderen
		$qeury = "DELETE FROM tabel1 where id=".$_GET['id'];
// voer de qeury uit
		mysqli_query($conn, $qeury);
	}
//ga terug naar overzicht
header("location: todo2.php");

 ?>