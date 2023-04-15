<?php
if($self['unread']) {
  $self['title'] = "WHORTH RoadMap";
  $self['headln'] = "WHORTH RoadMap";
  $self['desc'] = <<<END
    Due to uncertainty about how fast I get well the roadmap have no
    time frame. But still an indication of how things are likely to
    progress.
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

<p class="ing"><?=$self['desc']?> It will be allot of jumping back
and forth in the list thou:</p>

<p><ol>

<li>Keep experimenting with the python implementation to get the basic design right. This is also what I'm best suited for right now as it is much thinking and the thinking can be done in the forest witch is far less taxing on the mind.</li>

<li>Get target compiling working from one python environment to another.</li>

<li>Start experimenting with other platforms, probably js and WASM.</li>

</ol></p>

<p>Having fun!</p>

</div><?php
include "${lib}/foot.php";

