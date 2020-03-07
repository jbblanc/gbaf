<?php
    require './_db.php';
    session_start();

    if (!isset($_SESSION['user_is_connected']) || !$_SESSION['user_is_connected'])
    {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
    <html>
        <head>
            <?php include("./head.php"); ?>
        </head>
        
        <body>
            <?php include('./header.php'); ?>
            
                <main>
                <div>
                    <section class="presentation_gbaf">
                        <?php include('./txt_presentation_gbaf.php');?>
                        <img id="img_flag" style="width: 35%; heigth: 30%"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/langfr-1920px-Flag_of_France.svg.png"
                        rel="drapeau france">
                    </section>

                    <section class="index_acteurs">
                        <h2 style="text-align: center">text acteurs et partenaires</h2> 
                        <?php include('./section_acteurs.php'); ?>
                    </section>
                </div>        
            </main>  

            <footer>
                <?php include('./footer.php');?>
            </footer> 
        </body>    
    </html>