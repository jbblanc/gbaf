<?php
require './_db.php';

include('./head.php');
//fetch of the username
$user_name_verif = $pdo->prepare("SELECT COUNT(*) FROM users WHERE user_name = ?");
$user_name_verif->execute([$_POST['user_name']]);
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
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['user_name'],
        $_POST['password'],
        $_POST['question'],
        $_POST['reponse']
    ]);
    $req->closeCursor();//END of the req
    echo 'insert valide';

}








?>
