#!/usr/bin/env php

<?php
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));



if (is_numeric($a) ) {
    fwrite(STDERR, "Введите, пожалуйста, число a" . PHP_EOL);
} else fwrite(STDOUT, $a . PHP_EOL);

if (is_numeric($b) ) {
    fwrite(STDERR, "Введите, пожалуйста, число b" . PHP_EOL);
} else fwrite(STDOUT, $b . PHP_EOL);


// if (is_string($a)) {
//     echo "Введите, пожалуйста, число" . PHP_EOL;
// }

// if ($b === 0) {
//     echo "Делить на 0 нельзя\n" . PHP_EOL;
// }

// fwrite(STDOUT, "Результат вычисления: " . $a*$b);

// foreach ($array as $value) {
//     if (is_string($value)) {
//         echo "Введите, пожалуйста, число" . PHP_EOL;
//     }
//     //echo "$value" . PHP_EOL;
// }

// // for ($i = 0; $i < count($array); $i++) {
// //     if (is_int($array)) {
// //         fwrite(STDERR, "Введите, пожалуйста, число\n");
// //     }
// //     echo ($array)[$i] . PHP_EOL;
// // }

// for ($i = 0; $i < count($array); $i++) {
//     if ($array === "0") {
//         fwrite(STDERR, "Делить на 0 нельзя\n");
//         echo "Делить на 0 нельзя\n" . PHP_EOL;
//     }
//     //echo ($array)[$i] . PHP_EOL;
// }






//fwrite(STDOUT, "Результат вычисления: " . $array[0]+$array[1]);



// if (!is_int($variable1)) {

    //     echo 'Введите, пожалуйста, число';
    // };

    // if ($variable2 == 0) {
    //     echo 'Делить на 0 нельзя';
    // };
    //$variable3 = $variable1 / $variable2;
    //echo $variable3;



//echo "Введите первое число:\n";

 //do {
//   $a = trim(fgets(STDIN));
   //if (ctype_digit($a) === false) {
   //fwrite(STDERR, "Введите, пожалуйста, число\n");
   //}
 //} while (ctype_digit($a) === false);

 //echo "Введите второе число:\n";

// do {
//   $b = trim(fgets(STDIN));
//
//   if ((int)$b === 0) {
//     fwrite(STDERR, "Делить на 0 нельзя\n");
//     $b = trim(fgets(STDIN));
//   }
//   if (ctype_digit($b) === false) {
//   fwrite(STDERR, "Введите, пожалуйста, число\n");
//   }
// }
//   while ((int)$b === 0 || ctype_digit($b) === false);

// fwrite(STDOUT, "Результат вычисления: " . $a/$b);


//echo "Введите первое число:\n";
