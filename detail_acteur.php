<?php
require './_db.php';
session_start();

if (!isset($_SESSION['user_is_connected']) || !$_SESSION['user_is_connected'])
{
    header('Location: index.php');
}


//fetch of the actor
$req = $pdo->prepare("SELECT * FROM acteurs WHERE id = ?");
$req->execute([$_GET['id']]);
$acteur_elt = $req->fetchALL();
$req->closeCursor();


?>

<!DOCTYPE html>
<html>
    <head>
        <?php include("./head.php"); ?>
    </head>
    
    <body>
        <?php include('./header.php'); ?>
        <main>
            <div id="acteur">
                <p>acteurs</p>
                <?php
                foreach($acteur_elt as $acteur)
                {
                ?>
                    <div class="acteur">
                        <img class="img_acteurs" src="<?=$acteur['acteur_picture_path']?>" rel="<?=$acteur['acteur_name']?>">
                        <h3><?=$acteur['text_contenu']?></h3></br>
                    </div></br>
                <?php
                }
                ?>
            </div>
            <div id="commentaires">
                <p>commentaires</p>
            </div>
        </main>
        <footer>
            <?php include('./footer.php');?>
        </footer> 
    </body>    
</html>