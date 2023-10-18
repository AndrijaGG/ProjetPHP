<?php 

require_once('./connexion.php');  
require_once('./page/request.php');  // Incluez le fichier request.php

function page_view() {
    echo ' 
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>To-Do-List</title>
            <style>
            body {
                font-family: Arial, sans-serif;
                background-color: whitesmoke;
                padding: 2rem;
            }
    
            main {
                background-color: #ffffff;
                border-radius: 5px;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
                padding: 1rem 2rem;
                margin: 2rem auto;
                max-width: 800px;
            }
    
            h1, h2, h3, h4 {
                margin: 0.5rem 0;
            }
    
            h1 {
                color: #2c3e50;
            }
    
            h2 {
                color: #34495e;
            }
    
            h3 {
                color: #7f8c8d;
            }
    
            h4 {
                color: #95a5a6;
                margin-bottom: 1rem;
            }
    
            form {
                margin: 1rem 0;
            }
    
            button {
                background-color: blue;
                color: #ffffff;
                border: none;
                padding: 0.5rem 1rem;
                border-radius: 5px;
                cursor: pointer;
            }
    
            button:hover {
                background-color: black;
                transition: background-color 0.3s;
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
    ';
}