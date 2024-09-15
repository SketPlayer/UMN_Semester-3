<?php
class Manusia {
    protected $nama;

    function __construct($nama){
        $this->nama = $nama;
    }

    final public function get_nama(){
        return $this->nama;
    }
}

class Bayi extends Manusia {
    protected $berat;
    
    function __construct($nama, $berat){
        $this->nama = $nama;
        $this->berat = $berat;
    }

    final public function get_berat_lahir(){
        return $this->berat;
    }
}

$john = new Manusia(nama: 'John Thor');
$wick = new Bayi('John Wick', '3kg');

echo "Data 1 <br />Nama: " . $john->get_nama() . "<br />";
echo "<hr />";
echo "Data 2 <br />Nama: " . $wick->get_nama() . "<br />";
echo "Berat: " . $wick->get_berat_lahir();

?>