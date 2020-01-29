<?php

class Pages extends Collection
{

    //Two methods must be included
    protected function setEntity()
    {
        $this->entity = 'pages';
    }

    public function getTitle()
    {
        //Since this is always a single page always return title
        return $this->current()->title;
    }

    public function featuredImage()
    {
        return $this->current()->image;
    }

}