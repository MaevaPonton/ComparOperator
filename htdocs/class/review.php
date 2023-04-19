<?php

class Review

{
    private $id;
    private $message;
    private $author;
    private $voyage_id;
    
    


    public function __construct(array $data)
    {
        if (isset($data['id'])){
            $this->setId($data['id']);
        }
        if (isset($data['message'])){
            $this->setMessage($data['message']);
        }
        if (isset($data['author'])){
            $this->setAuthor($data['author']);
        }
        if (isset($data['voyage_id'])){
            $this->setVoyageId($data['voyage_id']);
        }
       
    }


    // GETER et SETER id 
        public function setId($id)
        {
            $this->id = $id;
        }

        public function getId()
        {
            return $this->id;
        }

    // GETER et SETER message 
        public function setMessage($message)
        {
            $this->message = $message;
        }
    
        public function getMessage()
        {
            return $this->message;
        }

    // GETER et SETER author 
        public function setAuthor($author)
        {
            $this->author = $author;
        }

        public function getAuthor()
        {
            return $this->author;
        }
    
    // GETER et SETER id 
        public function setVoyageId($voyage_id)
        {
            $this->voyage_id = $voyage_id;
        }

        public function getVoyageId()
        {
            return $this->voyage_id;
        }

    }