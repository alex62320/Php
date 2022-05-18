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
    private $personInCharge;
    private $tags;

    public function __construct(int $id,string $title, DateTime $limiteDate, bool $done, User $personInCharge,array $tags = [])
    {
        $this->id = $id;
        $this->title = $title;
        $this->limiteDate = $limiteDate;
        $this->done = $done;
        $this->personInCharge = $personInCharge;
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
     * Get the value of personInCharge
     */ 
    public function getpersonInCharge(): User
    {
        return $this->personInCharge;
    }

    /**
     * Set the value of personInCharge
     *
     * @return  self
     */ 
    public function setpersonInCharge(User $personInCharge): self
    {
        $this->personInCharge = $personInCharge;

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

    public function addTag(Tag $tag): self
    {
        if (!in_array($tag, $this->tags)){
            $this->tags[] = $tag;
        }

        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        $index = array_search($tag, $this->tags);

        if ($index !== false){
            array_splice($this->tags, $index, 1);
        }
        return $this;
    }
}