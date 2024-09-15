<?php
$namaNegara = array(
                "India" => array(
                                "ibuKota" => "New Delhi",
                                "kodeTel" => "91",
                                "mataUang" => "INR"   
                            ),
                "Indonesia" => array(
                                "ibuKota" => "Jakarta",
                                "kodeTel" => "62",
                                "mataUang" => "IDR"   
                            ),
                "Japan" => array(
                                "ibuKota" => "Tokyo",
                                "kodeTel" => "81",
                                "mataUang" => "JPY"   
                            )
            );

foreach ($namaNegara as $negara => $data) {
    echo "<b><i>{$data['ibuKota']}</i></b> is the capital city of <b>$negara</b>. ";
    echo "<u>$negara's calling code is {$data['kodeTel']} and has \"{$data['mataUang']}\" as currency code.</u></br>";
}

?>