<?php

declare(strict_types=1);

class User
{
    private $id;
    private $name;
    private $isActive;

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setState(bool $isActive)
    {
        $this->isActive = $isActive;
    }

    public function __toString()
    {
        return "{id : {$this->id}, name : '{$this->name}'} \n";
    }
}

$user = new User();
$user->setId(1223);
$user->setName("root");
$user->setState(false);

echo $user;
