<?php

class Voyage

{
    private $id;
    private $destination_id;
    private $tour_operator_id;
    private $price;
    
    


    public function __construct(array $data)
    {
        if (isset($data['id'])){
            $this->setId($data['id']);
        }
        if (isset($data['destination_id'])){
            $this->setDestinationId($data['destination_id']);
        }
        if (isset($data['tour_operator_id'])){
            $this->setTourOperatorId($data['tour_operator_id']);
        }
        if (isset($data['price'])){
            $this->setPrice($data['price']);
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

    // GETER et SETER destination_id 
        public function setDestinationId($destination_id)
        {
            $this->destination_id = $destination_id;
        }
    
        public function getDestinationId()
        {
            return $this->destination_id;
        }

    // GETER et SETER tour_operator_id 
        public function setTourOperatorId($tour_operator_id)
        {
            $this->tour_operator_id = $tour_operator_id;
        }

        public function getTourOperatorId()
        {
            return $this->tour_operator_id;
        }
    
    // GETER et SETER id 
        public function setPrice($price)
        {
            $this->price = $price;
        }

        public function getPrice()
        {
            return $this->price;
        }

    }