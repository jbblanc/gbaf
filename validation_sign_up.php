<?php
require './_db.php';

include('./head.php');
//fetch of the username
$user_name_verif = $pdo->prepare("SELECT COUNT(*) FROM users WHERE user_name = ?");
$user_name_verif->execute([htmlspecialchars($_POST['user_name'])]);
$nbr_u_n_v = $user_name_verif->fetch();

//verification if username does exist
if ($nbr_u_n_v[0] > 0)
{
    echo 'username deja utiliser</br>';
   
    header('Location: ./sign_up.php');
}
else
{
    $req = $pdo->prepare("INSERT INTO users SET nom = ?, prenom = ?, user_name = ?, password = ?, question = ?, reponse = ?");
    $req->execute([
        htmlspecialchars($_POST['nom']),
        htmlspecialchars($_POST['prenom']),
        htmlspecialchars($_POST['user_name']),
        htmlspecialchars($_POST['password']),
        htmlspecialchars($_POST['question']),
        htmlspecialchars($_POST['reponse'])
    ]);
    $req->closeCursor();//END of the req
    echo 'insert valide';

}








?>
