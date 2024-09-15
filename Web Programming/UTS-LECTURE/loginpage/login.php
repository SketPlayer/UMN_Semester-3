<?php
session_start();
if(isset($_SESSION['user_id'])){
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page - Restoran IF330</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="loginpage_style.css" />
</head>
<body>
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
                        <form action="login_process.php" method="get">
                            <label>Email</label><br />
                            <input type="email" name="email" class="inputfill2" required /><br /><br />
                            <label>Password</label><br />
                            <input type="password" name="password" class="inputfill2" required /><br /><br />
                            <label>CAPTCHA</label><br />
                            <img src="captcha.php" alt="CAPTCHA Image" />
                            <input type="text" name="captcha" class="inputfill2" required /><br /><br />
                            <button class="btn btn-primary tombol" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>