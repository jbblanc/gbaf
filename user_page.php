<!Doctype html>
<html>
    <head>
        <?php include('./header.php');?>
        <title>Mon profile</title>
    </head>
    
    <body>
    <h1>Mon Compte</h1>
    <p>
        <?php
        if (isset($_POST['UserName']) AND isset($_POST['Password']))
            echo '<p>Bonjour ' . htmlspecialchars($_POST['UserName']) . ' '. 'Pass=' . htmlspecialchars($_POST['Password']) . '</p>';
        else
            echo 'Connectez-vous pour voir votre profile !';
        ?>
    </p>
    <?php
    if ($connection === true)
        {
            echo '<a href="./index.php"><button>Se deconnecter</button></a>';
        }
    else
        echo '<a href="./connection.php"><button>Se connecter</button></a>';
            ?>
        <footer>
            <?php include('./footer.php');?>
        </footer>
    </body>

</html>