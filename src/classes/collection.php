<?php
/**
 * Main controller applicaiton controller.
 * Implements repository on construct. 
 */

 //Must implment the methods for Iterator and Countable
 //Errors will be thrown if methods are not implemented 
class Collection implements CollectionInterface
{
    protected $repo, $entity;
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
            $this->collection = $this->repo->find($this->entity, $id, $field);
        }else{
            $this->collection = $this->repo->all($this->entity);
        }
    }

    /**
    * Display current item details. 
    */

    public function shortDescription()
    {
        if(strlen($this->current()->details) < 510){
            return strip_tags($this->current()->details);
        }

        return strip_tags(
            substr(
                $this->current()->details, 
                0, 
                strpos(
                    // Interesting behavior The needle 'param 2' changes the content length
                    $this->current()->details,
                     ' ', 500)
                     ) . '...');
    }

   /**
    * Current is a built in method implemented by
    * the iterator interface that uses a pointer 
    * to save the current position
    * within an array. 
    */
    public function current(){
        return current($this->collection);
    }
    
   /**
    * Key is a built in method implemented by
    * the iterator interface that gives you the key
    * of the item the pointer is on. 
    */
    public function key(){
        return key($this->collection);
    }

   /**
    * Next is a built in method implemented by
    * the iterator interface that returns the
    * next value in an array which the internal pointer
    * is pointing to. 
    */
    public function next(){

        return next($this->collection);
    }

   /**
    * Rewind is a built in method implemented by
    * the iterator interface and called with the reset 
    * keyword which resets the pointer of the array 
    * to the first items. 
    */
    public function rewind(){
        return reset($this->collection);
    }
  
   /**
    * Valid is a built in method implemented by
    * the iterator interface and called with the key 
    * keyword which will verify the current key is valid.
    */
    public function valid(){
        return key($this->collection) !== null;
    }

   /**
    * Count is a built in method implemented by
    * the countable interface which returns the
    * number of items within our array.
    */
    public function count(){
        return count($this->collection);
    }
}
