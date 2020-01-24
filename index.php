<?php
//Autoload all classes
require_once "src/config.php";

$content = new Collection();
$title = "My Website";

require 'views/header.php';

//Test retrieve all posts
var_dump($repo->all('posts'));

require 'views/footer.php';