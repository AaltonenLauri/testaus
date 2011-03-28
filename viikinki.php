<?php

function getAdder($x) {
    return function ($y) use ($x) {
        return $x + $y;
    };
}
 
$adder = getAdder(8);
echo $adder(2); // prints "10"

?>