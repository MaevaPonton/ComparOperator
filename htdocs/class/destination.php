<?php

class Destination

{
    private $id;
    private $location;
    private $description;
    private $photo;
    
    


    public function __construct(array $data)
    {
        if (isset($data['id'])){
            $this->setId($data['id']);
        }
        if (isset($data['location'])){
            $this->setLocation($data['location']);
        }
        if (isset($data['description'])){
            $this->setDescription($data['description']);
        }
        if (isset($data['photo'])){
            $this->setPhoto($data['photo']);
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

    // GETER et SETER location 
        public function setLocation($location)
        {
            $this->location = $location;
        }
    
        public function getLocation()
        {
            return $this->location;
        }

    // GETER et SETER description 
        public function setDescription($description)
        {
            $this->description = $description;
        }

        public function getDescription()
        {
            return $this->description;
        }
    
    // GETER et SETER id 
        public function setPhoto($photo)
        {
            $this->photo = $photo;
        }

        public function getPhoto()
        {
            return $this->photo;
        }

    }