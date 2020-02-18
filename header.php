<!Doctype html>
<html>
    <head>
        <?php include("./doctype.php");?>
    </head>
    <header>
        <a href="./index.php">"logo GBAF"</a>
        <?php 
        $connection = true;
        $userFirstName = "abde";
        $userLastName = "ben";
            if ($connection === true)
                echo '<a href="./user_page.php" target="_blank">' . $userFirstName . ' ' .$userLastName . '</a>'; 
            else
                echo '<a href="./connection.php" target="_blank">Se connecter</a>';
        ?>
    </header>
</html>