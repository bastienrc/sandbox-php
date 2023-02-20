<?php
require dirname(__DIR__) . '/../env.php';

date_default_timezone_set('Europe/Paris');

try {
    $bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $login, $mdp);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
