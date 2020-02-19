<!Doctype html>
<html>
    <head>
        <?php include('./doctype.php');?>
    </head>
    <header>
        <a href="./index.php">
            <img id="img_gbaf" src="https://user.oc-static.com/upload/2019/07/15/15631755744257_LOGO_GBAF_ROUGE%20%281%29.png" 
            alt="Le logo de la GBAF">
        </a>
        <?php 
        $connection = false;
            if ($connection === true)
                echo '<a href="./user_page.php" target="_blank">' . htmlspecialchars($_POST['UserName']) . '</a>'; 
            else
                echo '<a href="./connection.php">Se connecter</a>';
        ?>
    </header>
</html>