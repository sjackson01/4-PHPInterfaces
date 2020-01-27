<?php 

//Display title and description if status = published
//Link to full article by item id 
if($item->status == "published"){
    echo '<article>';
    echo '<h2><a href="?id='. $item->id . '">' 
         . $item->title . '</h2>';
    echo '<p>' . $content->shortDescription() . '</p>';
    echo '</article>';
}