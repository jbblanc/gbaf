<?php
session_start();

?>

<!DOCTYPE html>
<html>
    <div>
    <?php
    $nbrComs = 3;
    echo '<h3>' . 'commentaires<h3>';
    echo '<button class="btn commentaire">Nouveau commentaire</button>';
    
    $nbrLikes = 5; 
    echo '<button class="btn likes">' . $_GET['$nbrLikes'] . '</button>';
    ?>

    </div>
</html>
