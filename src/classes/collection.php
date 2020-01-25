<?php
/**
 * Main controller applicaiton controller.
 * Implements repository on construct. 
 */

class Collection implements Iterator, Countable 
{
    protected $repo;
    public $collection;

/**
 * Construct collection object.
 * @param Interface implement 
 * @param Int
 * @param Int   
 */
    public function __construct(RepositoryInterface $repo, $id = null,
    $field = 'id'){
        $this->repo = $repo;
        if(!empty($id)){
            $this->collection = $this->repo->find('posts', $id, $field);
        }else{
            $this->collection = $this->repo->all('posts');
        }

    }
}