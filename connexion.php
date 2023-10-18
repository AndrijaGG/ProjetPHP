<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$username = "postgres";
$password = "20122004";

try {
    $pdo = new PDO("pgsql:host=localhost;dbname=todo_list;port=5432;", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}