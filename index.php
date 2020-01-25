<?php
//Autoload all classes
require_once "src/config.php";

//Test 2 new collection object 
//This will pull all the posts
$content = new Collection($repo);

$title = "My Website";

require 'views/header.php';

//Test retrieve all posts
//var_dump($repo->all('posts'));

//Test 2 Loop through each post and return a title
foreach($content as $item){
    echo $item->title;
}

require 'views/footer.php';