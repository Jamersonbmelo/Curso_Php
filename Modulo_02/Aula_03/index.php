<?php

$nome = 'Jamerson';
$sobrenome = ' Melo';






$nomeCompleto = $nome;
$nomeCompleto .= isset($sobrenome) ? $sobrenome : '';

echo $nomeCompleto;