<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <center>
    <form method="post" id="my_form" action="process.php">
		<br>First name:<br><br>
		<input type="text" name="first_name">
		<br><br>
		Last name:<br><br>
		<input type="text" name="last_name">
		<br><br>
		City name:<br><br>
		<input type="text" name="city_name">
		<br><br>
		Email Id:<br><br>
		<input type="Email" name="Email">
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>
</center>

<script>
	const form = document.getElementById('my_form');
	
	form.reset();
	
	</script>

</body>
</html>