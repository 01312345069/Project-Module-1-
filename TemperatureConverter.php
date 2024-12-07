<?php
define("CELSIUS_TO_FAHRENHEIT", 1);
define("FAHRENHEIT_TO_CELSIUS", 2);

echo "Choose the type of conversion:\n";
echo "1. Celsius to Fahrenheit\n";
echo "2. Fahrenheit to Celsius\n";

$choice = readline("Enter your choice (1 or 2): ");

$temp = readline("Enter the temperature value: ");

switch ($choice) {
    case CELSIUS_TO_FAHRENHEIT:
        $convertedTemp = ($temp * 9 / 5) + 32;
        echo "$temp Celsius is equal to $convertedTemp Fahrenheit.\n";
        break;
    case FAHRENHEIT_TO_CELSIUS:
        $convertedTemp = ($temp - 32) * 5 / 9;
        echo "$temp Fahrenheit is equal to $convertedTemp Celsius.\n";
        break;
    default:
        echo "Invalid choice! Please select 1 or 2.\n";
        break;
}
?>