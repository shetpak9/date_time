<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
    "/date_time/" => "create.php",
    "/date_time/write" => "write.php",
];

if(array_key_exists($path, $routes)){
    require $routes[$path];
}