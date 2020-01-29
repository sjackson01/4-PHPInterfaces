<?php

/**
 * Extends Interator and Countable
 * interfaces much like sub classes
 * extend parent classes. Any implementing our
 * collection interface will also need to implement
 * the Iterator and Countable interfaces.  
 */
 
interface CollectionInterface extends Iterator, Countable 
{

    public function shortDescription();
    public function getTitle();

}
