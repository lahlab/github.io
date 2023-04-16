<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8"><?php
if(!array_key_exists('title', $self)) {
   $self['title'] = "LaHLab WORTH LaH"; }
if(!array_key_exists('tagln', $self)) {
   $self['tagln'] = "WHORTH - the ugly duckling of FORTH"; }
?><head><title><?=$self['title']?></title>
<link href="<?=$self['rpath']?>style.css" rel="stylesheet"></head>
<body>
<div class="toper"><h1><?=$self['title']?></h1>
<h3><?=$self['tagln']?></h3></div>

