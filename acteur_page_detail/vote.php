<?php
session_start();
require '../_db.php';

if (!isset($_SESSION['user_is_connected']) || !$_SESSION['user_is_connected'])
{
    header('Location: ../index.php');
}

//count nbr of vote 
$req = $pdo->prepare("SELECT COUNT(vote) FROM votes WHERE user_id = ? AND acteur_id = ?");
$req->execute([
    $_SESSION['user_id'],
    $_SESSION['id']
    ]);
$nbr_vote_limit = $req->fetch();
$req->closeCursor();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //verif if not liked or disliked
    if ($nbr_vote_limit[0] < 1)
    {
        //insertthe vote
        $req = $pdo->prepare("INSERT INTO votes SET vote = ?, acteur_id = ?, user_id = ?");
        $req->execute([
            $_POST['vote'],
            $_SESSION['id'],
            $_SESSION['user_id'],
            ]);
        $req->closeCursor();
        header('Location: ./detail_commentaire.php', TRUE, 200);
    }
    else
    {
        //update if already like or dislike
        $req = $pdo->prepare("UPDATE votes SET vote = ? WHERE acteur_id = ? AND user_id = ?");
        $req->execute([
            $_POST['vote'],
            $_SESSION['id'],
            $_SESSION['user_id'],
            ]);
        $req->closeCursor();
        header('Location: ./detail_commentaire.php', TRUE, 200);
    }
}
else 
{
    header('Location: ../index.php');
}
?>