<?php
session_start();
$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nim"]) || empty($_POST["nama"]) || empty($_POST["prodi"])) {
        $_SESSION["error_message2"] = "Semua input harus diisi.";
        header("Location: edit_mahasiswa.php?id=" . $id);
        exit();
    } else {
        $id = $_GET['id'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        
        $filename = $_FILES['foto']['name'];
        $temp_file = $_FILES['foto']['tmp_name'];
        
        $file_ext = explode(".", $filename);
        $file_ext = end($file_ext);
        $file_ext = strtolower($file_ext);
        
        switch($file_ext){
            case 'jpg':
                move_uploaded_file($temp_file, "Mahasiswa/{$filename}");
                $namaFile = $_FILES['foto']['name'];
                $pathFoto = 'Mahasiswa/' . $namaFile;
                $file_data = file_get_contents($pathFoto);
                break;
            default:
            $_SESSION["error_message2"] = "Anda hanya bisa upload file gambar format jpg.";
            header("Location: edit_mahasiswa.php?id=" . $id);
            exit();
        }

        $dsn = "mysql:host=localhost;dbname=data_mahasiswa";
        $kunci = new PDO($dsn, "root", "");
        
        $sql = "UPDATE mahasiswa SET foto = ?, nim = ?, nama = ?, prodi = ?
                WHERE id = ?";
        
        $stmt = $kunci->prepare($sql);
        $stmt->bindParam(1, $file_data, PDO::PARAM_LOB);
        $stmt->bindParam(2, $nim, PDO::PARAM_STR);
        $stmt->bindParam(3, $nama, PDO::PARAM_STR);
        $stmt->bindParam(4, $prodi, PDO::PARAM_STR);
        $stmt->bindParam(5, $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Berhasil Diedit</title>
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
        <h2>Data Mahasiswa Berhasil Diedit</h2>
    </div>
</body>
</html>