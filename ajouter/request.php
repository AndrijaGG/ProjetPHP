<?php
require_once('./connexion.php');
function add_todo($titre, $soustitre, $contenu, $auteur) {
    global $pdo;  
    
    $pdo = new PDO("pgsql:host=localhost;dbname=todo_list;port=5432;","postgres","20122004");

    $insert_query = "INSERT INTO todos (titre, soustitre, contenu, auteur) VALUES (?, ?, ?, ?)";
    $insert = $pdo->prepare($insert_query);
    return $insert->execute([$titre, $soustitre, $contenu, $auteur]);
}
?>
