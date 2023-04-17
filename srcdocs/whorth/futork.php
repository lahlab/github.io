<?php
if($self['unread']) {
  $self['title'] = "FUTORK - An ultra young 'FUTARK'";
  $self['headln'] = "FUTORK v0.1";
  $self['tagln'] = "ᚠᚢᛏᚬᚱᚴ ᚼᚾᛁᛅᛋ ᛒᛘᛚᛦ ᚨᚷᚹᛃ ᛇᛈᛖᛞ ᛟᛜᛊᛆ";
  $self['desc'] = <<<END
    A matching of modernly used sounds with an altered Younger 'FUTARK'
    filled up with missing sounds freely from mainly the older FUTARK.
    No reconstruction - It is a free adaption. If the writing system
    been alaive these 1000 years it would have changed more anyway.
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

<p>W and V is merged - unsounded V is dangurus close to F anyway. Th is droped in faw of T-h D-h with sounded h. Ch and infamous swedish sj
are merged to one hiss/swosh sound. There are also some swaping of
symbols to match latin chars in form.</p>
</p>
<ol>
<li><b class="big">ᚠ</b> F f</li>
<li><b class="big">ᚢ</b> U u</li>
<li><b class="big">ᛏ</b> T t ᛏ repl ᚦ (TH)</li>
<li><b class="big">ᚬ</b> O o</li>
<li><b class="big">ᚱ</b> R r</li>
<li><b class="big">ᚴ</b> K k</li>
<li><b class="big">ᚼ</b> H h</li>
<li><b class="big">ᚾ</b> N n</li>
<li><b class="big">ᛁ</b> I i</li>
<li><b class="big">ᛅ</b> Ä ä [@ &] Ae</li>
<li><b class="big">ᛞ</b> Z z ᛞ (org D) repl ᛋ (org YoungFut S)</li>
<li><b class="big">ᛒ</b> B b</li>
<li><b class="big">ᛖ</b> M m ᛖ (org e) repl ᛘ</li>
<li><b class="big">ᛚ</b> L l</li>
<li><b class="big">ᛦ</b> C c Ch Sch</li>
<li><b class="big">ᚨ</b> A a</li>
<li><b class="big">ᚷ</b> G g</li>
<li><b class="big">ᛘ</b> W w ᛘ (org m) repl ᚹ</li>
<li><b class="big">ᛃ</b> J j</li>
<li><b class="big">ᛇ</b> Y y</li>
<li><b class="big">ᚹ</b> P p ᚹ (org w) repl ᛈ</li>
<li><b class="big">ᛈ</b> E e ᛈ (org p) repl ᛖ</li>
<li><b class="big">ᚦ</b> D d ᚦ (org th) repl ᛞ</li>
<li><b class="big">ᛟ</b> Ö ö [^ ~] Oe</li>
<li><b class="big">ᛜ</b> Ŋ ŋ [X x] Ng</li>
<li><b class="big">ᛊ</b> S s (OldFut S)</li>
<li><b class="big">ᛆ</b> Å å [V v] Aa</li>
</ol>
</div><?php
include "${lib}/foot.php";

