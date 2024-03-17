<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <style>

    table,thead,tr,th,td{
        border:2px solid black;
    }

    table{
        width:70%;
        text-align:center;
    }


    </style>



</head>
<body>


<center>

<table>
<thead>
<tr>
<!-- <th>ID</th> -->
<th>FIRST_NAME</th>
<th>LAST_NAME</th>
<th>CITY</th>
<th>EMAIL</th>
<th colspan=2>ACTION</th>
</tr>
</thead>

<tbody>

<?php

include 'newcon.php';

$selectquery = "  SELECT * from users";

$query = mysqli_query($conn,$selectquery);

$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){

?>

<tr>

<td><?php echo $res['first_name']; ?></td>
<td><?php echo $res['last_name']; ?></td>
<td><?php echo $res['city_name']; ?></td>
<td><?php echo $res['Email']; ?></td>
<td><a href="update.php?first_name=<?php echo $res['first_name']; ?>&last_name=<?php echo $res['last_name']; ?>&city_name=<?php echo $res['city_name']; ?>&Email=<?php echo $res['Email']; ?>">Update</a></td>
<td><a href="delete.php?first_name=<?php echo $res['first_name']; ?>&last_name=<?php echo $res['last_name']; ?>&city_name=<?php echo $res['city_name']; ?>&Email=<?php echo $res['Email']; ?>">Delete</a></td>
<?php

}

?>

</tbody>

</table>
</center>



</body>
</html>