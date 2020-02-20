<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <?php include('./head.php');?>
    </head>
    
    <body>
        <header>
            <?php include('./header.php');?>
        </header>

        <main>
        <?php
        $connection = true;
        if ($connection === true)
            {
                echo '<h1>Mon Compte</h1>';
                if (isset($_SESSION['user']['UserName']) AND isset($_SESSION['user']['Password']))
                {
                    echo '<p>UserName : ' . htmlspecialchars($_SESSION['user']['UserName']) . ' '. '</br>Password : ' . htmlspecialchars($_SESSION['user']['Password']) . '</p>';
                    echo '<p>Nom : ' . htmlspecialchars($_SESSION['user']['nom']) . ' '. '</br>Prenom : ' . htmlspecialchars($_SESSION['user']['prenom']) . '</p>';
                    echo '<a href="./index.php"><button>Se deconnecter</button></a>';
                    // if (button'se_deconnecter='on')
                    // {
                    //     session_destroy();
                    // }
                }
            }
            else
            {
                echo 'Connectez-vous pour voir votre profile !</br>';
                echo '<a href="./connection.php"><button>Se connecter</button></a>';
            }
        ?>
        </main>
        
        <footer>
            <?php include('./footer.php');?>
        </footer>
    </body>

</html>