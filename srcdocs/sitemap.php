<?php
if($self['unread']) {
  $self['title'] = "LaHLab sitemap";
  $self['headln'] = "LaHLab sitemap";
  $self['desc'] = <<<END
    List of all the pages at lahlab.github.io - Mostly for internal use
    when organizing the site. Every HTML page on the site end up here
    automagicaly.
    END;
  $self['unread'] = 0;
}
if($honly) {
  return 0;
}
include "${lib}/head.php";
$p = $self['root'] . '/' . $self['path'];
?><div>
<h1><?=$self['headln']?></h1>
<p class="ing"><?=$self['desc']?></p>
<ul>
<?php
$d = [$p, ...w_recdir($p)];
foreach(w_fdirs($d) as $k) {
   $i = w_readinfo($k);
   $k = $self['rpath'] . substr($k, 8, -3);
   if('/index.' == substr($k, -7)) {
      $k = substr($k, 0, -6);
   } else {
      $k = $k . 'html';
   }
   ?><li><b><?=$k?></b>
   <a title="<?=$i['headln']?>" href="<?=$k?>"> <?=$i['title']?><br>
    <span class="sml"><?=$i['desc']?></span></a></li>
   <?php
}
?>
</ul>
</div><?php
include "${lib}/foot.php";
