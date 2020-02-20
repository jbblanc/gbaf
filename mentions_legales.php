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
                <nav class="nav_footer">
                    <p>|
                        <a href="./index.php" target="_blank"> Acceuil </a>| 
                        <a href="./contact.php" target="_blank"> Contact </a> 
                    |</p>
                </nav>
        </footer>
    </body>