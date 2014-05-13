<?php

function jamacor_latest_video() {
  $videoid = get_field('video_id');
?>
<iframe width="100%" height="340" src="//www.youtube.com/embed/<?php echo $videoid ?>?rel=0" frameborder="0" allowfullscreen></iframe>
<?php
}