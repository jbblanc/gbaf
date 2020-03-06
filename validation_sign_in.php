<?php
session_start();
require '_db.php';

//rq->fech()($_POST['user_name'] && $_POST['password'])
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $req = $pdo->prepare("SELECT user_id, user_name, nom, prenom FROM users WHERE user_name = ? AND password = ?");
    $req->execute([
        $_POST['user_name'],
        $_POST['password']
        ]);
    $user_data = $req->fetch();
    
    if (isset($user_data['user_id']))
    {
        // add user data to session id nom prenom
        $_SESSION['user_id'] = $user_data['user_id'];
        $_SESSION['nom'] = $user_data['nom'];
        $_SESSION['prenom'] = $user_data['prenom'];
        $_SESSION['user_name'] = $user_data['user_name'];
        $_SESSION['user_is_connected'] = true;
        //redirection
        header('Location: home.php');
    }
    else 
    {
        header('Location: index.php');
    }
    
}
else 
{
    header('Location: index.php');
}
?>