<?php
$units = readline("Enter the number of units consumed: ");
$totalBill = 0;

if ($units <= 100) {
    $totalBill = $units * 5;
} elseif ($units <= 200) {
    $totalBill = (100 * 5) + (($units - 100) * 10);
} else {
    $totalBill = (100 * 5) + (100 * 10) + (($units - 200) * 15);
}

echo "Total Bill: $$totalBill\n";
?>