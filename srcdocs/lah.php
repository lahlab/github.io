<?php
if($self['unread']) {
  $self['title'] = "LaH - Lars Hallberg";
  $self['headln'] = "LaH - Lars Hallberg";
  $self['desc'] = <<<END
    Been programming since the early 80's but a bit
    more than the last 10 years have been a black hole of illness.
    Issue finally found and code for recovery.
    END;
  $self['unread'] = 0;
}
if($honly) {
  return 0;
}
include "${lib}/head.php";
?>
    <div>
      <p class="ing"><?=$self['desc']?></p>
      <h1><?=$self['headln']?><h1>
      <h3>The WHORTH institutionalized patient for life</h3>
      <p class="ing">Plan a fundraiser at the moment to be able to put
        more energy into programming for the benefit of my recovery and
        WHORTH. Updates about that will come up here!</p>
      <h2>Health</h2>
      <p class="ing"><a class="rml" title="read more" href="health.html">»</a>
        I am
        recovering from illness and cognitive decline after going far too
        long with sleep apnea. After getting a C-PAP to sleep with I have
        steadily improved but allot of hard work still to do.</p>
      <p><a class="rml" title="read more" href="index.html">»</a>Go back to the
      start page</p>
      <p>dfg fgd fg dfg dg df dg fdgf d gdf gfd gd gdg dfgdf g dfg dfgd fg
       dfgdfg fg fg df gf  g fdgdf g dfg df g df gd gd g f g dfgdf g f g
       dgfgdg dfgf dfgfgdg dgfgd dg</p>
    </div><?php
include "${lib}/foot.php";

