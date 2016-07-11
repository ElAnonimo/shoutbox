<?php include 'database.php'; ?>
<?php
	// Create select query
	$query = "select * from shouts order by id desc";
	$shouts = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>JS Shoutbox</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-2.2.3.js"></script>
		<script src="js/script.js"></script>
	</head>
	
	<body>
		<div id="container">
			<header>
				<h1>JS Shoutbox</h1>
			</header>
			<div id="shouts">
				<ul>
					<?php while($row = mysqli_fetch_assoc($shouts)) : ?>				<!-- fetch associative array for $shouts -->
					<li><?php echo $row['name']; ?>: <?php $row['shout']; ?> [<?php echo $row['date']; ?>]</li>
					<?php endwhile; ?>
				</ul>
			</div>
			<footer>
				<form>
					<label>Name </label>
					<input type="text" id="name"></input>
					<label>Shout text </label>
					<input type="text" id="shout"></input>
					<input type="submit" id="submit" value="Shout"></input>
				</form>
			</footer>
		</div>
	</body>
</html>