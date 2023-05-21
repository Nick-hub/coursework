<?php
$curr_dir = __DIR__;
$font = $curr_dir . "\\font.ttf";
session_start();

function generateCaptchaCode($length = 6) {
    $chars = '0123456789';
    $code = '';
    for ($i = 0; $i < $length; $i++) {
        $code .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $code;
}

$captchaCode = generateCaptchaCode();
$_SESSION['captcha_code'] = $captchaCode;

header('Content-type: image/jpeg');

$captchaImage = imagecreate(160, 80);
$background = imagecolorallocate($captchaImage, 255, 255, 255);
$textColor = imagecolorallocate($captchaImage, 0, 0, 0);

imagettftext($captchaImage, 30, 5, 25, 60, $textColor , $font, $captchaCode);
imagejpeg($captchaImage);
?>
