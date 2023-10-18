<?php
require_once('./connexion.php');

function supprimer() {
if (isset($_POST['todo-supprimer'])) {
    $id_todos = $_POST['todo-supprimer'];
    $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=todo_list', 'postgres', '20122004');
    $delete_query = "DELETE FROM todos WHERE id_todos = ?";
    $delete = $bdd->prepare($delete_query);
    $delete->execute([$id_todos]);
    
    if ($delete->rowCount() > 0) {
        echo "Tâche supprimée.";
    } else {
        echo "Aucune tâche trouvée avec cet ID.";
    }
    header("Location: ./");
} 
}