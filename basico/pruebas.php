<?php

/**Vocales */
function contarVocales(string $cadena)
{
    $vocalesEncontradas = 0;

    $cadena = strtolower($cadena);
    $longitud = mb_strlen($cadena);

    for ($indice = 0; $indice < $longitud; $indice++) {

        if (in_array($cadena[$indice], ["a", "e", "i", "o", "u"])) {
            $vocalesEncontradas++;
        }
    }
    return $vocalesEncontradas;
}


/**Factorial */
function factorialR($num)
{
    if ($num < 1) {
        return 1;
    } else {
        return  $num * factorialR($num - 1);
    }
}

function factorial($num)
{
    $resultado = 1;
    for ($i = 1; $i <= $num; $i++) {
        $resultado = $resultado * $i;
    }
    return "El factorial de $num es: $resultado";
}


/**Fibonacci */
function FibonacciR($number)
{

    if ($number == 0)
        return 0;
    else if ($number == 1)
        return 1;
    else
        return (FibonacciR($number - 1) +
            FibonacciR($number - 2));
}

$number = 10;
for ($counter = 0; $counter < $number; $counter++) {
    echo FibonacciR($counter), ' ';
}
echo '<br>';

function fibonacci($n)
{
    $fibonacci  = [0, 1];

    for ($i = 2; $i <= $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    echo $fibonacci[$n];
}


///Fizz Buzz
function FizzBuzz()
{
    for ($i = 1; $i < 101; $i++) {
        $result = "";
        if ($i % 3 == 0) {
            $result .= "Fizz";
        }
        if ($i % 5 == 0) {
            $result .= "Buzz";
        }
        echo "<br>";
        echo  $result ? $result : $i;
    }
}

/*echo contarVocales('carlos') . 'vocales <br>';
echo factorial(6) . 'factorial <br>';
echo factorialR(6) . '<br>';
echo fibonacci(9) . ' fibo<br>';
echo FibonacciR($counter) . ' fiboR<br>';

FizzBuzz();*/
