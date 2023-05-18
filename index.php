<html>
<head>
	<title>My App</title>
</head>
<body>
	<h1>My App</h1>
	<form method="post" action="process.php">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" required>
		<br>
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required>
		<br>
		<button type="submit">Submit</button>
	</form>
	<form method="post" action="search.php">
		<label for="search">Search:</label>
		<input type="text" id="search" name="search">
		<input type="submit" value="Submit">
	</form>
</body>
</html>
