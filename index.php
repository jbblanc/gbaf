<?php
session_start();

if (isset($_SESSION['user_is_connected']) && $_SESSION['user_is_connected'])
{
    header('Location: ./home.php');
}

else
{
?>     
<!DOCTYPE html>
    <html>
        <head>
            <?php include("./head.php"); ?>
        </head>
        
        <body class="container text-center mt-5">
            <h1>Bienvenue sur l'extranet des GBAF</h1>
            <?php include('./sign_in.php');?>
            <footer>
                <?php include('./footer.php');?>
            </footer>  
        <?php include('./script.php');?> </body>    
    </html>
<?php
}
?>