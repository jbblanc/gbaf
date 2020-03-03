<?php
    require './_db.php';

    $uc = 0;
    if ($uc == 0)
    {
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
                            <h2>text acteurs et partenaires</h2> 
                    <?php include('./section_acteurs.php'); ?>
                    </section>
                </div>        
            </main>

            <footer>
                <?php include('./footer.php');?>
            </footer>    
        </body>    
    </html>

<?php

    }
    else
    {
    ?>
        <head>
            <?php include("./head.php"); ?>
        </head>
        <body>
            <h1>Bienvenu sur l'extranet des GBAF</h1>
                <div class="index_btn">
                    <!-- <p>Sign Up</p> -->
                    <button id="home_btn_up" type="button"><a href='./sign_up.php'>sign_up</a></button>
                    
                    <p> </p>
                    <button id="home_btn_in" type="button"><a href='./sign_in.php'>sign_in</a></button>
                </div>
            <footer>
                <?php include('./footer.php');?>
            </footer> 
        </body>
    <?php
    }

?>