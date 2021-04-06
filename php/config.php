<?php
try {
    $db = new PDO('mysql:host=localhost; dbname=inventariosita', 'root', '123456', array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'
    ));
}
catch(PDOException $e) {
    echo $e->getMessage();
};
?>
