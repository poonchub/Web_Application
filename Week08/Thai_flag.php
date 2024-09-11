<?php 
            
    $width = 200;
    $height = 120;
    $img = imagecreate($width, $height) 
        or die("Cannot Initialize new GD image stream");
    $white = imagecolorallocate($img, 255, 255, 255);
    $red = imagecolorallocate($img, 255, 0, 0);
    $blue = imagecolorallocate($img, 0, 0, 255);

    imagefill($img, 0, 0, $white);
    imagefilledrectangle($img, 0, 0, 200, 20, $red);
    imagefilledrectangle($img, 0, 40, 200, 80, $blue);
    imagefilledrectangle($img, 0, 100, 200, 120, $red);
            
    header ('Content-type: image/png');
    imagepng ($img);

    imagedestroy ($img);
?>