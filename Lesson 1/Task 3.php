<?php
function getRouteAsDirectory($route)
{
    $dir = new DirectoryIterator("$route");
    foreach ($dir as $key) {
        echo $key->getFilename() . PHP_EOL;
    }
}

$s = getRouteAsDirectory("../");
echo $s;