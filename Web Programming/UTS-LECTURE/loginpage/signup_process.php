<?php
session_start();
require_once 'database_restoran.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (empty($_GET["first_name"]) || empty($_GET["email"]) || empty($_GET["password"]) ||
        empty($_GET["birth_date"]) || empty($_GET["gender"])) {
        $_SESSION["error_message"] = "Semua data harus diisi. (kecuali Last Name)";
        header("Location: signup.php");
        exit();
    } else {
        $first_name = $_GET['first_name'];
        $last_name = !empty($_GET['last_name']) ? $_GET['last_name'] : null;
        $birth_date = $_GET['birth_date'];
        $gender = $_GET['gender'];
        $email = $_GET['email'];
        $password = $_GET['password'];

        $check_sql = "SELECT COUNT(*) FROM user WHERE email = ?";
        $stmt_check = $db->prepare($check_sql);
        $stmt_check->execute([$email]);
        $count = $stmt_check->fetchColumn();

        if ($count > 0) {
            $_SESSION["error_message"] = "Email already exists. Please choose a different email.";
            header("Location: signup.php");
            exit();
        }

        $en_pass = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO user (first_name, last_name, birth_date, gender, email, password)
                VALUES(?, ?, ?, ?, ?, ?)";

        $result = $db->prepare($sql);
        $result->execute([$first_name, $last_name, $birth_date, $gender, $email, $en_pass]);

        header('location: login.php');
    }
}
?>
