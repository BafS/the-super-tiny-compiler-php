<?php
require 'super-tiny-compiler.php';

try {
  echo compiler('(add (subtract 4 2) 2)') . "\n";
} catch (Exception $e) {
  echo $e->getMessage() . "\n";
}
