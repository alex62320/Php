<?php declare(strict_types = 1);

namespace App\Todo;

use DateTime;
use App\Todo\Tags;
use App\Todo\User;

class Task
{
    private $id;
    private $title;
    private $limiteDate;
    private $done;
    private $person_in_charge;
    private $tags;

    public function __construct(int $id,string $title,DateTime $limiteDate,bool $done,array $person_in_charge = [],array $tags = [])
    {
        $this->id = $id;
        $this->title = $title;
        $this->limiteDate = $limiteDate;
        $this->done = $done;
        $this->person_in_charge = $person_in_charge;
        $this->tags = $tags;
    }

    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of limite_date
     */ 
    public function getLimiteDate(): DateTime
    {
        return $this->limiteDate;
    }

    /**
     * Set the value of limite_date
     *
     * @return  self
     */ 
    public function setLimiteDate(DateTime $limiteDate): self
    {
        $this->limiteDate = $limiteDate;

        return $this;
    }

    /**
     * Get the value of done
     */ 
    public function getDone(): bool
    {
        return $this->done;
    }

    /**
     * Set the value of done
     *
     * @return  self
     */ 
    public function setDone(bool $done): self
    {
        $this->done = $done;

        return $this;
    }

    /**
     * Get the value of person_in_charge
     */ 
    public function getPerson_in_charge(): array
    {
        return $this->person_in_charge;
    }

    /**
     * Set the value of person_in_charge
     *
     * @return  self
     */ 
    public function setPerson_in_charge(User $person_in_charge): self
    {
        $this->person_in_charge = $person_in_charge;

        return $this;
    }

    public function addPerson_in_charge(User $Person_in_charge): self
    {
        if (!in_array($tag, $this->tags)){
            $this->Person_in_charge[] = $Person_in_charge;
        }

        return $this;
    }

    public function removePerson_in_charge(User $Person_in_charge): self
    {
        $index = array_search($Person_in_charge, $this->Person_in_charge);

        if ($index !== false){
            array_splice($this->Person_in_charge, $index, 1);
        }
        return $this;
    }


    /**
     * Get the value of tags
     */ 
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * Set the value of tags
     *
     * @return  self
     */ 
    public function setTags(array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function addTag(Tags $tag): self
    {
        if (!in_array($tag, $this->tags)){
            $this->tags[] = $tag;
        }

        return $this;
    }

    public function removeTags(Tags $tag): self
    {
        $index = array_search($tag, $this->tags);

        if ($index !== false){
            array_splice($this->tags, $index, 1);
        }
        return $this;
    }
}