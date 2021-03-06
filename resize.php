<?php
// File and new size
$filename = 'bird.jpg';
$percent = 0.5;

// Content type
header('Content-Type: image/jpeg');

// Get new sizes
list($width, $height) = getimagesize($filename);
$newwidth = $width * $percent;
$newheight = $height * $percent;

// Load
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filename);

// Resize
imagecopyresized($thumb, $source, 50, 70, 200, 200, $newwidth, $newheight, $width, $height);

// Output
imagejpeg($thumb);
