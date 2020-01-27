<?php
//Since this is a single item we do not need a loop
//Use presence of interface to change views
echo '<div class="row">';
if($content instanceof TrackableInterface){
    include __DIR__ . '/track.php';
}
//Use presence of interface to change views
if($content instanceof ShareableInterface){
    include __DIR__ . '/share.php';
}
echo '</div>';
echo '<article>';
echo $content->current()->details;
echo '</article>'; 