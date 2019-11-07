<?php

class Person {
    var $firstName;
    var $lastName;

    function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    function fullName() {
        return "{$this->firstName} {$this->lastName}";
    }
}

$person1 = new Person('Cesar', 'Acual');

$person2 = new Person('Ramon', 'Lapenta');

//

echo "Bienvenido {$person1->fullName()} es amigo de {$person2->fullName()}";