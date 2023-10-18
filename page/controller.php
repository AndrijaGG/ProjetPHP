<?php
require ('.\page\request.php');
require ('.\page\view.php');
function controller_page(){
    $vue = page_view();

    $todos = request_page();
    echo $todos;
    echo $vue;
}
