<?php

//Bai 2
require_once 'Controller/Database/DatabaseController.php';


// Bai 3
spl_autoload_register(function($class){
    require  "{$class}.php";
});

// Bai4a
require_once __DIR__.'/vendor/autoload.php';


// bai2, 3
use Controller\Database\DatabaseController;

$db = new DatabaseController;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hì hì hi hi </h1>
</body>
</html>