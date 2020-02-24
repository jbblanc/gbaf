<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("./head.php");?>
    </head>
    
    <body>
        <header>
            <?php include('./header.php');?>
        </header>

        <main>
            <div class="form_sign_in" style="text-align: center">
                <form name="sign_in" method="post" action="./user_page.php">
                    <p>UserName</p>
                    <input type="text" name="UserName" required/></br>
                    <p>Password</p>
                    <input type="password" name="Password" required/></br>
                    <button type="submit" name="valider" style="font-size: calc(0.4vw + 0.9vh);
                     margin-top: 0.5rem; border-radius: 2rem; height: 1rem; width: 6rem">VALIDER</button>
                </form>
            </div>
        </main>

        <footer>
            <?php include('footer.php');?>
        </footer>
    </body>
</html>
