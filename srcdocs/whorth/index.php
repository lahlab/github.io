<?php
if($self['unread']) {
  $self['title'] = "WHORTH - The ugly duckling of FORTH";
  $self['headln'] = "WHORTH";
  $self['desc'] = <<<END
    WHORTH is an atempt to make a FORTH inspired language with duck typing,
    slightly more 'friendly' parsing with cleaner string literals and more.
    All with keeping FORTHS simplicity and extendability.
    END;
  $self['unread'] = 0;
}
if($honly) {
  return 0;
}
include "${lib}/head.php";
?>
<div><h1><?=${self['headln']}?></h1>
<h2>The ugly duckling of FORTH</h2>
<p class="ing"><?=${self['desc']}?></p>
<p>
[[Vision]]: WHORTH's vision and how it relate to FORTH.
<br>
[[Roadmap]]: Briefly how things will progress.
<br>
[[Trains]]: explain WHORTH's extra parsing tricks.
<br>
[[Health]]: Short health background for the curious.
<br>
[[License]]: Got a choose a licence. MPL 2.0?
</p>
</div><div>
<h3>The WHORTH institutionalized patient for life</h3>

<p class="ing">As I understand things You get a cool title for life when You make a programming language. I have chosen My - that's probably not how it works... But... Hey... Everyone must agree it is an appropriate title.<a class="rml" title="read more" href="../lah.html">»</a></p>

<p><b>This just got started!<b></p>
</div><?php
include "${lib}/foot.php";

