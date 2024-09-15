<?php
session_start();
if(isset($_SESSION['user_id'])){
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Daftar Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="font-weight: bold; color: white;">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
        </ul>
    </div>
</nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-8">
                <div class="card">
                    <div class="card-body kotak">
                        <h1>Login</h1>
                        <?php
                            if (isset($_SESSION["error_message2"])) {
                                echo "<p style='color:red;'>" . $_SESSION["error_message2"] . "</p>";
                                unset($_SESSION["error_message2"]);
                            }
                        ?>
                        <form action="login_process.php" method="post">
                            <label>Username</label><br />
                            <input type="text" name="username" class="inputfill" required /><br /><br />
                            <label>Password</label><br />
                            <input type="password" name="password" class="inputfill" required /><br /><br />
                            <button class="btn btn-primary tombol" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>