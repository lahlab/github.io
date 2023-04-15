<?php
$s = $_SERVER["REQUEST_URI"];
if(str_ends_with($s, '/')) {
  $s = "srcdocs${s}index.php";
} elseif(str_ends_with($s, '.html')) {
  $s = 'srcdocs' . substr($s, 0, -4) . 'php';
} else {
   return false;
}
include "./mkhtml_lib.php";
w_readfile($s);
//<html>
//  <head><title>Humpi du</title>
//  <link href="style.css" rel="stylesheet" /></head>
//  <body>
//    <div>
//      <h1><?=$s</h1>
//      <p>Funkar det här eller?</p>
//    </div>
//  </body>
//</html>
