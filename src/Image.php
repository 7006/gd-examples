<?php

namespace GdExample;

class Image {

  public static function main() {
    header('Content-type: image/png');
    $png_image = imagecreatetruecolor(400, 150);
    imagecolorallocate($png_image, 15, 242, 210);
    imagepng($png_image);
    imagedestroy($png_image);
  }
 
}

