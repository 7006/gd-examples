<?php

namespace GdExample;

class Table {

  public static function main() {
              
     $png_table = imagecreatefrompng(Resources::IMAGE_PATH);
     $png_exp = imagecreatefrompng(Resources::IMAGE_EXP_PATH);
     
     header('Content-type: image/png');

     imagecopymerge($png_table, $png_exp, 80, 39, 0, 0, 49, 39, 100);
     imagecopymerge($png_table, $png_exp, 130, 79, 0, 0, 49, 39, 100);
     imagecopymerge($png_table, $png_exp, 630, 79, 0, 0, 49, 39, 100);
     imagecopymerge($png_table, $png_exp, 530, 199, 0, 0, 49, 39, 100);
     imagecopymerge($png_table, $png_exp, 180, 279, 0, 0, 49, 39, 100);
     imagepng($png_table);
      
     imagedestroy($png_table);
     imagedestroy($png_exp);
  }
}