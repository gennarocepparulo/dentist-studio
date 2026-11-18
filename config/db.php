<?php

$host = "localhost";
$dbname = "dentist_studio";
$user = "gennaro_admin";
$password = "Gennaro17!";

try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $password
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch(PDOException $e) {

    die("Errore DB: " . $e->getMessage());

}