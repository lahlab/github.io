<?php

function w_splitpath($path) {
   $lst = explode('/', $path);
   $pf = array_shift($lst);
   $k = implode('/', $lst);
   $f = ['fname' => array_pop($lst), 'tags' => '', 'desc' => '',
         's' => '', 'k' => $k];
   $f['depth'] = sizeof($lst);
   $f['root'] = $pf;
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

function w_recdir($fpath) {
   // List all subdirs to filepath recursely
   $l = [];
   foreach(glob($fpath . '*/') as $d) {
      $l[] = $d;
      //$ll = sizeof($l);
      //echo "<li>$d $ll</li>\n";
      $l = [...$l, ...w_recdir($d)];
   }
   //$ll = sizeof($l);
   //echo "<li>$fpath $ll</li>\n";
   return $l;
}

function w_fdir($fpath) {
   // List all php files in a filepath
   $l = [];
   $idx = 0;
   $i = $fpath . 'index.php';
   foreach(glob($fpath . '*.php') as $f) {
      if($f == $i) {
         $l = [$f, ...$l];
      } else {
         $l[] = $f;
      }
   }
   return $l;
}

function w_fdirs($fplst) {
   // List all php files in all filepaths in list
   $l = [];
   foreach($fplst as $fpath) {
      $l = [...$l, ...w_fdir($fpath)];
   }
   return $l;
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

