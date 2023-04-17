<?php
if($self['unread']) {
  $self['title'] = "LaHLab sitemap";
  $self['headln'] = "LaHLab sitemap ᚠᚢᚦᚨᚬᚱᚴᚼᚾᛁᛅᛋᛏᛒᛘᛚᛦ";
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
// $p = w_fpath($self['k']); // $self['root'] . '/' . $self['path'];
?><div>
<h1><?=$self['headln']?></h1>
<p class="ing"><?=$self['desc']?></p>
<ul>
<?php
$d = [$self['path'], ...w_recdir($self['path'])];
foreach(w_fdirs($d) as $fpath) {
   $i = w_readinfo($fpath);
   $wwwpath = w_rpath($self['path'], $fpath);
   ?><li><b><?=$wwwpath?></b>
   <a title="<?=$i['headln']?>" href="<?=$wwwpath?>"> <?=$i['title']?><br>
    <span class="sml"><?=$i['desc']?></span></a></li>
   <?php
}
?>
</ul>
</div><?php
include "${lib}/foot.php";
