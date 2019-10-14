<?php

class Person {
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greet($msg)
    {
        return $msg . ' ' . $this->name;
    }
}

$john = new Person('John');
$john->greet('Hi'); // Hi John