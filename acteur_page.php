<?php
session_start();
if (!isset($_SESSION['user_is_connected']) || !$_SESSION['user_is_connected'])
{
    header('Location: ./index.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("./head.php"); ?>
    </head>
    
    <body>
        <?php include('./header.php'); ?>
        <main>
            <?php include('./acteur_page_detail/detail_acteur.php');?>
            <?php include('./acteur_page_detail/detail_commentaire.php');?>
        </main>
        <footer>
            <?php include('./footer.php');?>
        </footer> 
    <?php include('./script.php');?> </body>    
</html>