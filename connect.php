<?php
//connect.php

define('USER','root');
define('PASSWORD','');
define('HOST','localhost');//ip address 
define('DB','Streaming2');//database name
$directory1 = "Movies/";//directory with the folders of the film
$option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try
{
    $pdo = new PDO(
    "mysql:host=" .HOST .";dbname=" .DB,
USER,
PASSWORD,  
$option
);  
   // $pdo -> exec ("RENAME TABLE `stuff` TO `libri`");
    
}

catch(PDOException $e){
    echo 'Error : '.$e-> getMessage();
}

?>