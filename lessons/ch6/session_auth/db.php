<?php


function readDb()
{
    $json = file_get_contents(__DIR__ . '/users.json');
    if (empty($json)) {
        $users = [];
    } else {
        $users = json_decode($json, true);
    }

    if (!is_array($users)) {
        $users = [];
    }

    return $users;
}

function writeDb($data)
{
    if (!is_array($data)) {
        error_log('Invalid data - array expected');
        throw new Error('Db error');
    }
    file_put_contents(__DIR__ . '/users.json', json_encode($data, JSON_PRETTY_PRINT));
}
