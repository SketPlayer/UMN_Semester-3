<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$id = $_GET['id'];

require_once 'database.php';

$sql = "SELECT * FROM mahasiswa WHERE id = ?";

$stmt = $kunci->prepare($sql);
$data = [$id];
$stmt->execute($data);
$row = $stmt->fetch(PDO::FETCH_ASSOC)
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
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
            <li class="nav-item">
                <a class="nav-link" href="logout.php" style="color:red;">Logout</a>
            </li>
        </ul>
    </div>
</nav>
<br />
    <div class="container">
        <h2>Edit Mahasiswa</h2>
        <div>
            <div>Foto:   <?php
                        $foto = base64_encode($row['foto']);
                        $mime_type = "image/jpg";
                        echo "<img src='data:$mime_type;base64,$foto' alt='Foto Mahasiswa' width='100' height='100' />";
                        ?>
            </div><br />
            <div>NIM: <?= $row['nim'] ?></div><br />
            <div>Nama: <?= $row['nama'] ?></div><br />
            <div>Prodi: <?= $row['prodi'] ?></div><br />
            <?php
            if (isset($_SESSION["error_message2"])) {
                echo "<p style='color:red;'>" . $_SESSION["error_message2"] . "</p>";
                unset($_SESSION["error_message2"]);
            }
            ?>
            <form action="proses_edit.php?id=<?= $row['id'] ?>" method="post" enctype="multipart/form-data">
                <input type="text" name="nim" placeholder="NIM" /><br />
                <input type="text" name="nama" placeholder="Nama" /><br />
                <input type="text" name="prodi" placeholder="Prodi" /><br />
                <input formenctype="multipart/form-data" type="file" name="foto" /><br />
                <input type="submit" />
            </form>
        </div>
    </div>
</body>
</html>