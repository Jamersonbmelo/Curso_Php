<?php
function somar($n1, $n2)
{
    $total = $n1 + $n2;
    return $total;
}

// $soma = somar(10, 5);

// echo "Total: " . $soma;


$j = somar(6, 9);
$m = somar(5, 5);

$f = somar($j, $m);
echo $f;