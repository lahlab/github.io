<?php
if($self['unread']) {
  $self['title'] = "LaH: Brief health overview";
  $self['tagln'] = "The WHORTH institutionalized patient for life";
  $self['headln'] = "Health info";
  $self['desc'] = <<<END
    LaHLab is my playground for recovery and primarly WHORTH development.
    It suits well as it take allot of thinking that can be done in the
    forest - The best place for recovery. But what am I recovering from
    and how did I end up here?
    END;
  $self['unread'] = 0;
}
if($honly) {
  return 0;
}
include "${lib}/head.php";
?>
    <div>
<h1><?=$self['headln']?></h1>

<p class="ing"><?=$self['desc']?></p>

<p>Back in the 90's I was working wild as its often done in the software industry, with my own company at the side and a kid and a fair bit of other stuff going on. I started to feel exhausted but that was not particularly strange... Round 2003 I felt I needed to slow down. But it did not help. By 2010 I had shut down my own businesses, got rid of much all other stuff, worked pretty much the bare minimum. Yet I was burned out and got an depression (Note to everyone about this later).</p>

<p>After some medications the depression ended but I was even worse of with exhaustion and started getting cognitive problems with focus ability and memory. After a second depression I was a wreck and it was obviously something more going on. Started of checking whether I had early dementia (shit was that bad) but it moved on rather slowly because covid happened and meanwhile shit got worse in accelerating speed. Finally in spring 2021 I got diagnosed with sleep apnea and received a C-PAP. After that things started to improve slowly. Some problems with recurring muscle inflammations (that I believed to be age related) disappeared more or less over night. Cognitively I was far less exhausted but confused for a handful of months. At the end of 2021 my memory had improved to a point I had reasonable coherent memory of the past few days. That was a bit of a revelation - it strange what You get used to when You slowly decline over 20 Years or so.</p>

<p class="ing">Since then I have quite intensely tried coding to recover. Neuroplasticity is a thing but it don't come for free, at least not at age. <a class="rml" title="WHORTH" href="/">»</a>WHORTH is the first project reaching some interesting level. It is a good bit too ambitious for me right now but I plan on keeping improving. Anyhow, giving up is pointless!</p>

<p><b>Note:</b> if You get a exhaustion depression when You really shouldn't - Make sure to check up sleep apnea. It's can be quite devastating to go with a decade too long or so - trust me.</p>
</div><?php
include "${lib}/foot.php";

