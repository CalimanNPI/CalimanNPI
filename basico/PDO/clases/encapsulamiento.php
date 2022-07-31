<?php

class MyClass
{
    public $public = "Public"; #acceso global 
    protected $protected = "Protected";#acceso en clases hijo
    private $private = "private";#acceso solo en la clase  


    function print()
    {
        echo $this->public . '<br>';
        echo $this->protected . '<br>';
        echo $this->private . '<br>';
    }
}


class MyClass2 extends MyClass
{
    function print()
    {
        echo $this->public . '<br>';
        echo $this->protected . '<br>';
        echo $this->private . '<br>';
    }
    #cuando se sobrescribe ya no se tiene acceso a propiedad privada
}

$obj = new MyClass2();
$obj->print();
