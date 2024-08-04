<?php

namespace GdExample;

class Image {

  public static function main() {
    header('Content-type: image/png');
    $png_image = imagecreatetruecolor(150, 150);
    imagecolorallocate($png_image, 15, 142, 210);
    imagepng($png_image);
    imagedestroy($png_image);
  }
 
}

