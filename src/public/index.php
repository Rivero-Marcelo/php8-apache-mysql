<?php
use src\Controller\LoginController;

require "../vendor/autoload.php";


$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

include "../config/config.php"; 



echo "<br>";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - APACHE - COMPOSER - XDEBUG</title>
</head>
<body>

<?php

$l = new LoginController();
$l->index();

echo "<br>";

$db = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);

echo "<pre>";
echo $db->client_info; 
echo "<br>";
//var_dump($dotenv);

echo "</pre>";

echo "<br>";

 phpinfo(); 

 ?>
 </body>
</html>
