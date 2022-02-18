<?php
//Set the Content Type
header('Content-type: image/jpg');

// Create Image From Existing File
$jpg_image = imagecreatefromjpeg('bird.jpg');

// Allocate A Color For The Text
$white = imagecolorallocate($jpg_image, 0, 255, 0);

// Set Path to Font File
$font_path = 'Zack and Sarah.ttf';

// Set Text to Be Printed On Image
$text = "Hi, I am text. I'm at the top of the picture now";
// $text = imagecreatefromjpeg('logo.jpg');

// Print Text On Image
imagettftext($jpg_image, 25, 0, 150, 300, $white, $font_path, $text);

// Send Image to Browser
imagejpeg($jpg_image);

// Clear Memory
imagedestroy($jpg_image);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text & Image</title>
</head>

<body>

</body>

</html>