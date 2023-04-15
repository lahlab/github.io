<?php
if($self['unread']) {
  $self['title'] = "Blog";
  $self['headln'] = "Blog";
  $self['desc'] = <<<END
    blogiti blog.
    END;
  $self['unread'] = 0;
}
if($honly) {
  return 0;
}
include "${lib}/head.php";
?><div>
<h1><?=$self['headln']?></h1>
<p class="ing"><?=$self['desc']?></p>
</div><?php
include "${lib}/foot.php";
