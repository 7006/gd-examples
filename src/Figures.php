<?php

namespace GdExample;

class Figures {

  public static function main() {
    
    header('Content-type: image/png');
    $png_image = imagecreate(300, 300);
    $red = imagecolorallocate($png_image, 244, 19, 34);
    $yellow = imagecolorallocate($png_image, 244, 207, 0);
    $blue = imagecolorallocate($png_image, 14, 30, 244);
    imagefilltoborder($png_image, 0, 0, $red, $red);

    imagefilledrectangle ($png_image, 20, 20, 200, 80, $yellow);   // RECTANGLE
    imagefilledrectangle ($png_image, 220, 20, 280, 80, $yellow);     // SQUARE

    imagefilledellipse ($png_image, 200, 150, 150, 75, $blue);    // ELLIPSE
    imagefilledellipse ($png_image, 50, 150, 75, 75, $blue);      // CIRCLE
    

    //$poly_points = array(150, 200, 100, 280, 200, 280);
    //imagefilledpolygon ($png_image, $poly_points, 3, $green);      // POLYGON

    imagepng($png_image);
    imagedestroy($png_image);
  }
}