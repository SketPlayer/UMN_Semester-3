<?php
interface Buah {
    public function setJumlahBiji();
}

interface Sayur {
    public function setWarna();
}

interface SayurBuah extends Sayur, Buah {
    public function setCaraMakan();
}

class KacangPolong implements SayurBuah {
    public function setJumlahBiji(){}

    public function setWarna(){}

    public function setCaraMakan(){}
    
    function __destruct(){
        echo "Kacang Polong";
    }
}

new KacangPolong();

?>