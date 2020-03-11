<?php
require './_db.php';

if (!isset($_SESSION['user_is_connected']) || !$_SESSION['user_is_connected'])
{
    header('Location: ./index.php');
}

$_SESSION['id'] = htmlspecialchars($_GET['id']);
//fetch of the actor
$req = $pdo->prepare("SELECT * FROM acteurs WHERE acteur_id = ?");
$req->execute([$_GET['id']]);
$acteur_elt = $req->fetchALL();
$req->closeCursor();
?>

<div id="acteur">
    <?php
    foreach($acteur_elt as $acteur)
    {
    ?>
        <div class="acteur">
            <img class="img_acteurs" src="<?=$acteur['acteur_picture_path']?>" rel="<?=$acteur['acteur_name']?>">
            <h2><?=$acteur['acteur_name']?></h2>
            <h3><?=$acteur['text_contenu']?></h3></br>
        </div></br>
    <?php
    }
?>
