<?php

namespace App\Todo;


class Task
{
    private $id;
    private $title;
    private $limiteDate;
    private $status;
    // private $person_in_charge;
    private $tags;

    public function __construct($id, $title, $limiteDate, $status, $person_in_charge, $tags = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->limiteDate = $limiteDate;
        $this->status = $status;
        $this->person_in_charge = $person_in_charge;
        $this->tags = $tags ?? [];
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of limite_date
     */ 
    public function getLimiteDate()
    {
        return $this->limiteDate;
    }

    /**
     * Set the value of limite_date
     *
     * @return  self
     */ 
    public function setLimiteDate($limiteDate)
    {
        $this->limiteDate = $limiteDate;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    // /**
    //  * Get the value of person_in_charge
    //  */ 
    // public function getPerson_in_charge()
    // {
    //     return $this->person_in_charge;
    // }

    // /**
    //  * Set the value of person_in_charge
    //  *
    //  * @return  self
    //  */ 
    // public function setPerson_in_charge($person_in_charge)
    // {
    //     $this->person_in_charge = $person_in_charge;

    //     return $this;
    // }

    /**
     * Get the value of tags
     */ 
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set the value of tags
     *
     * @return  self
     */ 
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    public function addTag($tag)
    {
        if (!in_array($tag, $this->tags)){
            $this->tags[] = $tag;
        }

        return $this;
    }

    public function removeTags($tag)
    {
        $index = array_search($tag, $this->tags);

        if ($index !== false){
            array_splice($this->tags, $index, 1);
        }
        return $this;
    }
}