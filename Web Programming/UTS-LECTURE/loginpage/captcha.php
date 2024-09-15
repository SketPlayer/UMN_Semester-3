<?php
session_start();

$length = 6; // Atur length kalo perlu
$captchaCode = generateRandomCode($length);

$_SESSION['captcha_code'] = $captchaCode;

function generateRandomCode($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';
    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $code;
}

$image = imagecreate(130, 45); // Atur (width, height)
$font = "Monday Rain.otf";

$bgColor = imagecolorallocate($image, 255, 255, 255); // Bg Putih
$textColor = imagecolorallocate($image, 0, 0, 0); // Text Hitam

// Add the CAPTCHA text to the image
imagettftext($image, 18, 0, 10, 30, $textColor, $font, $captchaCode); // Atur font file dan sizenya

header('Content-type: image/png');
imagepng($image);

// Selesai
imagedestroy($image);
?>
