<!-- <?php
// 1
$dsn = "mysql:host=localhost;dbname=pemweb_week6";
$kunci = new PDO($dsn, "root", "");

// 2
$sql = "SELECT * FROM mahasiswa";

// 3
$hasil = $kunci->query($sql);

// 4
echo "<pre>";
$row = $hasil->fetch(PDO::FETCH_ASSOC);
var_dump($row);
$row = $hasil->fetch(PDO::FETCH_ASSOC);
var_dump($row);
?> -->

<?php
// 1
$dsn = "mysql:host=localhost;dbname=pemweb_week6";
$kunci = new PDO($dsn, "root", "");

// 2
$sql = "UPDATE mahasiswa
        SET nama = 'John Wick'
        WHERE nim = '002'";

// 3
$kunci->query($sql);