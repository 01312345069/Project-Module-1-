<?php
define("USERNAME", "admin");
define("PASSWORD", "1234");

$inputUsername = readline("Enter username: ");
$inputPassword = readline("Enter password: ");

if ($inputUsername === USERNAME && $inputPassword === PASSWORD) {
    echo "Login successful! Welcome, " . USERNAME . ".\n";
} else {
    echo "Login failed! Invalid username or password.\n";
}
?>