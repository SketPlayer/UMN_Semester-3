<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Daftar Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="font-weight: bold; color: white;">Form Mahasiswa</a>
            </li>
        </ul>
    </div>
</nav>
<br />
    <div class="container">
        <h1>Form Pengisian Data Mahasiswa</h1><br />
        <?php
        if (isset($_SESSION["error_message"])) {
            echo "<p style='color:red;'>" . $_SESSION["error_message"] . "</p>";
            unset($_SESSION["error_message"]);
        }
        ?>
        <form action="proses_mahasiswa.php" method="post" enctype="multipart/form-data">
            <input type="text" name="nim" placeholder="NIM" /><br />
            <input type="text" name="nama" placeholder="Nama" /><br />
            <input type="text" name="prodi" placeholder="Prodi" /><br />
            <input formenctype="multipart/form-data" type="file" name="foto" /><br />
            <input type="submit" />
        </form>
    </div>
</body>
</html>