<?php

declare(strict_types=1);

class User
{
    private $id;
    private $name;
    private $isActive;

    public function setId(int $id) : User
    {
        $this->id = $id;
        return $this;
    }

    public function setName(string $name) : User
    {
        $this->name = $name;
        return $this;
    }

    public function setState(bool $isActive) : User
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function __toString()
    {
        return "{id : {$this->id}, name : '{$this->name}'} \n";
    }
}

$user = new User();
$user->setId(222)
     ->setName("juan.rocas")
     ->setState(true);

echo $user;
