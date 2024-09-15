<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" style="font-weight: bold; color: white;">BMI Calculator</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Calculator</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="history_bmi.php">History</a>
            </li>
        </ul>
    </div>
</nav>
<br />
<div class="container">
        <h1>BMI Calculator</h1>
        <?php
            if(isset($_GET['error']) && $_GET['error'] == 1) {
                echo '<div style="color: red;">All fields are required. Please fill all required fields and submit again.</div>';
            }
        ?>
        <form action="proses_bmi.php" method="post">
            <div>
                <label>Name</label>
                <br />
                <input type="text" name="name" />
                <br />
            </div>
            <div>
                <label>Age</label>
                <br />
                <input type="number" name="age" />
                <br />
            </div>
            <div>
                <label>Gender</label>
                <input type="radio" name="gender" value="Male" /> Male
                <input type="radio" name="gender" value="Female" /> Female
                <br />
            </div>
            <div>
                <label>Height (cm)</label>
                <br />
                <input type="number" name="height" />
                <br />
            </div>
            <div>
                <label>Weight (kg)</label>
                <br />
                <input type="number" name="weight" />
                <br /><br />
            </div>
            <button class="btn btn-primary" type="submit">Calculate BMI</button>
        </form>
</div>


</body>
</html>