<?php
if($self['unread']) {
  $self['title'] = "License for WHORTH - MPL 2.0?";
  $self['headln'] = "License for WHORTH";
  $self['desc'] = <<<END
    Mild copyleft is wanted. People should be able to use the WHORTH
    code, change the WHORTH code, mix it with any code they like,
    build the program they want and use and distribute there program
    on the terms they like. Only on the condition they share back any
    changes they do to the WHORTH code itself and preserve the same
    rights to others on that WHORTH code.
    END;
  $self['unread'] = 0;
}
if($honly) {
  return 0;
}
include "${lib}/head.php";
?>
<div><h1><?=$self['headln']?></h1>
<h3>WHORTH - The ugly duckling of FORTH</h3>

<p class="ing"><?=$self['desc']?></p>

<p>Still up for sugestions.</p>

<h3>One candidate: MPL 2.0</h3>

<p><a class="rml" title="Mozilla Public License (MPL) version 2.0"
   href="https://www.mozilla.org/en-US/MPL/2.0/)">»</a>Mozilla Public License (MPL) version 2.0 is a candidate for a license for WHORTH. Some issues thou like the GPL trap. Also - Mozilla deciding on license upgrades make sense for Mozilla projects but really nothing else.</p>

<h3>Licensing goals</h3>

<p>The mild copyleft is not only to protect all our freedom but in particular contributor from unfair competition. There's nothing to do about free riders but they are always one step behind. But if a competitor take a contributors code, improve it and compete with an edge over the contributor whose code they used - That is unfair and stuff that can hurt the spirit of sharing in an community.</p>

<p>MPL 2.0 mostly protects from that. What people can do is to turn there improved versions in to a GPL variant with a little trickery. That is still sharing and will benefit parts of the community. If the original contributor can't comply with the GPL it still kind of unfair thou, at least if someone competing with them us it. But it seams not to be possible to do better and still be compatible with GPL - Witch also is part of the goal (annoying thou that *GPL don't respect other copyleft licenses. This is all FSF's problem
to fix).</p>

<p>It is at least way better then the 'permissive' licenses out there!</p>

<h2>a Rune license</h2>

<p><a class="rml" title="FUTORK - An ultra young 'FUTHARK'"
   href="./futork.html">»</a>A license should really be like runes - You carve them in to stone and don't worry about it anymore. Reality might not be that easy but maybe one can come close.</p>

<ul>
<li><b class="big">ᛁᚠᚱᛁ (LFRL)</b> <b>Lesser Free Rune License</b>. alow relicensing to *GPL ala MPL but also allow relicensing to FRL to maintain 'terror' balance.</li>

<li><b class="big">ᚠᚱᛁ (FRL)</b> <b>Free Rune License</b>. (the main one). Like
MPL but don't allow relicensing to *GPL. *GPL is incompatible with this
license (not the other way around - it's all FSF's problem).</li>

<li><b class="big">ᚴᚠᚱᛁ (CFRL)</b> <b>Contagious Free Rune License</b>. Like FRL
but demand all other files in a combined work must be released as source under a free/open source license approved by OSI or FSF. (K rune chosen as it's an hard C in Contagious).</li>

<li><b class="big">ᚨᚴᚠᚱᛁ (ACFRL)</b> <b>Affero Contagious Free Rune
License</b>. Would be nice but I will not touch this - It probably take
much more then a cosmetic change to MPL...</li>
</ul>

<p>Just throw this in here to not forget wherry loose ideas of a
uncentralized license upgrade schema... some notes to self: Announced transfer state? 6/3 Year? Interim usage if needed? back licensing during transfer state? Similarity demand?</p>

</div><?php
include "${lib}/foot.php";

