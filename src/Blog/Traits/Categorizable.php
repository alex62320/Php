<?php declare(strict_types = 1);

namespace App\Blog\Traits;

trait Categorizable
{
    private $category;


     /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory(Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}