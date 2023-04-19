<?php

class TourOperator

{
    private $id;
    private $name;
    private $link;
    private $gradeCount;
    private $gradeTotal;
    private $grade;
    private $isPremium;
    private $logo;
    


    public function __construct(array $data)
    {
          
        if (isset($data['id'])){
            $this->setId($data['id']);
        }
        if (isset($data['name'])){
            $this->setName($data['name']);
        }
        if (isset($data['link'])){
            $this->setLink($data['link']);
        }
        if (isset($data['grade_count'])){
            $this->setGradeCount($data['grade_count']);
        }
        if (isset($data['grade_total'])){
            $this->setGradeTotal($data['grade_total']);
        }
        if (isset($data['is_premium'])){    
            $this->setIsPremium($data['is_premium']);
        }
        if (isset($data['logo'])){
            $this->setLogo($data['logo']);
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

    // GETER et SETER name 
        public function setName($name)
        {
            $this->name = $name;
        }
    
        public function getName()
        {
            return $this->name;
        }

    // GETER et SETER link 
        public function setLink($link)
        {
            $this->link = $link;
        }

        public function getLink()
        {
            return $this->link;
        }
    
    // GETER et SETER gradeCount 
        public function setGradeCount($gradeCount)
        {
            $this->gradeCount = $gradeCount;
        }

        public function getGradeCount()
        {
            return $this->gradeCount;
        }

    // GETER et SETER gradeTotal 
        public function setGradeTotal($gradeTotal)
        {
            $this->gradeTotal = $gradeTotal;
        }

        public function getGradeTotal()
        {
            return $this->gradeTotal;
        }

    // GETER et SETER grade
        public function setGrade($grade)
        {
            $this->grade = $grade;
        }

        public function getGrade()
        {
            return $this->grade;
        }


    // GETER et SETER isPremium 
        public function setisPremium($isPremium)
        {
            $this->isPremium = $isPremium;
        }

        public function getIsPremium(): int
        {
            return (int) $this->isPremium;
        }
    
    // GETER et SETER logo 
        public function setLogo($logo)
        {
            $this->logo = $logo;
        }

        public function getLogo()
        {
            return $this->logo;
        }

        }