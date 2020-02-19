<!Doctype html>
<html>
    <head>
        <?php include("./doctype.php");?>
        <title>Connection</title>
    </head>
    
    <body>
        <header>
            <?php include('header.php');?>
        </header>
        <div class="form_connection">
            <form name="connection" method="post" action="./user_page.php">
                <p>UserName</p>
                <input type="text" name="UserName" required/><br/>
                <p>Password</p>
                <input type="password" name="Password" required/><br/>
                <input type="submit" name="valider" value="VALIDER"/>
            </form>
         </div>
        <footer>
            <?php include('footer.php');?>
        </footer>
    </body>
</html>
