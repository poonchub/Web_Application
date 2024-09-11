<?php
    $width = 250;
    $height = 200;

    $img = imagecreate($width, $height);

    $gray = imagecolorallocate($img, 220,220,220);
    $white = imagecolorallocate($img, 255,255,255);
    $black = imagecolorallocate($img, 0,0,0);
    $red = imagecolorallocate($img, 255, 0, 0);
    $blue = imagecolorallocate($img, 0, 0, 255);

    imageline($img, 20, 20, 20, 160, $black);
    imageline($img, 20, 160, 240, 160, $black);

    $x1 = 20;
    $x2 = 30;
    $y1 = 150;
    $y2 = 150;
    $count = 0;
    for($i=0 ; $i<12 ; $i++){
        if($i<10){
            imageline($img, $x1, $y1, $x2, $y2, $black);
        }
        if($i%2==0){
            imagestring($img, 1, 5, $y1+6, $count, $black);
        }
        $count+=10;
        $y1-= 10;
        $y2-= 10;
    }

    $A = 90;
    $B = 80;
    $C = 95;
    $D = 73;
    $E = 84;
    $AVG = ($A+$B+$C+$D+$E)/5;
    imagefilledrectangle($img, 45, 160-$A, 65, 160, $red);
    imagefilledrectangle($img, 85, 160-$B, 105, 160, $red);
    imagefilledrectangle($img, 125, 160-$C, 145, 160, $red);
    imagefilledrectangle($img, 165, 160-$D, 185, 160, $red);
    imagefilledrectangle($img, 205, 160-$E, 225, 160, $red);
    imageline($img, 20, 160-$AVG, 240, 160-$AVG, $blue);
    imagestring($img, 2, 53, 170, "A", $black);
    imagestring($img, 2, 93, 170, "B", $black);
    imagestring($img, 2, 133, 170, "C", $black);
    imagestring($img, 2, 173, 170, "D", $black);
    imagestring($img, 2, 213, 170, "E", $black);

    header('Content-type: image/png');
    imagepng($img);

    imagedestroy($img)
?>