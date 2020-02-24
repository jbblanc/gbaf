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
        if ($_POST['UserName'] === 'abde' && $_POST['Password'] === '0000')
        {
            $_SESSION['user'] = [
            'UserName' => 'abde',
            'prenom' => 'abdenour',
            'nom'=> 'bensouna',
            ];
        }
        if (isset($_SESSION['user']['UserName']) && $_SESSION['user']['UserName'] === 'abde')
                {
                    echo '<h1>Mon Compte</h1>';
                    echo '<p>UserName : ' . htmlspecialchars($_SESSION['user']['UserName']) .  '</p>';
                    echo '<p>Nom : ' . htmlspecialchars($_SESSION['user']['nom']) . ' '. 
                    '</br>Prenom : ' . htmlspecialchars($_SESSION['user']['prenom']) . '</p>';
                    echo '<a href="./log_out.php"><button>Se deconnecter</button></a>';
                }
            else
            {
                echo 'Connectez-vous pour voir votre profile !</br>';
                echo '<a href="./sign_in.php"><button>Se connecter</button></a>';
                echo '<a href="./log_out.php"><button>Se deconnecter</button></a>';
            }
        ?>
        </main>
        
        <footer>
            <?php include('./footer.php');?>
        </footer>
    </body>

</html>