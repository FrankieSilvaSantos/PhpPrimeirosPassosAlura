<?php

$idade = 17;
$numeroDePessoas = 2;

echo "Só pode entrar a partir dos 18 anos ou apartir de 16 acompanhado", PHP_EOL, PHP_EOL;

if ($idade >= 18) {
    echo "voce tem: $idade \n pode entrar sozinho ^-^";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade e está acompanhade, pode entrar :c";
} else {
    echo "Voce só tem: $idade anos. Não pode entrar :c";
}

echo PHP_EOL, "Adios o/";