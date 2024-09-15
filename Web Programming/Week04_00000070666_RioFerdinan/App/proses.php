<?php
require_once 'init.php';
use Sarjana\Mahasiswa as SarjanaMhs;
use Magister\Mahasiswa as MagisterMhs;

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$formType = $_POST['form_type'];

if ($formType === 'sarjana') {
    $mhs = new SarjanaMhs($nim, $nama, $prodi);
} elseif ($formType === 'magister') {
    $gelarSarjana = $_POST['sarjana'];
    $mhs = new MagisterMhs($nim, $nama, $prodi, $gelarSarjana);
}

echo "Object Mahasiswa " . $mhs::LEVEL . " berhasil dibuat.<br />";
if($mhs::LEVEL == "Sarjana"){
    echo "NIM: " . $mhs->getNIM() . "<br />";
    echo "Nama: " . $mhs->getNama() . "<br />";
    echo "Prodi: " . $mhs->getProdi();
}else{
    echo "NIM: " . $mhs->getNIM() . "<br />";
    echo "Nama: " . $mhs->getNama() . "<br />";
    echo "Prodi: " . $mhs->getProdi() . "<br />";
    echo "Gelar Sarjana: " . $mhs->getSarjana();
}

?>