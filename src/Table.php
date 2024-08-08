<?php

namespace GdExample;

class Table {

   public static function main() {
      
      $dstTable = imagecreatefrompng(Resources::IMAGE_PATH);
      $srcNoEnergy = imagecreatefrompng(Resources::IMAGE_NOENERGY_PATH);
      
      $srcNoEnergyBox = self::getNoEnergyBox();
      $dstPoints = self::getDstPoints();
      foreach ($dstPoints as $dstPoint) {
         imagecopymerge(
            $dstTable, $srcNoEnergy, 
            $dstPoint['dst_x'], $dstPoint['dst_y'], 
            $srcNoEnergyBox['src_x'], $srcNoEnergyBox['src_y'], $srcNoEnergyBox['src_width'], $srcNoEnergyBox['src_height'], 
            100
         );
      }

      header('Content-type: image/png');
      imagepng($dstTable);
      imagedestroy($dstTable);
      imagedestroy($srcNoEnergy);
   }

   private static function getDstPoints() {
      return [
         [
             'dst_x' => 80,
             'dst_y' => 39
         ],
         [
            'dst_x' => 130,
            'dst_y' => 79
         ],
         [
            'dst_x' => 530,
            'dst_y' => 119
         ],
         [
            'dst_x' => 630,
            'dst_y' => 79
         ],
         [
            'dst_x' => 730,
            'dst_y' => 79
         ],
         [
            'dst_x' => 730,
            'dst_y' => 239
         ],
         [
            'dst_x' => 1030,
            'dst_y' => 239
         ],
         [
            'dst_x' => 1080,
            'dst_y' => 239
         ],
         [
            'dst_x' => 1130,
            'dst_y' => 239
         ]
      ];
   }

   private static function getNoEnergyBox() {
      return [
         'src_x' => 0,
         'src_y' => 0,
         'src_width' => 49,
         'src_height' => 39
      ];  
   }
}