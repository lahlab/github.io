<?php

function w_splitpath($path) {
   $lst = explode('/', $path);
   $pf = array_shift($lst);
   //if($pf and ($lst[0] != 'srcdocs')) {
   //   echo "WTF:${lst[0]}\n";
   //}
   $k = implode('/', $lst);
   $f = ['fname' => array_pop($lst), 'tags' => '', 'desc' => '',
         's' => '', 'k' => $k];
   $f['depth'] = sizeof($lst);
   $f['rpath'] = implode('/', array_fill(0, sizeof($lst), '..'));
   if ($f['rpath']) {
      $f['rpath'] .= '/';
   } else {
      $f['rpath'] = './'; 
   }
   $f['path'] = implode('/', $lst);
   if($f['path']) {
      $f['path'] .= '/';
   }
   $f['title'] = "LaHLab github space for mainly WHORTH stuff";
   $f['headln'] = "LaHLab WHORTH project";
   $f['unread'] = 1;
   return $f;
}

$dict = [];

function w_readinfo($path, $root='./srcdocs/', $lib='./templ') {
   global $dict;

   $self = w_splitpath($path);
   if(array_key_exists($self['k'], $dict)) {
      return $dict[$self['k']];
   }
   $honly = 1;
   include ($root . $self['k']);
   return $self;
}

function w_readself(&$self, $root='./srcdocs/', $lib='./templ') {
   $honly = 0;
   include ($root . $self['k']);
   return $self;
}

function w_readfile($path, $root='./srcdocs/', $lib='./templ') {
   global $dict;

   $self = w_splitpath($path);
   if(array_key_exists($self['k'], $dict)) {
      $self = &$dict[$self['k']];
   } else {
      $dict[$self['k']] = &$self;
   }
   return w_readself($self, $root, $lib);
}

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

