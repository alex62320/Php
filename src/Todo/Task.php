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
    private $PersonInCharge;
    private $tags;

    public function __construct(int $id,string $title,DateTime $limiteDate,bool $done,User $PersonInCharge,Tag $tags)
    {
        $this->id = $id;
        $this->title = $title;
        $this->limiteDate = $limiteDate;
        $this->done = $done;
        $this->PersonInCharge = $PersonInCharge;
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
    public function setTitle(string $title): self
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
     * Get the value of PersonInCharge
     */ 
    public function getPersonInCharge(): array
    {
        return $this->PersonInCharge;
    }

    /**
     * Set the value of PersonInCharge
     *
     * @return  self
     */ 
    public function setPersonInCharge(User $PersonInCharge): self
    {
        $this->PersonInCharge = $PersonInCharge;

        return $this;
    }

    public function addPersonInCharge(User $PersonInCharge): self
    {
        if (!in_array($tag, $this->tags)){
            $this->PersonInCharge[] = $PersonInCharge;
        }

        return $this;
    }

    public function removePersonInCharge(User $PersonInCharge): self
    {
        $index = array_search($PersonInCharge, $this->PersonInCharge);

        if ($index !== false){
            array_splice($this->PersonInCharge, $index, 1);
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
    public function setTags(Tag $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function addTag(Tag $tag): self
    {
        if (!in_array($tag, $this->tags)){
            $this->tags[] = $tag;
        }

        return $this;
    }

    public function removeTags(Tag $tag): self
    {
        $index = array_search($tag, $this->tags);

        if ($index !== false){
            array_splice($this->tags, $index, 1);
        }
        return $this;
    }
}