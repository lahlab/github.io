<?php
if($self['unread']) {
  $self['title'] = "WHORTH - The ugly duckling of FORTH";
  $self['tagln'] = "The WHORTH institutionalized patient for life";
  $self['headln'] = "WHORTH";
  $self['desc'] = <<<END
    WHORTH is an atempt to make a FORTH inspired language with duck typing,
    slightly more 'friendly' parsing with cleaner string literals and more.
    All with keeping FORTHS simplicity and extendability.
    END;
  $self['unread'] = 0;
}
if($honly) { return 0; }
include "${lib}/head.php";
?>
<div><h1><?=$self['headln']?></h1>
<h2>The ugly duckling of FORTH</h2>
<p class="ing"><?=$self['desc']?></p>
<?php
foreach(['vision', 'roadmap', 'trains', 'license'] as $sec) {
   $k = "$phproot/whorth/${sec}.php";
   $i = w_readinfo($k);
   ?><h3><?=$i['headln']?></h3>
      <p><a class="rml" title="<?=$i['title']?>" 
         href="<?=$sec?>.html">»</a>
      <?=$i['desc']?></p>
   <?php
}
?></div><div>
<h3>The WHORTH institutionalized patient for life</h3>

<p class="ing">As I understand things You get a cool title for life when You make a programming language. I have chosen My - that's probably not how it works... But... Hey... Everyone must agree it is an appropriate title.<a class="trml" title="read more" href="../lah.html">»</a></p>

<p><b>This just got started!<b></p>
</div><?php
include "${lib}/foot.php";

