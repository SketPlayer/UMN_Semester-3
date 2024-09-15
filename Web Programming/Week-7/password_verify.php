<?php
$input = "rahasia";
$hashedPwd = password_hash($input, PASSWORD_BCRYPT);

echo "<h3>Test 1: String Password = rahasia</h3>";
if(password_verify("rahasia", $hashedPwd)){
    echo "Password Cocok";
}else{
    echo "Password TIDAK Cocok";
}

echo "<h3>Test 2: String Password = 12345678</h3>";
if(password_verify("12345678", $hashedPwd)){
    echo "Password Cocok";
}else{
    echo "Password TIDAK Cocok";
}