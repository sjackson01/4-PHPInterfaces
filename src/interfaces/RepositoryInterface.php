<?php

/**
 * Contract to follow if class performing
 * task accesses this interface. Class 
 * provides details for how that task 
 * will be accomplished. 
 */

interface RepositoryInterface
{
    //Retrieve all items of a certain table or entity 
    //We do not define the contents of the message 
    public function all($entity);

    //Find a single item
    public function find($entity,$id, $field = 'id');

}