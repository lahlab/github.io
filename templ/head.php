<!DOCTYPE html>
<html lang="en">
<?php
if(!array_key_exists('title', $self)) {
   $self['title'] = "LaHLab WORTH LaH"; }
if(!array_key_exists('tagln', $self)) {
   $self['tagln'] = "WHORTH - the ugly duckling of FORTH"; }
?><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$self['title']?></title>
<link href="<?=$self['rpath']?>style.css" rel="stylesheet">
<!-- first- and second-generation iPad: -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/icon72.png" />
<!-- non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
<link rel="apple-touch-icon-precomposed" href="/icon57.png" />
<!-- basic favicon -->
<link rel="icon" href="/icon32.png" /></head>
<body>
<div class="topper"><h1><?=$self['title']?></h1>
<h3><?=$self['tagln']?></h3></div>

