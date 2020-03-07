<?php
require './_db.php';

//fetch of all acteurs
$req = $pdo->query("SELECT * FROM acteurs");
$acteurs = $req->fetchALL();

//creat all divs fot actors

foreach($acteurs as $acteur)
{
?>
    <div class="acteur">
        <img class="img_acteurs" src="<?=$acteur['acteur_picture_path']?>" rel="<?=$acteur['acteur_name']?>">
        <h3><?=$acteur['text_contenu']?></h3></br>
        <button><a href="./detail_acteur.php?id=<?=$acteur['id']?>">lire la suite</a></button>
    </div></br>
<?php
}
?>