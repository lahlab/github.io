<?php

// Config
$phproot  = './srcdocs/';  // Root for php pages
$lib = './templ';          // Place for templates and othet incudes
// Global vars
$dict = [];

function w_ppath($path) {
   // Make the absolute PAGE PATH from any absolut path
   // if path start with phproot cut it off else
   // if path start with / cut it off else return as is.
   global $phproot;

   if(str_starts_with($path, $phproot)) {
      $path = substr($path, strlen($phproot)); }
   if(str_starts_with($path, '/')) {
      $path = substr($path, 1); }
   return $path;
}

function w_rpath($fpath, $tpath) {
   // Make the RELATIVE www PATH from fpath to tpath
   $fl = explode('/', w_ppath($fpath));
   $tl = explode('/', w_ppath($tpath));
   while($fl && $tl && ($fl[0] == $tl[0])) {
      array_shift($fl);
      array_shift($tl); }
   $path = implode('/', $tl);
   $zfl = sizeof($fl);
   if($zfl > 1) {
      $path = implode('/', array_fill(0, $zfl-1, '..')) . $path; }
   else {
      $path = './' . $path; }
   if(str_ends_with($path, '/index.php')) {
      $path = substr($path, 0, -9); }
   else {
      $path = substr($path, 0, -4) . '.html'; }
   return $path;
}

function w_fpath($path) {
   // Make the absolute FILE PATH from any absolute path
   global $phproot;

   return $phproot . w_ppath($path);
}

function w_splitpath($path) {
   $path = w_ppath($path);
   $lst = explode('/', $path);
   //$pf = array_shift($lst);
   //$k = $path; // implode('/', $lst);
   $f = ['tags' => '', 'desc' => '', 's' => '', 'k' => $path];
   $f['fname'] = array_pop($lst);
   $f['depth'] = sizeof($lst);
   //$f['root'] = $lst;
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

function w_i_recdir($fpath) {
   // List all subdirs to filepath recursely
   $l = [];
   foreach(glob($fpath . '*/') as $d) {
      $l[] = $d;
      $l = [...$l, ...w_i_recdir($d)];
   }
   return $l;
}

function w_recdir($fpath) {
   // List all subdirs to filepath recursely
   return w_i_recdir(w_fpath($fpath));
}

function w_fdir($fpath) {
   // List all php files in a filepath
   $fpath = w_fpath($fpath);
   $l = [];
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

function w_readinfo($path) {
   global $dict;

   $self = w_splitpath($path);
   if(array_key_exists($self['k'], $dict)) {
      return $dict[$self['k']];
   }
   $honly = 1;
   require w_fpath($self['k']);
   return $self;
}

function w_readself(&$self) {
   global $dict, $lib;

   $honly = 0;
   require w_fpath($self['k']);
   return $self;
}

function w_readfile($path) {
   global $dict, $lib;

   $self = w_splitpath($path);
   if(array_key_exists($self['k'], $dict)) {
      $self = &$dict[$self['k']];
   } else {
      $dict[$self['k']] = &$self;
   }
   return w_readself($self);
}

