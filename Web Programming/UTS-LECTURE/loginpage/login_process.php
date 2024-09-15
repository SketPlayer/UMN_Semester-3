<?php
session_start();
require_once ('database_restoran.php');

if (empty($_GET["captcha"])) {
    $_SESSION["error_message2"] = "Please enter the CAPTCHA code.";
    header("Location: login.php");
    exit();
}

if ($_GET["captcha"] !== $_SESSION["captcha_code"]) {
    $_SESSION["error_message2"] = "CAPTCHA code is incorrect.";
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (empty($_GET["email"]) || empty($_GET["password"])) {
        $_SESSION["error_message2"] = "Semua data harus diisi";
        header("Location: login.php");
        exit();
    } else {
        $email = $_GET['email'];
        $password = $_GET['password'];

        $sql = "SELECT * FROM user
                WHERE email = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$row){
            $_SESSION["error_message2"] = "Email does not exist";
            header("Location: login.php");
            exit();
        }else{
            if(!password_verify($password, $row['password'])){
                $_SESSION["error_message2"] = "Password is incorrect";
                header("Location: login.php");
                exit();
            }else{
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['first_name'] = $row['first_name'];
                header('location: index.php');
            }
        }
    }
}