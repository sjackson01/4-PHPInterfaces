<?php 

/**
 * Add class to connect to json repository
 * and implements the repository interface.   
 */

class jsonRepository implements RepositoryInterface
{
    //Add property to set on custruct the json file we wish to connect
    protected $file; 

    public function __construct($file){
        $this->file = $file;
    }

    //Implement method called for by Repository Interface 
    //Must use same number of parameters as interface method
    //Do not have to share the same names 
    //Optional parameters must be declared optional in the same position
    
    /**
    * Select all records from json file. 
    * @param json file path.      
    */

    public function all($entity)
    {
        $data = json_decode(file_get_contents($this->file));
        return $data->$entity;
    }

    //Implement method called for by Repository Interface 
    //Must use same number of parameters as interface method
    //Do not have to share the same names
    //Optional parameters must be declared optional in the same position

    /**
    * Returns single item that matches the request. 
    * @param json file path. 
    * @param value or record for selection. 
    * @param field to search against.     
    */

    public function find($entity, $value, $field = 'id')
    {
        //Link to all method and loop through all items in our JSON file
        foreach($this->all($entity)as $key=>$data){
            if($data->$field == $value){
                //Return as an array to match results of our all method
                return array($data);
            }
        }

    }

}