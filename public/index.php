<?php
require __DIR__ . '/../src/router.php';

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

switch ($method) {
    case 'GET':
        get($uri);
        break;

    case 'POST':
        post($uri);
        break;
    
    default:
        badRequest();
        break;
}



?>