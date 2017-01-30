<?php
  class Book;
   
   public $title;
   public $price;
   
   public function  setPrice($price){
        $this->price = $price;
    }
    public  function getprice(){
        return $this->price;
    }
   
   public function setTitle($title) {
   	  $this->title = $title;
   }
   
   public function getTitle() {
   		return $this->title;
   }

            public $Title;
            public $Price;
            
            public function construct($Title, $Price) {
              $this->Title = $Title;
              $this->Price = $Price;
            }
  Class PublishBook extends Book{
    private $Publisher;
    
    private function  setPublisher($Publisher){
        $this->publisher = $Publisher;
    }
    private function getPublisher(){
        return $this-> $Publisher;
    }
   
}
?>