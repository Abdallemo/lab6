<?php

function calculateArea($width , $length){
    $area = $width * $length;
    return $area;
}

echo "The area of a rectangle with a width of 4 and 10 is ". calculateArea(4,10);
?>