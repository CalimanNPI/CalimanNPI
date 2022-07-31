<?php
/**
 * es similar a las interfaces solo que permite 
 * definir los metodos como protected además  de 
 * permitir extender las funciones 
 */
abstract class ClaseAbstracta
{
    abstract protected function getValor();
    abstract protected function valor($valor);

    public function imprimir()
    {
        echo $this->getValor();
    }
}


class Clase extends ClaseAbstracta
{
    protected function getValor()
    {
        return "clase concreta";
    }

    protected function valor($valor)
    {
        return $valor . "clase concreta";
    }
}

$clase = new Clase();
$clase->imprimir();
