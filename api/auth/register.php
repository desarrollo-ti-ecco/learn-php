<?php
include '../../connectDB.php';

function safe_fields(array $fields)
{
    $safe = [];
    foreach ($fields as $key => $field) {
        $safe[$key] = htmlspecialchars($field);
    }

    return $safe;
}

$request = safe_fields($_POST);

['name' => $name, 'email' => $email, 'password' => $password] = $request;

$result = connect_db()->query("INSERT INTO users (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')");

if ($result == true) {
    header("Location: /index.php");
    die();
} else {
    header("Location: /register.php");
    die();
}