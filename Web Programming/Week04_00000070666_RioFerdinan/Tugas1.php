<?php
class Mobil {
    public $nama;
    public $merk;

    function __construct($nama, $merk){
        $this->nama = $nama;
        $this->merk = $merk;
    }

    function __destruct(){
        echo "Nama Mobil: $this->nama" . "<br />";
        echo "Merk Mobil: $this->merk";
    }
}

new Mobil('Avanza Veloz', 'Toyota');

?>