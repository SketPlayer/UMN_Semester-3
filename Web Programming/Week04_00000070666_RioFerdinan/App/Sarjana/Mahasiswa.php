<?php
namespace Sarjana;
class Mahasiswa {
    public $nim;
    public $nama;
    public $prodi;

    function __construct($nim, $nama, $prodi){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
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

    const LEVEL = "Sarjana";
}

?>