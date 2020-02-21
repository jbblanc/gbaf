<?php
session_start();

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
                echo '<h5>Option choisie : ' . $_POST['option']. '</h5>';
                echo  '<h4>Votre message : </h4>';
                echo '<p>' . htmlspecialchars($_POST['message']) . '</p>';
            ?>
        </main>
        <footer>
            <?php include('./footer.php');?>
        </footer>
    </body>

</html>