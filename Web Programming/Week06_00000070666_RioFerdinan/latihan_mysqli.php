<!-- <?php
// 1. Koneksi DB
$kunci = mysqli_connect("localhost", "root", "", "pemweb_week6");

// 2. Query SQL
$sql = "SELECT * FROM mahasiswa";

// 3. Eksekusi SQL
$keranjang = mysqli_query($kunci, $sql);

// 4. Menampilkan hasil query
while($data = mysqli_fetch_assoc($keranjang)){
    echo $data['nama'];
    echo "<br />";
}
?> -->

<?php

// 1. Koneksi DB
$kunci = mysqli_connect("localhost", "root", "", "pemweb_week6");

// 2. Query SQL
$sql = "INSERT INTO mahasiswa (nim, nama, prodi)
        VALUES ('003','John Doel','Teknik Komputer')";

// 3. Eksekusi SQL
mysqli_query($kunci, $sql);
?>