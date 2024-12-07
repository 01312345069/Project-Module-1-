<?php
$number = readline("Enter a number: ");

if ($number > 0) {
    echo "The number $number is positive.\n";
} elseif ($number < 0) {
    echo "The number $number is negative.\n";
} else {
    echo "The number is zero.\n";
}
?>