<?php

// Article
// - id
// - catégory
// - title
// - summary
// - body
// - author
// - tags
// - image 
// - published_at


namespace Blog;


class Article 
    {
        private $id;
        private $title;
        private $body;
        private $category;


        public function __construct($id, $title, $body, $category)
        {
            $this ->id = $id;
            $this ->title = $title;
            $this ->body = $body;
            $this ->category = $category;
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
         * Get the value of body
         */ 
        public function getBody()
        {
                return $this->body;
        }

        /**
         * Set the value of body
         *
         * @return  self
         */ 
        public function setBody($body)
        {
                $this->body = $body;

                return $this;
        }

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
        public function setCategory($category)
        {
                $this->category = $category;

                return $this;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }
    }