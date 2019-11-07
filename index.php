<?php

class Person {
    protected $firstName;
    protected $lastName;
    protected $nickname;
    protected $changeNickname = 0;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setNickname($nickname)
    {
        if ($this->changeNickname >= 2) {
            throw new Exception("You can't change a nickname more than 2 times");
        }

        $this->nickname = $nickname;

        $this->changeNickname++;
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function getFullName() {
        return "{$this->firstName} {$this->lastName}";
    }
}

$person1 = new Person('Cesar', 'Acual');

$person1->setNickname('ChechaMas');
$person1->setNickname('Ducke');

die($person1->getNickname());