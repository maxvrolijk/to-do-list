
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";	
	$dbname	= "ouderdom";
 
	$conn = mysqli_connect($servername, $username, $password,$dbname);

	if ($_SERVER['REQUEST_METHOD'] == 'post'){
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
			echo "Connected successfully";
	$qeury = "INSERT INTO tabel1 (`name`, `gender`, `height`)
		VALUES ('".$_POST["name"]."','".$_POST["birthday"]."','".$_POST["height"]."')";
		if (mysql_num_rows($qeury)){}
		$qeury = "INSERT INTO tabel1 (`name`, `gender`, `height`)
		VALUES ('".$_POST["name"]."','".$_POST["birthday"]."','".$_POST["height"]."')";
if(isset($_GET['recordId'])){
	$id = mysql_real_escape_string($_GET['recordId']);}
	$sql	 = "SELECT * FROM tabel1 ORDER BY id DESC";}

	$qeury = mysql_query($sql) or die(mysql_error());
	$sql	 = "DELETE FROM tabel1 WHERE id = {$id}" 	
?>

<!doctype html>
<html>
<head>
	<title>to do list</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="todo.css">
</head>

<body>
		<h1>lijst</h1>
			

			<table border="1">
<a href="todo.php?recordId= <?php echo $qeury['id']; ?> ">Delete</a>
	<form method="post">

		<input type="text" name="id"></br>
		<input type="text" name="name"></br>
		<input type="date" name="birthday"></br>
		<input type="text" name="height"></br>
		<input type="submit" value="add"></br>	

	</form>
</table>
		<table border="1">
		<form method="get">
<?php foreach ($members as $onemember){ ?>
<?php  	if (mysql_num_rows($sql)){?>
<?php while ($sql = mysql_fetch_assoc($sql)) { ?>
		<tr>
			<td><?php echo $onemember['id']; ?></td>
			<td><?php echo $onemember['name']; ?></td> 
			<td><?php echo $onemember['birthday']; ?> </td>
			<td><?php echo $onemember['height']; ?> </td>
		</tr>
<?php } ?>
<?php } ?>
<?php } ?>
</form>
	</table>
</body>
</html> 