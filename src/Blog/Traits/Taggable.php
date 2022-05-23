<?php declare(strict_types = 1);

namespace App\Blog\Traits;

use App\Blog\Tag;

trait Taggable
{
    private $tags;

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
    public function setTags(array $tags)
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