<!Doctype html>
<html>
    <head>
        <?php include("./doctype.php");?>
        <title>Connection</title>
    </head>
    
    <body>
        <form name="connection" method="POST" action="./connection_saisie.php">
                <p>Nom <input type="text" name="userLastName" required/> <br/></p>
                <p>Prénom <input type="text" name="userFirstName" required/> <br/></p>
                <p>Mot de pass <input type="password" name="password" required/><br/></p>
                <input type="submit" name="valider" value="VALIDER"/>
        </form>
    </body>
</html>
