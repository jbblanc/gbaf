<!Doctype html>
<html>
    <head>
        <?php include('./header.php');?>
        <title>Mon profile</title>
    </head>
    
    <body>
    <?php
    $connection = true;
    if ($connection === true)
        {
            echo '<a href="./index.php"><button>Se deconnecter</button></a>';
            echo '<h1>Mon Compte</h1>';
            if (isset($_POST['UserName']) AND isset($_POST['Password']))
                echo '<p>Bonjour ' . htmlspecialchars($_POST['UserName']) . ' '. 'Pass=' . htmlspecialchars($_POST['Password']) . '</p>';
            else
                echo 'Connectez-vous pour voir votre profile !';
        
        }
        else
            echo '<a href="./connection.php"><button>Se connecter</button></a>';
        
    ?>
        <footer>
            <?php include('./footer.php');?>
        </footer>
    </body>

</html>