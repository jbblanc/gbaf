<?php
session_start();

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
                <article>
                    <section class="presentation_gbaf">
                        <?php include('./txt_presentation_gbaf.php');?>
                        <img id="img_flag" 
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/langfr-1920px-Flag_of_France.svg.png"
                        rel="illustration">
                    </section>
                    <section>
                    <a  href='./sign_up.php'><button>sign_up</button></a>
                        <h2> text acteurs et partenaires</h2> 
                <?php include('./section_acteurs.php'); ?>
                </section>
            </div>        
        </main>

        <footer>
            <?php include('./footer.php');?>
        </footer>    
    </body>
    
</html>
