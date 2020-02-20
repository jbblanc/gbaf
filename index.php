<?php
session_start();
$_SESSION['user'] = [
    'UserName' => 'Abde',
    'Password' => '0000',
    'prenom' => 'abdenour',
    'nom'=> 'bensouna',
];

?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("./head.php"); ?>
    </head>
    
    
    <body>
    <?php include('./header.php'); ?>
        <main>
            <div>
            <article>
                <section class="presentation_gbaf">
                    <?php include('txt_presentation_gbaf.php');?>
                    <img scr="" rel="illustration">
                </section>
                <section>
                    <h2> text acteurs et partenaires</h2>
                </section>
            </div>
           <?php include('./section_acteurs.php'); ?>
            </article>        
        </main>

        <footer>
            <?php include('./footer.php');?>
        </footer>    
    </body>
    
</html>
