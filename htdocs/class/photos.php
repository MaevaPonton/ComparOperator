<?php

class Photos

{
    private $id;
    private $photo1;
    private $photo2;
    private $photo3;
    private $photo4;
    private $destination_id;
    


    public function __construct(array $data)
    {
        if (isset($data['id'])){
            $this->setId($data['id']);
        }
        if (isset($data['photo1'])){
            $this->setPhoto1($data['photo1']);
        }
        if (isset($data['photo2'])){
            $this->setPhoto2($data['photo2']);
        }
        if (isset($data['photo3'])){
            $this->setPhoto3($data['photo3']);
        }
        if (isset($data['photo4'])){
            $this->setPhoto4($data['photo4']);
        }
        if (isset($data['destination_id'])){
            $this->setDestination_id($data['destination_id']);
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

    // GETER et SETER photo1 
        public function setPhoto1($photo1)
        {
            $this->photo1 = $photo1;
        }
    
        public function getPhoto1()
        {
            return $this->photo1;
        }

      // GETER et SETER photo2 
      public function setPhoto2($photo2)
      {
          $this->photo2 = $photo2;
      }
  
      public function getPhoto2()
      {
          return $this->photo2;
      }
    
       // GETER et SETER photo3 
       public function setPhoto3($photo3)
       {
           $this->photo3 = $photo3;
       }
   
       public function getPhoto3()
       {
           return $this->photo3;
       }

          // GETER et SETER photo4 
          public function setPhoto4($photo4)
          {
              $this->photo4 = $photo4;
          }
      
          public function getPhoto4()
          {
              return $this->photo4;
          }
        
           // GETER et SETER destination_id
           public function setDestination_id($destination_id)
           {
               $this->destination_id = $destination_id;
           }
       
           public function getDestination_id()
           {
               return $this->destination_id;
           }

    }