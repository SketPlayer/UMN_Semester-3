<?php
session_start();

if(!isset($_SESSION['email']) &&
    !isset($_SESSION['id'])&&
    !isset($_SESSION['role'])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Hello World -ngetes-</h1><br />
    <?php
    if($_SESSION['role'] == "user"){
        echo "THIS IS THE USER AREA<br />";
        echo "WELCOME " . $_SESSION['first_name'];
    }elseif($_SESSION['role'] == "admin"){
        echo "THIS IS THE ADMIN AREA<br />";
        echo "WELCOME " . $_SESSION['first_name'];
    }
    ?>
</body>
</html>