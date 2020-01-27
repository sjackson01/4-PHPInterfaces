<?php 

//Display title and description if status = published
if($item->status == "published"){
    echo '<article>';
    echo '<h2>' . $item->title . '</h2>';
    echo '<p>' . $content->shortDescription() . '</p>';
    echo '</article>';
}