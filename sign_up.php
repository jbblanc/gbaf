<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=gbaf_bd', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur: '. $e -> getMessage());
}
$users = $bdd -> query('SELECT * FROM user');
while($donnes = $users -> fetch())
    {
        $img = $donnes['profile_picture_path'];    
        echo '<p>' . $donnes['nom']. '</br>' . $donnes['prenom']. '</br>' .$donnes['user_name'] . '</br>' . $donnes['email'] . 
        '</p>' . '<img id="img_profile" style="width: 10%" src="' . $img . '"/>';
    }
    
?>