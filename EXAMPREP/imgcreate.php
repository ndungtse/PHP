<?php
// Set the content-type
header('Content-Type: image/png');

// Create the image
$img = imagecreatetruecolor(310, 60);

// Create some colors
$lightsky = imagecolorallocate($img, 135, 206, 250);
$blue = imagecolorallocate($img, 25, 25, 112);
imagefilledrectangle($img, 0, 0, 319, 59, $lightsky);

// The text to draw
$text = 'Welcome to etutorialspoint!';

imagestring( $img, 5, 30, 20, $text, $blue ); 
imagesetthickness( $img, 10 ); 

// Using imagepng() results in clearer text compared with imagejpeg() 
imagepng($img);
imagedestroy($img); 
?> 