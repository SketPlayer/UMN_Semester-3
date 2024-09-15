<?php
$id = $_GET['id'];

$dsn = "mysql:host=localhost;dbname=data_mahasiswa";
$kunci = new PDO($dsn, "root", "");

$sql = "DELETE FROM mahasiswa WHERE id = ?";

$stmt = $kunci->prepare($sql);
$data = [$id];
$stmt->execute($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mahasiswa Deleted</title>
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
                <a class="nav-link" href="form_mahasiswa.php">Form Mahasiswa</a>
            </li>
        </ul>
    </div>
</nav>
<br />
    <div class="container" style="text-align:center">
        <h2>Data Mahasiswa Berhasil Dihapus</h2>
    </div>
</body>
</html>