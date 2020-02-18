<!Doctype html>
<html>
    <head>
        <?php include("../doctype.php");?>
        <title>Contact</title>
    </head>
    <header>
        <a href="../index.php" target="_blank">"logo GBAF"</a>
        <?php 
        $connection = true;
        $userFirstName = "abde";
        $userLastName = "ben";
            if ($connection === true)
                echo '<a href="routes/user_page.php" target="_blank">' . '$userFirstName' . '$userFirstName' . '</a>'; 
            else
                echo '<a href="connection.php" target="_blank">Se connecter</a>';
        ?>
    </header>
</html>