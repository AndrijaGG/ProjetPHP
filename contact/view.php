<?php 

function contact_view() {
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Contact</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 40px;
                background-color: #f7f7f7;
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
    
            main {
                background-color: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
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
    <main>
        <h1>Informations de contact</h1>
        <p><strong>Nom :</strong> Tomic Andrija</p>
        <p><strong>Email :</strong> andrija.tomic@efrei.net</p>
        <p><strong>Téléphone :</strong> 01 23 45 67 89</p>
        <p><strong>Adresse :</strong> 123 rue du bourbier, Aulnay Sous Bois</p>
    </main>
    </body>
    </html>
    ';
}

?>
