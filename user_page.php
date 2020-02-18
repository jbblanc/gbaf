<!Doctype html>
<html>
    <head>
        <?php include("./header.php");?>
        <title>Mon profile</title>
    </head>
    
    <body>
    <h1>Mon Compte</h1>
    <p>
        <?php
        $userFirstName = "abde";
        $userLastName = "ben";
        if (isset($_GET['$userFirstName']) AND isset($_GET['$userLastName']))
            echo '<p>Bonjour ' . $_GET['userFirstName'] . ' '. $_GET['userLastName'] . '</p>';
        else
            echo 'Connectez-vous pour voir votre profile !';
        ?>
    </p>
    <?php
    if ($connection === true)
        echo '<button>Se deconnecter</button>';
    else
        echo '<a href="./connection.php" target="_blank">Se connecter</a>';
            ?>
    </body>

</html>