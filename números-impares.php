<?php

for ($num = 0; $num <= 100; $num++) {
    if ($num% 2!= 0) {
        echo "$num é impar" . PHP_EOL;
    } else {
        continue;
    }
}