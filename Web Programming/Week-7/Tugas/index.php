<?php
session_start();
require_once ('database.php');

$sql = "SELECT * FROM mahasiswa";

$hasil = $kunci->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
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
                <a class="nav-link" href="#" style="font-weight: bold; color: white;">Daftar Mahasiswa</a>
            </li>
            <?php
                if(!isset($_SESSION['user_id'])){
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            <?php
                }else{
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="form_mahasiswa.php">Form Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" style="color:red;">Logout</a>
                </li>
            <?php
                }
            ?>
        </ul>
    </div>
</nav>
<br />
    <div class="container justify-content-center">
        <h1>Daftar Mahasiswa</h1><br />
        <table class="table table-striped border-dark">
            <tr>
                <th>Foto</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Tindakan</th>
            </tr>
            <?php
            while($row = $hasil->fetch(PDO::FETCH_ASSOC)){
            ?>

            <tr>
                <td>
                    <?php
                    $foto = base64_encode($row['foto']);
                    $mime_type = "image/jpg";
                    echo "<img src='data:$mime_type;base64,$foto' alt='Foto Mahasiswa' width='100' height='100' />";
                    ?>
                </td>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['prodi'] ?></td>
                <td>
                    <a class="btn btn-warning" href="edit_mahasiswa.php?id=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-danger" href="delete_mahasiswa.php?id=<?= $row['id'] ?>">Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>