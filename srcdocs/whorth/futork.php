<?php
if($self['unread']) {
  $self['title'] = "FUTORK - An ultra young 'FUTHARK'";
  $self['headln'] = "FUTORK v0.1";
  $self['tagln'] = "ᚠᚢᛏᚬᚱᚴ ᚼᚾᛁᛅᛋ ᛒᛘᛚᛦ ᚨᚷᚹᛃ ᛇᛈᛖᛞ ᛟᛜᛊᛆ";
  $self['desc'] = <<<END
    A matching of currently used sounds with an altered Younger 'FUTHARK'
    filled up with missing sounds freely from mainly the older FUTHARK.
    No reconstruction - It is a free adaption. If the writing system
    been alive these 1000 years it would have changed more anyway.
    END;
  $self['unread'] = 0;
}
if($honly) {
  return 0;
}
include "${lib}/head.php";
?>
<div><h1><?=$self['headln']?></h1>
<h3><?=$self['tagln']?></h3>

<p class="ing"><?=$self['desc']?></p>

<p>W and V is merged - unsounded V is dangerous close to F anyway. Th is dropped in favour of T-h D-h with sounded h. Ch and infamous Swedish sj
are merged to one hiss/swoosh sound. There are also some swapping of
symbols to match Latin chars in form.</p>
</p>
<ol>
<li><b class="big">ᚠ</b> F f</li>
<li><b class="big">ᚢ</b> U u - like in sugar</li>
<li><b class="big">ᛏ</b> T t ᛏ replace ᚦ (THorn)</li>
<li><b class="big">ᚬ</b> O o - like in look, foot</li>
<li><b class="big">ᚱ</b> R r - Preferably a 'rolling' r like Rock'n
Roll</li>
<li><b class="big">ᚴ</b> K k</li>
<li><b class="big">ᚼ</b> H h - Should not be silent</li>
<li><b class="big">ᚾ</b> N n</li>
<li><b class="big">ᛁ</b> I i - I like in in, thing, tin</li>
<li><b class="big">ᛅ</b> Ä ä [@ &] Ae like a in apple, maple</li>
<li><b class="big">ᛞ</b> Z z ᛞ (org D) replace ᛋ (org Young Futhark S) Sounded S</li>
<li><b class="big">ᛒ</b> B b</li>
<li><b class="big">ᛖ</b> M m ᛖ (org e) replace ᛘ</li>
<li><b class="big">ᛚ</b> L l</li>
<li><b class="big">ᛦ</b> C c Ch Sch like in change</li>
<li><b class="big">ᚨ</b> A a like in bath</li>
<li><b class="big">ᚷ</b> G g hard g like in gag</li>
<li><b class="big">ᛘ</b> W w ᛘ (org m) replace ᚹ sounded v (all v)</li>
<li><b class="big">ᛃ</b> J j</li>
<li><b class="big">ᛇ</b> Y y like in synergy</li>
<li><b class="big">ᚹ</b> P p ᚹ (org w) replace ᛈ</li>
<li><b class="big">ᛈ</b> E e ᛈ (org p) replace ᛖ E like in teen,
ten (10)</li>
<li><b class="big">ᚦ</b> D d ᚦ (org th) replace ᛞ</li>
<li><b class="big">ᛟ</b> Ö ö [^ ~] Oe like ea in search</li>
<li><b class="big">ᛜ</b> Ŋ ŋ [X x] Ng like in angst, thing</li>
<li><b class="big">ᛊ</b> S s (Old Futhark S) unsounded</li>
<li><b class="big">ᛆ</b> Å å [V v] Aa like o in phone, smoke, Rock'n
Roll</li>
</ol>

<p><a class="rml" href="./license.html">»</a>This is overdoing stuff -
all I need is F R K L and possibly A.</p>

</div><?php
include "${lib}/foot.php";

