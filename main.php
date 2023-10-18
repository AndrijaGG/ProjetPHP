<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
function router() {
    $route = $_SERVER['REQUEST_URI'];
    if ($route === '/') {
        require_once('./page/controller.php');
        controller_page();
        return;
    }
    if ($route === '/ajouter') {
        require_once('./ajouter/controller.php');
        controller_ajouter();
        return;
    }
    if ($route === '/contact') {
        require_once('./contact/controller.php');
        controller_contact();
        return;
    }
    if ($route === '/supprimer') {
        require_once('./supprimer.php');
        supprimer();
        return;
    }
    echo 'ERREUR';
}
router();
