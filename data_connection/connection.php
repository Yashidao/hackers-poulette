<?php
$user = 'root';
$pass = '';

try {
    $db = new PDO('mysql:host=localhost;dbname=hackeuse_poulette;charset=utf8', $user, $pass);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
