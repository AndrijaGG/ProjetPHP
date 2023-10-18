<?php 

function ajouter_view() {
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Ajouter une tâche</title>
        <style>
        /* Styles globaux */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: whitesmoke;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 2rem 0;
        }

        nav ul {
            padding: 0;
            list-style-type: none;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: blue;
        }


        /* style formulaire */
        form {
            max-width: 50%;
            margin: 2rem auto;
            padding: 10rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        form input[type="text"], 
        form textarea {
            width: 100%;
            padding: 1em;
            margin-bottom: 2rem;
            margin-right: 5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        form input[type="submit"] {
            background-color: blue;
            color: white;
            border: none;
            padding: 0.8rem 1.5rem;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        form input[type="submit"]:hover {
            background-color: black;
        }

    </style>
    </head>
    <body>
    <header>
    <nav>
      <ul>
            <li><a href="/">Page Principale</a></li>
            <li><a href="/ajouter">Ajouter</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
            </header>
        <form action="/ajouter" method="post">
        Titre: <input type="text" name="titre" required><br>
        Sous-titre: <input type="text" name="soustitre"><br>
        Contenu: <textarea name="contenu" required></textarea><br>
        Auteur: <input type="text" name="auteur" required><br>
        <input type="submit" value="Ajouter">
    </form>
    </body>
    </html>
    ';
}
?>
