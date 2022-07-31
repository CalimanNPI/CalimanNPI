<?php
class Personas
{
    public $nombre, $apellido, $edad;

    function __construct($n, $a, $e)
    {
        $this->nombre = $n;
        $this->apellido = $a;
        $this->edad = $e;
    }

    public function setNombre($n)
    {
        $this->nombre = $n;
    }

    public function getNombre()
    {
        return ucwords($this->nombre);
    }
}

class Peruano extends Personas
{
    use latino, Euro {
        latino::saludo insteadof Euro;
    }

    public $depa, $ciudad;
}
class Aleman extends Personas
{
    use Euro {
        Euro::saludo as public;
    }
    /** se cambia la visivilidad del metodo */

    public $region;

    public function setRegion($r)
    {
        $this->region = $r;
    }

    public function getRegion()
    {
        return $this->region;
    }
}


/**
 * Los trait solo se pueden usar para extender 
 * propiedades y metodos de una clase
 * 
 * (no se pueden instansear)
 * 
 * este sobrescribe cualquir metodo de la clase pádre 
 * 
 * también se pueden definir metodos abstractos
 */
trait latino
{
    public function saludoL()
    {
        echo " saludo Lati";
    }
    public function saludo()
    {
        echo " saludo 1";
    }
}
trait Euro
{
    public function saludoE()
    {
        echo " saludo Euro";
    }
    protected function saludo()
    {
        echo " saludo 2";
    }
}

/***la palabra final evita que una clase o metodo pueda ser extendida */
final class Hogar
{
    public $dos;
}

class Depa extends Hogar
{
}

/**Propiedades y metods estáticos */
class Perro
{

    public static $nombre = "nana";

    public static function saludar()
    {
        echo "saludar";
    }

    public function saludo2()
    {
        //$this->nombre; ya no porque es estatico
        echo "hola" . self::$nombre;
    }
}

class Nana extends Perro
{
    public function saludoNana()
    {
        echo "hola" . parent::$nombre;
    }
}

Perro::saludar();


$peruano = new Peruano("s", "a", "l");
$peruano->saludoL();
$peruano->saludo();

$peruano = new Aleman("s", "a", "l");
$peruano->saludoE();
$peruano->saludo();
