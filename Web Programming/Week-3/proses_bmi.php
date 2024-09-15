<?php
    $bmiHistory = [];

    if (isset($_COOKIE['bmidata'])) {
        $bmiHistory = json_decode($_COOKIE['bmidata'], true);
    }

    if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['height']) && isset($_POST['weight'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $weight = floatval($_POST['weight']);
        $height = floatval($_POST['height']);
        
        $bmi = $weight / (($height / 100) * ($height / 100));

        $bmiCategory = "";

        if ($bmi < 18.5) {
            $bmiCategory = "Underweight";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            $bmiCategory = "Normal";
        } elseif ($bmi >= 25.0 && $bmi <= 29.9) {
            $bmiCategory = "Overweight";
        } else {
            $bmiCategory = "Obese";
        }

        $newEntry = [
            "name" => $name,
            "age" => $age,
            "gender" => $gender,
            "height" => $height,
            "weight" => $weight,
            "bmi" => number_format($bmi, 2),
            "bmiCategory" => $bmiCategory,
        ];
        
        $bmiHistory[] = $newEntry;

        setcookie("bmidata", json_encode($bmiHistory));
    } else {
        header("Location: index.php?error=1");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator | Result</title>
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
                <a class="nav-link" href="#" style="font-weight: bold; color: white;">Calculator</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="history_bmi.php">History</a>
            </li>
        </ul>
    </div>
</nav>
<br />

<div class="container">
    <h1>BMI Result</h1>
    <div style="font-weight: bold;">For the information you entered:</div>
    <?php
        echo "Name: " . $_POST['name'] . "<br />";
        echo "Age: " . $_POST['age'] . "<br />";
        echo "Gender: " . ($_POST['gender']=="Male" ? "Male":"Female") . "<br />";
        echo "Height: " . $_POST['height'] . " cm" . "<br />";
        echo "Weight: " . $_POST['weight'] . " kg" . "<br />";
    ?>
    <div class="container">
        <p>Your BMI is <?php echo number_format($bmi, 2) ?>, indicating your weight
        is in the <?php echo $bmiCategory ?> category for someone of your height.</p>
    </div>
    <div style="font-weight: bold;">BMI Category</div>
        <table class="table table-striped" style="width:100%">
            <thead class="bg-dark">
                <tr>
                    <th style="font-weight: bold; color: white;">BMI</th>
                    <th style="font-weight: bold; color: white;">Weight Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Below 18.5</td>
                    <td>Underweight</td>
                </tr>
                <tr>
                    <td>18.5 - 24.9</td>
                    <td>Normal</td>
                </tr>
                <tr>
                    <td>25.0 - 29.9</td>
                    <td>Overweight</td>
                </tr>
                <tr>
                    <td>30.0 and above</td>
                    <td>Obese</td>
                </tr>
            </tbody>
        </table>
    <a href="index.php" class="btn btn-primary mb-2">Calculate Again</a><br />
    <a href="history_bmi.php" class="btn btn-primary">View History</a>

</div>

</body>
</html>