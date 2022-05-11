<?php

// Category
// - id
// - name / titre
// - description
// - image
// - created_at
// - created_by
// -edited_by
// - edited_at
// - deleted_at 
// - deleted_by

namespace Blog;

class Category
{
    private $id;
    private $name;
    private $description;

    public function __construct($id, $name, $description)
    {
        $this -> id = $id;
        $this -> name = $name;
        $this -> description = $description;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName()
    {
        $this->name = $name;

        return $this;
    }



    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}