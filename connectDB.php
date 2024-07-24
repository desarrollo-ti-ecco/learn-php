<?php

function connect_db()
{
    $server = 'localhost';
    $dbname = 'school';
    $user = 'root';
    $password = '';

    $mysqli = new mysqli($server, $user, $password, $dbname);

    /* test connection */
    if ($mysqli->connect_errno) {
        printf("Failed connection: %s\n", $mysqli->connect_error);
        exit();
    }

    return $mysqli;
}