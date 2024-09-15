<?php
namespace Magister;
class Mahasiswa {
    public $nim;
    public $nama;
    public $prodi;
    public $gelarSarjana;

    function __construct($nim, $nama, $prodi, $gelarSarjana){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->gelarSarjana = $gelarSarjana;
    }

    function getNIM(){
        return $this->nim;
    }

    function getNama(){
        return $this->nama;
    }

    function getProdi(){
        return $this->prodi;
    }

    function getSarjana(){
        return $this->gelarSarjana;
    }

    const LEVEL = "Magister";
}

?>