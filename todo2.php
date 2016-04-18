<?php
	$servername = "localhost";
	$username = "root";
	$password = "";	
	$dbname	= "ouderdom";
 
	$conn = mysqli_connect($servername, $username, $password,$dbname);


	$qeury = "SELECT * FROM tabel1";

	$result = $conn->query($qeury);
	$members = $result->fetch_all(MYSQLI_ASSOC);
	mysqli_close($conn);
?>
<!doctype html>
<html>
<head>
	<title>to do list</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="todo.css">
</head>

<body>
	<form method="post">
	<h1>lijst mogelijke verkrachters</h1>
	<table border="1">
<?php foreach ($members as $onemember){ ?>
<?php $listitem = $onemember ?>
		<tr>
			<td><?php echo $onemember['id']; ?></td>
			<td><?php echo $onemember['name']; ?></td> 
			<td><?php echo $onemember['birthday']; ?> </td>
			<td><?php echo $onemember['height']; ?> </td>
			<td><a href="todo_add_page" >add?</a></td>
			<td><a href="todo_delete.php?id=<?php echo $onemember['id'] ?>" >delete?</a></td>
			<td><a href="todo_edit_page.php?id=<?php echo $onemember['id'] ?>" >edit?</a></td>
		</tr>

<?php } ?>
	</table></form>
</body>
</html>
	