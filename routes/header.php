<!Doctype html>
<html>
<header>
    <a href="index.php" target="_blank">"logo GBAF"</a>
    <?php 
    $connection = false;
        if (connection === true)
        {
            echo $_GET['userFirstName'] . ' ' . $_GET['userLastName'];
        }
        else
        {
            echo '<a href="routes/connection.php">Se connecter</a>';
        }
    ?>
    <a href="routes/user_page.php" target="_blank">$user_NAME&PREMON</a>
</header>
</html>