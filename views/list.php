<?php 

//Display title and description if status = published
//Link to full article by item id 
if($item->status == "published"){
    echo '<article>';
    echo '<h2><a href="?id='. $item->id . '">' 
         . $item->title . '</h2>';
    //Use presence of interface to change views
    if($content instanceof TrackableInterface){
        include __DIR__ . '/track.php';
    }     
    echo '<p>' . $content->shortDescription() . '</p>';
    echo '</article>';
}