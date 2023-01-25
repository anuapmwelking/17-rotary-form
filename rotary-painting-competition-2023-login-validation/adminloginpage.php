<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>hello , <?php echo $_SESSION['user']?></p>
    <p>logout</p>
<a href="logout.php">Logout</a>
</body>
</html>