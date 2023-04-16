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

<h3>Leading candidate: MPL 2.0</h3>

<p><a class="trml" title="Mozilla Public License (MPL) version 2.0"
   href="https://www.mozilla.org/en-US/MPL/2.0/)">»</a>Mozilla Public License (MPL) version 2.0 is the leading candidate for a license for WHORTH. It's not perfect but it might not get any better.</p>

<h3>Licensing goals</h3>

<p>The mild copyleft is not only to protect all our freedom but in particular contributor from unfair competition. There's nothing to do about free riders but they are always one step behind. But if a competitor take a contributors code, improve it and compete with an edge over the contributor whose code they used - That is unfair and stuff that can hurt the spirit of sharing in an community.</p>

<p>MPL 2.0 mostly protects from that. What people can do is to turn there improved versions in to a GPL variant with a little trickery. That is still sharing and will benefit parts of the community. If the original contributor can't comply with the GPL it still kind of unfair thou, at least if someone competing with them us it. But it seams not to be possible to do better and still be compatible with GPL - Witch also is part of the goal (anoying thou that *GPL don't respect other copyleft licenses. This is all FSF's problem
to fix).</p>

<p>It is at least way better then the 'permissive' licenses out there!</p>

<h2>Overthinking...</h2>

<p class="ing">Probably I'm overthinking this. WHORTH has the goal to be a simple language, even a small team should be able to reimplement it from scratch quite fast making any licensing issues quite solvable.</p>

<h3>Readline</h3>

<p>WHORTH currently use readline in python that may (depending on how Your python is compiled) be GPL code. That's no problem for now as WHORTH are only for play (it may bee no problem at all as there are alternative implementations - ask someone else). In the long run writing similar functionality in WHORTH is probably a good idea anyway to bring the functionality wherever WHORTH go.</p>
</div><?php
include "${lib}/foot.php";
