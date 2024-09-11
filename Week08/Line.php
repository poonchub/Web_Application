<?php
    $width = 201;
    $height = 201;
    $img = imagecreate($width, $height);

    $black = imagecolorallocate($img, 0, 0, 0);
    $red = imagecolorallocate($img, 255, 0, 0);
    $blue = imagecolorallocate($img, 0, 0, 255);

    imagerectangle($img, 0, 0, 200, 200, $black);
    $count = 200;
    for ($i=0 ; $i<12 ; $i++){
        imageline($img, 200, 199, $count, 1, $red);
        $count-=200/11;
    }
    $count = 0;
    for ($i=0 ; $i<12 ; $i++){
        imageline($img, 0, 199, $count, 1, $blue);
        $count+=200/11;
    }

    header('Content-type: image/png');
    imagepng($img);

    imagedestroy($img)
?>