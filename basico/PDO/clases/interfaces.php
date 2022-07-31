<?php

/**
 * 
 * 
 *son pantillas que obligan a los otras 
 *clases a implementar los metodos que contiene
 * 
 */


interface a
{
    public function prueba();
}

interface b
{
    public function prueba2();
}
interface c extends a, b
{
    public function prueba3();
}

class d implements c
{
    public function prueba()
    {
        # code...
    }
    public function prueba2()
    {
        # code...
    }
    public function prueba3()
    {
        # code...
    }
}
