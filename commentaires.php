<?php
require '_db.php';
$vote = true;
if (isset($_SESSION['user_id']))
{
    $req = $pdo->prepare("SELECT * FROM votes WHERE ref = ? AND ref_id = ? AND user_id = ?");    
    $req->execute(['articles', $_GET['id'], $_SESSION['user_id']]);
    $vote = $req->fetch();
    var_dump($vote);
}
$req = $pdo->prepare("SELECT * FROM acteurs WHERE acteur_id = ?");
$req->execute([$_GET['id']]);
$post = $req->fetch();

?>

 <head>
     <?php include('./head.php');?>
 </head>
 
 <?php
    $nbr_coms = 3;
    echo '<h3>' . 'commentaires<h3>';
    echo '<button class="btn_commentaire">Nouveau commentaire</button>';
    
    $nbr_likes = 0;
    $nbr_dislikes = 0; 
    echo '<a href="?click=1"><button class="btn likes">' . $nbr_likes . '</button></a>';
    if (isset($_GET["click"]) AND $nbr_likes < 100)  
    {
	    $nbr_likes += 1;
	    echo "<div id='nbr_likes'>" . $nbr_likes . "</div>";
	}
    echo '<a href="?click=1"><button class="btn dislikes">' . $nbr_dislikes . '</button></a>';
    if (isset($_GET["click"])) 
    {
	    $nbr_dislikes += 1;
	    echo "<div id='nbr_dislikes'>" . $nbr_dislikes . "</div>";
    }
?>
 
     <div class="vote <?= Vote::getClass($vote);?>">
         <button class="vote_btn vote_likes"><span><i class="fas fa-thumbs-up"> <?= $_POST->like_count?></i></span></button>
         <button class="vote_btn vote_dislikes"></span><i class="fas fa-thumbs-down"> <?= $_POST->dislike_count ?></i></span></button>
     </div>

    <footer>
        <?php include('./footer/php');?>
    </footer>