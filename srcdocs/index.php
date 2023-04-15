<?php
if($self['unread']) {
  $self['title'] = "LaHLab GitHub space";
  $self['headln'] = "LaHLab GitHub projects";
  $self['desc'] = <<<END
    LaHLab was originaly the working name for a makerspace. But illnes
    got inbetween. The name kind of stuck and now it's mostly about
    coding for recovery and WHORTH.
    END;
  $self['unread'] = 0;
}
if($honly) {
  return 0;
}
include "${lib}/head.php";
?>
    <div>
      <h1><?=$headln?></h1>
      <p class="ing"><?=$self['desc']?></p>
      
      <h3>WHORTH</h3>
      <p><a class="rml" title="read more" href="whorth/">»</a> WHORTH is
      a new take on FORTH still in early design fase. The majore
      project by far.</p>

      <h3>LaH - Lars Hallberg</h3>
        <p><a class="rml" title="read more" href="lah.html">»</a> That's
        me. Just trying to get back in working order.</p>
      
      <h3>Sitemap</h3>
      <p><a class="rml" title="read more" href="sitemap.html">»</a> Mostly
      for internal use... Reveals how small this site are.</p>

    </div><?php
include "${lib}/foot.php";

