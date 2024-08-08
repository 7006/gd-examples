<?php

namespace GdExample;

class Image {

  public static function main() {
    header('Content-type: image/png');
    $png_image = imagecreatetruecolor(400, 150);
    $red = imagecolorallocate($png_image, 244, 19, 234);
    imagefilltoborder($png_image, 0, 0, $red, $red);
    
    imagepng($png_image);
    imagedestroy($png_image);
  }
 
}

