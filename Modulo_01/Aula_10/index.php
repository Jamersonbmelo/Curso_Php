<?php
$lista1 = ['Jamerson', 'Bezerra', 'de', 'Melo'];
$lista2 = ['tem', '36', 'anos'];
$lista3 = [...$lista1, ...$lista2];

print_r($lista3);