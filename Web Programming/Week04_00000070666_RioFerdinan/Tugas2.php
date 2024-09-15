<?php
class Mahasiswa {
    private $nim;
    private $nama;

    function getNIM(){
        return $this->nim = '001';
    }

    function getNama(){
        return $this->nama = 'John Thor';
    }
}

$john = new Mahasiswa();
echo $john->getNIM() . " " . $john->getNama();

?>