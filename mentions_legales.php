<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <?php include('./head.php');?>
    </head>
    
    <body>
        <header>
            <?php include('./header.php');?>
        </header>

        <div class="main_section">
            <?php include('./txt_mentions_legales.php');?>
        </div>

        <footer>
        <hr>
                <nav class="nav_footer">
                    <p>|
                        <a href="./index.php"> Acceuil </a>| 
                        <a href="./contact.php"> Contact </a> 
                    |</p>
                </nav>
        </footer>
    </body>