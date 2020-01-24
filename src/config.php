<?php 

/**
 * Contains all the shared functionality
 * we will need throughout our application.
 */

/**
 * Class autoloader.
 * @param class autoloads class upon object instantiation.
 */
 function autoloader($class_name) {
    //Use glob to find all pathnames matching pattern 
    foreach(glob(__DIR__ . '/*', GLOB_ONLYDIR) as $dir){
        if(file_exists("$dir/" . $class_name . '.php')){
            require_once "$dir/" . $class_name . '.php';
            //Stop for each after a file has been found 
            break;
        }
    }
 }

 /**
 * Register function when a class is found
 * or before an error is thrown our autoload
 * funtion will be triggered.
 */

 spl_autoload_register('autoloader');

 /**
 * Create json repository object. 
 * @param json file 
 * Using repository interface to enforce contract. 
 */

 $repo = new jsonRepository(__DIR__ . '/database.json');
