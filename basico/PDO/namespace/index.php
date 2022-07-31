<?php
use Carpeta1\Humano;
use Carpeta2\Humano as Humano2;


/***Autoload */
spl_autoload_register(function($class){

    if(file_exists(str_replace("\\", "/", $class).".php")){
        require_once str_replace("\\", "/", $class).".php";
    }
});

$humano1 = new Humano();
$humano1->saludo();

$humano2 = new Humano2();
$humano2->saludo();