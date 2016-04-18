<?php  
	$servername = "localhost";
	$username = "root";
	$password = "";	// database verbinden
	$dbname	= "ouderdom";
 
	$conn = mysqli_connect($servername, $username, $password,$dbname);

//controleer of de id in de url staat



//als de id in de url staat ,Bouw een qeury om de juiste regel te  ophalen
	if(isset($_GET['id'])){
		$edit = "SELECT * FROM tabel1 WHERE id=".$_GET['id'];

//als de regel in de database staat dan moet je dus zorgen op 1 of andere manier dat de regel uit de database in een variable komt te staan.
	if($result =mysqli_query($conn,$edit)){
		$listitem = $result->fetch_assoc();
	}
	else{
// als dit niet het geval is gaan we weer terug naar het overzicht
	header("location: todo2.php");
		}
	}

//in html een form maken waar we dit kunnen aanpassen
?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>

<body>
	<form action="todo_edit.php" method="post">
		<table border="1">
			<tr>
				<td><input type="numeric" value="<?php echo $listitem['id'] ?>" maxlength="2" name="id"></td>
				<td><input type="text" value="<?php echo $listitem['name'] ?>" name="name"></td> 
				<td><input type="date" value="<?php echo $listitem['birthday'] ?>" name="birthday"></td>
				<td><input type="numeric" value="<?php echo $listitem['height'] ?>" maxlength="3" name="height"></td>
				<td><a href="todo_edit.php" ><input type="submit" value="edit"></a></td>
			</tr>
		</table>
	</form>
</body>
</html>
