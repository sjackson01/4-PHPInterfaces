<?php
require 'src/config.php';

//Change slug variable based on the page we wish to display
$slug = 'home';

if(isset($_GET['slug'])){
    $slug = filter_input(INPUT_GET, 'slug', FILTER_SANITIZE_STRING);
}

$content = new Pages($repo,$slug, 'slug');

require 'views/header.php';
require 'views/single.php';
require 'views/footer.php';