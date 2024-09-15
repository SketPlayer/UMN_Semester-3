<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign-Up Page - Restoran IF330</title>
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
                        <h1>Sign-Up</h1>
                        <?php
                            if (isset($_SESSION["error_message"])) {
                                echo "<p style='color:red;'>" . $_SESSION["error_message"] . "</p>";
                                unset($_SESSION["error_message"]);
                            }
                        ?>
                        <form action="signup_process.php" method="get">
                            <label>First Name</label><br />
                            <input type="text" name="first_name" class="inputfill" required /><br />
                            <label>Last Name* (Not Required)</label><br />
                            <input type="text" name="last_name" class="inputfill" /><br />
                            <label>Email</label><br />
                            <input type="email" name="email" class="inputfill" required /><br />
                            <label>Password</label><br />
                            <input type="password" name="password" class="inputfill" required /><br />
                            <div class="mb-2 mt-2">
                                <label>Tanggal Lahir</label><br />
                                    <input type="date" name="birth_date" class="inputfill" required/><br />
                            </div>
                            <div class="mb-2 mt-2">
                                <label>Jenis Kelamin</label><br />
                                    <input type="radio" id="male" name="gender" value="M">
                                    <label for="male">Male</label>
                                    <input type="radio" id="female" name="gender" value="F">
                                    <label for="female">Female</label><br />
                            </div>
                            <button class="btn btn-primary tombol" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>