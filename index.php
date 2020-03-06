<?php
session_start();

if (isset($_SESSION['user_is_connected']) && $_SESSION['user_is_connected'])
{
    header('Location: home.php');
}
    

else
    {
?>     
        <!DOCTYPE html>
            <html>
                <head>
                    <?php include("./head.php"); ?>
                </head>
                
                <body>
                    <h1>Bienvenu sur l'extranet des GBAF</h1>
                    <div class="no_account">
                        NO ACCOUNT
                        <a href='./sign_up.php'>sign_up</a>
                    </div>
                    <?php include('sign_in.php');?>
                    <footer>
                        <?php include('./footer.php');?>
                    </footer> 
                </body>    
            </html>
<?php
    }
?>