<?php

namespace GdExample;

class Text {

  public static function main() {
    //Set the Content Type
    header('Content-type: image/jpeg');

    // Create Image From Existing File
    $jpg_image = imagecreatefromjpeg(Resources::IMAGE_PATH);

    // Allocate A Color For The Text
    $white = imagecolorallocate($jpg_image, 255, 255, 255);

    // Set Text to Be Printed On Image
    $text = "This is a sunset!";

    // Print Text On Image
    imagettftext($jpg_image, 25, 0, 300, 300, $white, Resources::FONT_PATH, $text);

    new \DateTime();
    
    // Send Image to Browser
    imagejpeg($jpg_image);

    // Clear Memory
    imagedestroy($jpg_image);
  }
} 