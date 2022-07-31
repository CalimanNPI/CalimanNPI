<?php

include_once 'clases/personas.php';

$persona = new Personas('carlos', 'mendoza', 24);
echo $persona->getNombre();
/**$persona->nombre = 'carlos';
 $persona->apellido = 'carlos';
 $persona->edad = 'carlos';*/

$peruano = new Chlileno('carlos', 'mendoza', 24);
$peruano->setNombre('Jose');
$peruano->setRegion('Ecatepunk');

echo $peruano->getNombre() . "esta en " . $peruano->getRegion();



var_dump($persona);
