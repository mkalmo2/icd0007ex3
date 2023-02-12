<?php

ini_set('display_errors', '1');

// require_once '../ex1/ex7.php';

$command = $_POST['command'] ?? 'show-form';

if ($command === 'show-form') {

    include 'pages/days-under-temp.php';

} else if ($command === 'days-under-temp') {

    $message = "Hello!";

    include 'pages/result.php';

} else {
    throw new Error('unknown command: ' . $command);
}

