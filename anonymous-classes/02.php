<?php

$some = new class
{
   private $name;

   public function setName(string $name)
   {
       $this->name = $name;
   }

   public function sayIt() : string
   {
       return "Welcome {$this->name}!!!\n";
   }

   public function goodBye() : string
   {
       return "Good bye {$this->name}!!!\n";
   }
};

$some->setName("Diana");
echo $some->sayIt();
echo $some->goodBye();
echo get_class($some) . "\n";
