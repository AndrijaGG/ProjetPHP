<?php
require_once('./ajouter/request.php');
require_once('./ajouter/view.php');

function controller_ajouter() {
    $vue = ajouter_view();
    echo $vue;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        var_dump($_POST);

        $titre = $_POST["titre"];
        $soustitre = $_POST["soustitre"];
        $contenu = $_POST["contenu"];
        $auteur = $_POST["auteur"];
    
        if (add_todo($titre, $soustitre, $contenu, $auteur)) {
            header("Location: /ajouter");
        } else {
            echo "Erreur.";
        }
    }
}
?>
