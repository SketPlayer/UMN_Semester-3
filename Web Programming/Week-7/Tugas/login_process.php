<?php
session_start();
require_once ('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $_SESSION["error_message2"] = "Semua data harus diisi";
        header("Location: login.php");
        exit();
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM admin WHERE username = ?";
        $stmt = $kunci->prepare($sql);
        $stmt->execute([$username]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$row){
            $_SESSION["error_message2"] = "Username does not exist";
            header("Location: login.php");
            exit();
        }else{
            if(!password_verify($password, $row['password'])){
                $_SESSION["error_message2"] = "Password is incorrect";
                header("Location: login.php");
                exit();
            }else{
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                header('location: index.php');
            }
        }
    }
}