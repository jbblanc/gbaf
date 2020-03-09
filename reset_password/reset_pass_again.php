<?php
session_start();
require '../_db.php';

//updape after form
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $new_password = htmlspecialchars($_POST['new_password']);
    $again_password = htmlspecialchars($_POST['again_password']);
    
    if ($new_password == $again_password)
    {
        echo ' post reponse == db reponse //';
        $password_update = $pdo->prepare("UPDATE users SET password = ? WHERE user_name = ? AND question = ? AND reponse = ?");
        $password_update->execute([
            htmlspecialchars($again_password),
            htmlspecialchars($_SESSION['user_name']),
            htmlspecialchars($_SESSION['question']),
            htmlspecialchars($_SESSION['reponse'])
        ]);
    }
    header('Location: ../sign_in.php');
}
?>