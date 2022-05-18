<?php declare(strict_types = 1);

namespace App\Todo;

class Category
{
    private $id;
    private $name;
    
    public function __construct(int $id,string $name)
    {
        $this->id = $id;
        $this->name = $name; 
    }

    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }



    /**
     * Get the value of name
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}