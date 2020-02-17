<!Doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon profile</title>
    </head>
    
    <body>
    <h1>Mon Compte</h1>
    <p>
        <?php
        if (isset($_GET['userFirstName']) AND isset($_GET['userLastName']))
        {
            echo '<p>Bonjour ' . $_GET['userFirstName'] . " ". $_GET['userLastName'] . '</p>';
        } 
        else
        {
            echo 'Connectez-vous pour voir votre profile !';
        }
        ?>
    </p>
    <h4>Se deconnecter</h4>
    </body>

</html>