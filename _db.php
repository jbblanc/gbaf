<?php
try 
{
    $pdo = new PDO('mysql:host=localhost;dbname=gbaf_bd', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : ' .$e -> getMessage());
}

if(isset($_GET['user']))
{
    $_SESSION['user_id'] = $_GET['user'];
}

?>