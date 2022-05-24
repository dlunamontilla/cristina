<?php

spl_autoload_register(function (string $className) {
    $path = preg_replace('/\\\/', DIRECTORY_SEPARATOR, $className);

    $path = __DIR__ . "/../$path.php";

    if (!file_exists($path)) {
        echo json_encode(["info" => "El archivo ($path) no existe en la ruta especificada"]);
        exit;
    }

    include $path;
});