<?php
function getMissingNumber ($initialArray = null) {
    $missingResultNumber = 0;
    $realResultNumber = 0;
    for ($i = 0; $i <= count($initialArray); $i++) {
        $missingResultNumber += $initialArray[$i];
    }
    for ($j = 1; $j <= count($initialArray)+1; $j++) {
        $realResultNumber += $j;
    }
    $result = $realResultNumber - $missingResultNumber;
    echo "Пропущенное число: $result" ;

}
//$testArray = array(1,2,3,4,5,6,7,9,10,11,12,13);
//getMissingNumber($testArray);
