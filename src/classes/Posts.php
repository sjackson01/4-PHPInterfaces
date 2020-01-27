<?php
/**
 * Posts class to extend the Collection class and Implement its CollectionInterface.
 * CollecitonInterface implements the Interator and Countable interface. 
 * Posts also implements the TrackableInterface and ShareableInterface. 
 */

class Posts extends Collection implements TrackableInterface, ShareableInterface
{

   /**
    * Construct collection object.
    * @param Interface implement 
    * @param Int
    * @param Int   
    */
    public function __construct(RepositoryInterface $repo, $id = null,
    $field = 'id'){
            $this->entity = 'posts';
            parent::__construct($repo,$id,$field);
    }

   /**
    * Find user that matches the author id
    * of the curren item. Find method returns an
    * array we set it to return just the first item
    * or index [0].
    */
    public function getAuthor()
    {
        $user = $this->repo->find('users', $this->current()->author)[0];
        if(empty($user->name)){
            return 'Unknown';
        }
        
        return $user->name;
    }

   /**
    * Return a formatted string for 
    * the date and time. 
    * @param date format 
    */

    public function getDateTime($format = 'D, d M Y H: i: s'){

        $date = new Datetime($this->current()->dateTime);
        return $date->format($format);

    }
    
   /**
    * Share this post on twitter. 
    */

    public function shareTwitter()
    {
        return urlencode($this->current()->title . '') 
            . 'http://'
            . $_SERVER['HTTP_HOST']
            . $_SERVER['REQUEST_URI'];

    }

   /**
    * Share this post email email. 
    * Return a string containing the subject
    * and the body. 
    */

    public function shareEmail()
    {
        return 'subject=' . urlencode($this->current()->title)
            . '&body=' . ($this->shortDescription() . "\n\nRead more at ")
            . 'http://'
            . $_SERVER['HTTP_HOST']
            . $_SERVER['REQUEST_URI'];

    }

    /**
    * Share this post to facebook.
    * Returns a link to the current page. 
    */

    public function shareFacebook()
    {
        return 'http://'
            . $_SERVER['HTTP_HOST']
            . $_SERVER['REQUEST_URI'];

    }

}

