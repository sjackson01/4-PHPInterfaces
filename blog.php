<?php
//Autoload all classes
require_once "src/config.php";

//Check for query string link to single item page
if(isset($_GET['id'])){
    $content = new Posts(
        $repo,
        filter_input(
            INPUT_GET, 
            'id', 
            FILTER_SANITIZE_NUMBER_INT) 
    );
}

//Validate that we have a single item we want to use 
if(!isset($content) || $content->count() != 1 || $content->current()->status != "published")
        {
        //Return all the content and set the title to treehouse blog
        $content = new Posts($repo); 
}

require 'views/header.php';

//Check to see which view we should show 
if($content->count() == 1){
    //Single item
    include 'views/single.php';
    }else{
    //Multiple items 
    foreach($content as $item){
        include 'views/list.php';
        }
}
  
require 'views/footer.php';