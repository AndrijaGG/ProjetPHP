<?php 
require_once('./connexion.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function request_page(){
    try {
        $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=todo_list', 'postgres', '20122004');
        $query = "SELECT * FROM todos";
        $resultat = $bdd->query($query);

        if ($resultat->rowCount() > 0) {
            echo '<main>';
            echo "<div>";
            while ($afficher = $resultat->fetch(PDO::FETCH_ASSOC)) {
                echo "
                    <h1>" . $afficher['titre'] . "</h1>
                    <h2>" . $afficher['soustitre'] . "</h2>
                    <h3>" . $afficher['contenu'] . "</h3>
                    <h4>" . $afficher['auteur'] . "</h4>
                    <form method='post' action='supprimer'>
                        <input type='hidden' name='todo-supprimer' value='" . $afficher['id_todos'] . "'>
                        <button type='submit' name='supprimer_todo'>Supprimer</button>
                    </form>
                ";
            }
            echo "</div>";
            echo "</main>";
        } else {
            echo "
            <style>
            p {                    
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            padding: 2rem;
            font-size:5rem;
            margin:auto;
            width:81%;
            display:flex;
            justify-content:center
            }
            </style>
            <p>Ajoutez vos To-Do List.</p>";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
        echo "Pas connecté ";
    }
}