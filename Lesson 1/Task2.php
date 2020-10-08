
<?php
function generateArray ($number) {
    for ($i = $number; $i > 0; $i--) {
        if ($number % $i == 0) {
            if (isPrime($i)) {
                echo 'Наибольший простой делитель числа ' . $number . ' это ' . $i;
                break;
            }
        }
    }
}

function isPrime ($number) {
    if ($number < 2) {
        return false;
    }

    for($i = 2; $i <= sqrt($number); $i++) {
        if($number % $i == 0) {
            return false;
        }
    }
    return true;
}


$sdf = generateArray(65459871);
