#!/usr/bin/env php

<?php
echo "Введите число" . PHP_EOL;

$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));

if (ctype_digit($a)) {
    if (ctype_digit($b) ) {
        if ($b != 0 && ctype_digit($a)) {
            fwrite(STDOUT, "Результат вычисления: " . $a/$b);
        } else fwrite(STDERR, "Делить на 0 нельзя" . PHP_EOL);
    } else fwrite(STDERR, "Введите, пожалуйста, число b" . PHP_EOL);
} else fwrite(STDERR, "Введите, пожалуйста, число a" . PHP_EOL);