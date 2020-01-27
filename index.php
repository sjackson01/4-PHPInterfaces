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

//Display item description and title 
foreach($content as $item){
    include 'views/list.php';
}

require 'views/footer.php';