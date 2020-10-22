<?php

function binarySearch($myArray, $num)
{
    $start = 0;
    $end = count($myArray) - 1;
    $n = 0;

    while ($start <= $end) {
        if ($myArray[0] = count($myArray)-1) {
            echo "Массив повторяется числом $myArray[0]";
            return $myArray[0];
        }
        $n++;

        $base = floor(($start + $end) / 2);

        if ($myArray[$base] == $num) {
            echo "Количество итераций: $n искомого числа $num под индексом $base" . PHP_EOL;
            return $base;
        } elseif ($myArray[$base] < $num) {
            $start = $base + 1;
        } elseif ($myArray[$base] > $num) {
            $end = $base - 1;
        }
    }
    echo "Число не найдено";
    return null;
}

$s = array(1, 4, 7, 9, 14, 18, 22);
binarySearch($s, 7);