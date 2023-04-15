<?php

require "./mkhtml_lib.php";

function w_list($argv) {
   foreach($argv as $arg) {
      $f = w_readinfo($arg);
      echo "${f['k']} # ${f['title']}\n";
      echo "     Path: (${f['path']})   Rpath:(${f['rpath']})\n";
      echo "     Hdln: ${f['headln']}\n";
      echo "     Tags: ${f['tags']}   UnRead:${f['unread']}\n";
      echo "     Shrt: ${f['s']}   Depth: ${f['depth']}   Desc:\n";
      echo "${f['desc']}\n=================================\n";
   }
}

$arg0 = array_shift($argv);

if($argc == 2) {
   w_readfile($argv[0]);
} else {
   w_list($argv);
}

