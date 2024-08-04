<?php

require_once __DIR__ . '/vendor/autoload.php';

use GdExample\Image;
use GdExample\Figures;
use GdExample\Lines;
use GdExample\Text;

match($_SERVER['REQUEST_URI']) {
  "/image" => Image::main(),
  "/figures" => Figures::main(),
  "/lines" => Lines::main(),
  "/text" => Text::main(),
  default => 1
};