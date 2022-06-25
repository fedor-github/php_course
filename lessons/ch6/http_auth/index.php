<?php

function authHeaders() {
    header('http/1.1 401 unauthorized');
    header('WWW-Authenticate: Basic realm="index"');
}

$json = file_get_contents(__DIR__ . '/users.json');
$users = json_decode($json, true);

if (
    !isset($_SERVER['PHP_AUTH_USER'])
    && !isset($_SERVER['PHP_AUTH_PASS'])
) {
    authHeaders();
} else {
    $userName = $_SERVER['PHP_AUTH_USER'];
    if (isset($users[$userName])) {
        require __DIR__ . '/greeting.php';
    } else {
        authHeaders();
    }
}
