<?php
$peso = 3;
$altura = 40;

$imc = $peso / ($altura**2);

echo "Seu imc é $imc" . PHP_EOL;

if ($imc < 18.5) {
    echo "Abaixo do peso." . PHP_EOL;

} else if ($imc < 24.9) {
    echo "Peso normal." . PHP_EOL;
    } else if ($imc < 29.9) {
    echo "Sobrepeso." . PHP_EOL;
        } else if ($imc < 34.9) {
            echo "Obesidade grau I." . PHP_EOL;
            } else if ($imc < 39.9) {
                echo "Obesidade grau II." . PHP_EOL;
            } else {
                    echo "Obesidade grau III" . PHP_EOL;
                }
        