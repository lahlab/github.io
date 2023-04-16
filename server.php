<?php
$s = $_SERVER["REQUEST_URI"];
if(str_ends_with($s, '/')) {
  $s = $s . 'index.php';
} elseif(str_ends_with($s, '.html')) {
  $s = substr($s, 0, -4) . 'php';
} else {
   return false;
}
require "./mkhtml_lib.php";
w_readfile($s);

