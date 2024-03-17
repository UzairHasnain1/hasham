<?php

include 'newcon.php';

$first_name = $_GET['first_name'];

$showquery = "SELECT * from users ";

$showdata = mysqli_query($conn,$showquery);

$arrdata = mysqli_fetch_array($showdata);

if(isset($_POST['btn'])){


    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city_name = $_POST['city_name'];
    $Email = $_POST['Email'];

$query = " update user set first_name='$first_name', last_name='$last_name', city_name='$city_name', email='$Email' where userid=$userid ";

$res = mysqli_query($conn,$query);

header('location:show.php');


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    
<center>
    <form method="post" id="myform">
		<br>First name:<br><br>
		<input name="first_name" value="<?php echo $arrdata['first_name']; ?>"/>
		<br><br>
		Last name:<br><br>
		<input name="last_name" value="<?php echo $arrdata['last_name']; ?>"/>
		<br><br>
		City name:<br><br>
		<input name="city_name" value="<?php echo $arrdata['city_name']; ?>"/>
		<br><br>
		Email Id:<br><br>
		<input name="email" value="<?php echo $arrdata['Email']; ?>"/>
		<br><br>
		<input type="submit" name="btn" value="submit">
	</form>
</center>

</body>
</html>