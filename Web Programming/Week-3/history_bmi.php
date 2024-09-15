<?php
$bmiHistory = [];

if (isset($_COOKIE['bmidata'])) {
    $bmiHistory = json_decode($_COOKIE['bmidata'], true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator | History</title>
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
                <a class="nav-link" href="index.php">BMI Calculator</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Calculator</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="font-weight: bold; color: white;">History</a>
            </li>
        </ul>
    </div>
</nav>
<br />

<div class="container">
    <h1 style="text-align:center">BMI History</h1>
    <table class="table" style="width:100%">
            <thead class="bg-dark">
                <tr>
                    <th style="font-weight: bold; color: white;">Name</th>
                    <th style="font-weight: bold; color: white;">Age</th>
                    <th style="font-weight: bold; color: white;">Gender</th>
                    <th style="font-weight: bold; color: white;">Height</th>
                    <th style="font-weight: bold; color: white;">Weight</th>
                    <th style="font-weight: bold; color: white;">BMI</th>
                    <th style="font-weight: bold; color: white;">Category</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($bmiHistory as $entry) {
                        echo "<tr>";
                        echo "<td>{$entry['name']}</td>";
                        echo "<td>{$entry['age']}</td>";
                        echo "<td>{$entry['gender']}</td>";
                        echo "<td>{$entry['height']} cm</td>";
                        echo "<td>{$entry['weight']} kg</td>";
                        echo "<td>{$entry['bmi']}</td>";
                        echo "<td>{$entry['bmiCategory']}</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
</div>

</body>
</html>