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
        <main>
            <h1>Message bien reçus</h1>
            <?php
            echo '<p>' . htmlspecialchars($_POST['contact']) . '</p>';
            ?>
        </main>
        <footer>
            <?php include('./footer.php');?>
        </footer>
    </body>

</html>