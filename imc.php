<?php
$peso = 160;
$altura = 1.65;

$imc = $peso / ($altura**2);

echo "Seu imc é $imc" . PHP_EOL;

if ($imc < 18.5) {
    echo "Abaixo do peso." . PHP_EOL;
} else if ($imc < 25) {
    echo "Peso normal." . PHP_EOL;
} else {
    echo "Sobrepeso." . PHP_EOL;
}