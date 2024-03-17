<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="POST">
    <input type="text" name="name" id="">
    <input type="password" name="pass" id="">
    <input type="submit" value="Submit" name="login">
    </form>
   
</body>
</html>

<?php

?>

<?php


if(isset($_POST['login'])){
    include('conn.php');
    
 

    $sql = "select * from data where Email = '".$_POST['name']."' and passcode = '".$_POST['pass']."'";
    $result= mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count= mysqli_num_rows($result);
    if($count == true){
        header("Location: next.php");
        
    }
    else{
        echo "FAILED";
    }

}
?>