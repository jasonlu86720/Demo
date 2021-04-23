<?php

namespace demo\hello;

class HelloWorld
{
    private $name;

    public function __construct($name = 'test')
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function hello()
    {
        return "Hello {$this->name}!";
    }
}