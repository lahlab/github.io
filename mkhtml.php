<?php

include "./mkhtml_lib.php";
//echo sizeof($argv);
//$dict = [];
//$lib = "./srcdocs/templ";
//$root = "./srcdocs";
//$path = "";
//$rpath = ".";

$arg0 = array_shift($argv);

if($argc == 2) {
   w_readfile($argv[0]);
} else {
   w_list($argv);
   echo "##########################\n$argc  $arg0\n";
}
//echo "ARG: $arg\n";
//foreach($argv as $arg) {
//   $lst = explode('/', $arg);
//   if($lst[0] == 'srcdocs') {
//      array_shift($lst);
//   } else {
//      echo "WTF:${lst[0]}\n";
//   }
//   $k = implode('/', $lst);
//   $f = ['fname' => array_pop($lst), 'tags' => '', 'desc' => '',
//         's' => '', 'k' => $k];
//   $f['depth'] = sizeof($lst);
//   $f['rpath'] = implode('/', array_fill(0, sizeof($lst), '..'));
//   if ($f['rpath'] == '') { $f['rpath'] = '.'; }
//   $f['path'] = implode('/', $lst);
//   $f['title'] = "LaHLab github space for mainly WHORTH stuff";
//   $f['headln'] = "LaHLab WHORTH project";
//   $f['unread'] = 1;
//   $dict[$k] = $f;
//}

//foreach($dict as $fpath => $f) {
//   echo "  rpath:(${f['rpath']}) path:(${f['path']}) fname:$fpath\n";
//}

//foreach($dict as $fpath => $f) {
//  $self = &$dict[$fpath];
//  $honly = 1;
//  include "./srcdocs/${'fpath'}";
//}
//$target = array_shift($dict);

//if (isset($dict)) {
//  $dict[] = ['self' => $self, 'title' => $title,
//             'headln' => $headln, 'desc' => $desc,
//             'tags' => $tags]; }

//foreach($dict as $fpath => $f) {
//   if($fpath != $target['k']) {
//      echo "$fpath: ${f['title']}\n";
//      echo "Path:(${f['path']}) Rpath:(${f['rpath']})\n";
//      echo "Hdln:${f['headln']}\n";
//      echo "Tags:${f['tags']} UnRead:${f['unread']}\n";
//      echo "Shrt:${f['s']}   Depth: ${f['depth']}\n";
//      echo "Desc:${f['desc']}\n";
//      echo "\n";
//   } else {
//      echo "ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR ERROR\n";
//   }
//}
//echo "TARGET: ${target['k']}\n";
//echo "  key : ${target['title']}\n";
//echo "  Path: (${target['path']})   Rpath: (${target['rpath']})\n";
//echo "  Hdln: ${target['headln']}\n";
//echo "  Tags: ${target['tags']}   UnRead: ${target['unread']}\n";
//echo "  Shrt: ${target['s']}   Depth: ${target['depth']}\n";
//echo "  Desc: ${target['desc']}\n";
//echo "=============================================================\n";
//echo "=============================================================\n";
//echo "=============================================================\n";
//echo "=============================================================\n";
//echo "=============================================================\n";
//$self =  &$target;
//$honly = 0;
//include "./srcdocs/${self['k']}";

