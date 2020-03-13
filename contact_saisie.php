<?php
require './_db.php';
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <?php include("./head.php");?>
    </head>

    <body>
        <header>
            <?php include('./header.php');?>
        </header>
        <main style="text-align: center">
            <h1>Message bien reçus</h1>
           
            <?php
                echo '<h4>Votre email : </h4>';
                echo '<p>' . htmlspecialchars($_POST['email']) . '</p>';
                echo  '<h4>Votre message : </h4>';
                echo '<p>' . htmlspecialchars($_POST['message']) . '</p>';
                header('Location: ./index.php');
            ?>
        </main>
        <footer>
            <?php include('./footer.php');?>
        </footer>
    <?php include('./script.php');?> </body>

</html>