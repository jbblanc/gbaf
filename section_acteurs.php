<?php
require './_db.php';

//fetch of all acteurs
$req = $pdo->query("SELECT * FROM acteurs");
$acteurs = $req->fetchALL();
$req->closeCursor();
//creat all divs fot actors

foreach($acteurs as $acteur)
{
?>
    <div class="row">
        <div class="col-sm-12">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-5 shadow-sm h-sm-100 position-relative">
                <div class="col-sm-6 d-sm-block">
                    <img class="bd-placeholder-img" width="100%" height="100%" src="<?=$acteur['acteur_picture_path']?>" rel="<?=$acteur['acteur_name']?>">
                </div>
                <div class="col-sm-6 p-4 d-flex flex-column position-static">
                    <h3 class="mb-0"><?=$acteur['acteur_name']?></h3>              
                    <p class="card-text mb-auto"><?=substr($acteur['text_contenu'], 0, 150);?><a href="./acteur_page.php?id=<?=$acteur['acteur_id']?>"> ...</a></p>
                    <a class="btn btn-sm btn-outline-secondary" href="./acteur_page.php?id=<?=$acteur['acteur_id']?>">lire la suite</a>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>