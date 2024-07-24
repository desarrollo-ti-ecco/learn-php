<?php

function connect_db()
{
    $server = 'localhost';
    $dbname = 'school';
    $user = 'root';
    $password = '';

    $mysqli = new mysqli($server, $user, $password, $dbname);

}