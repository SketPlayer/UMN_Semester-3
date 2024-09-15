<?php
$random_bytes = random_bytes(20);
echo $random_bytes;
echo "<br />";

$token = bin2hex($random_bytes);
echo $token;