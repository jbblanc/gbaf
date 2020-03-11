<?php
require '_db.php';

if (!isset($_SESSION['user_is_connected']) || !$_SESSION['user_is_connected'])
{
    header('Location: ./index.php');
}
//$req = $pdo->prepare("SELECT COUNT()");
$req = $pdo->prepare("SELECT COUNT(acteur_id) FROM articles WHERE acteur_id = ?");
$req->execute([$_SESSION['id']]);
$nbr_total_comments = $req->fetch();
$req->closeCursor();

$req = $pdo->prepare("SELECT user_id, com, date FROM articles WHERE acteur_id = ?");
$req->execute([$_SESSION['id']]);
$comments_data = $req->fetchALL();
$req->closeCursor();



?>
<div class="commentaires">
    <h3><?=$nbr_total_comments[0]?> Commentaires</h3>
    <a href=".php"><button>Nouveau commentaire</button></a>
    <button>5</button><button>0</button>

    <?php
    foreach($comments_data as $com)
    {
        $req = $pdo->prepare("SELECT user_name FROM users WHERE user_id = ?");
        $req->execute([$com['user_id']]);
        $user_name = $req->fetchALL();
        $req->closeCursor();
    ?>
    <article>
        <?php
        foreach($user_name as $user)
        {
        ?>
            <p><?=$user['user_name']?></p>
        <?php
        }
        ?>
        <p><?=$com['date']?></p>
        <p><?=$com['com']?></p>
    </article>
</div>
<?php
    }
?>

<!-- 
add com     
INSERT INTO `articles` (`article_id`, `com`, `date`, `acteur_id`, `user_id`) VALUES (NULL, 'bon ', CURRENT_TIMESTAMP, '1', '25'); 
-->