<?php
session_start();
require_once 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $_SESSION["error_message"] = "Semua data harus diisi.";
        header("Location: register.php");
        exit();
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $check_sql = "SELECT COUNT(*) FROM admin WHERE username = ?";
        $stmt_check = $kunci->prepare($check_sql);
        $stmt_check->execute([$username]);
        $count = $stmt_check->fetchColumn();

        if ($count > 0) {
            $_SESSION["error_message"] = "Username already exists. Please choose a different username.";
            header("Location: register.php");
            exit();
        }

        $en_pass = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO admin (username, password)
                VALUES(?, ?)";

        $result = $kunci->prepare($sql);
        $result->execute([$username, $en_pass]);

        header('location: login.php');
    }
}
?>
