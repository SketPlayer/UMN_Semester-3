<?php
switch($_POST['prodi']){
    case "if": $prodi = "Informatika"; break;
    case "si": $prodi = "Sistem Informasi"; break;
    case "tk": $prodi = "Teknik Komputer"; break;
}

$hobipilih = [];

if(isset($_POST['makan'])) {
    $hobipilih[] = "makan";
}
if(isset($_POST['minum'])) {
    $hobipilih[] = "minum";
}
if(isset($_POST['tidur'])) {
    $hobipilih[] = "tidur";
}

$hobi = implode(", ", $hobipilih);

echo "<h1>User Registration Data</h1>";
echo "Nama: " . $_POST['nama'] . "<br />";
echo "Jenis Kelamin: " . ($_POST['gender']=="m" ? "Laki-laki":"Perempuan") . "<br />";
echo "Tempat Lahir: " . $_POST['tempat'] . "<br />";
echo "Tanggal Lahir: " . $_POST['tanggal'] . "<br />";
echo "Email: " . $_POST['email'] . "<br />";
echo "Alamat: " . $_POST['alamat'] . "<br />";
echo "Program Studi: " . $prodi . "<br />";
echo "Hobi: ". $hobi . "<br />";
?>