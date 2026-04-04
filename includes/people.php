<?php

class People{
   
     private $name = "harrison";
     protected $age = 20;
     private $gender = "male";

     public function name(){
          
     $a = $this-> name;

     return $a;
     
     
         }
}


class NewClass{

   public function owner(){

   $a = "harrison";
   $b = "otieno";
   $c = "harrison otieno";

   
  return $a; }

}

class NewClass2 extends People{

public function own() {

$a= $this->age;

return $a;
}



}