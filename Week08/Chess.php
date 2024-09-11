<?php
    $width = 280;
    $height = 250;

    $img = imagecreate($width, $height);

    $gray = imagecolorallocate($img, 220,220,220);
    $white = imagecolorallocate($img, 255,255,255);
    $black = imagecolorallocate($img, 0,0,0);
    $red = imagecolorallocate($img, 255, 0, 0);

    imagefill($img, 0, 0, $gray);
    imagerectangle($img, 4, 4, 275, 245, $black);
    imagefilledrectangle($img, 60, 60, 220, 220, $white);
    imagestring($img, 5, 100, 20, 'CHESS PRO.', $black);
    
    $y1 = 60;
    $y2 = 80;
    for ($i=0; $i<8 ; $i++){
        if($i%2==1){
            $x1 = 60;
            $x2 = 80;
        }else{
            $x1 = 80;
            $x2 = 100;
        }
        for ($j=0; $j<4 ; $j++){
            imagefilledrectangle($img, $x1, $y1, $x2, $y2, $red);
            $x1+=40;
            $x2+=40;
        }
        $y1+=20;
        $y2+=20;
    }

    header('Content-type: image/png');
    imagepng($img);

    imagedestroy($img)
?>