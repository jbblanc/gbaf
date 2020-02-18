<!Doctype html>
<html>
    <head>
        <?php include("doctype.php");?>
        <title>GBAF extranet</title>
    </head>
    
    <body>
    <?php include("routes/header.php"); ?>
        <main>
            <div class="presentation">
            <article>
                <section>
                    <h1>texte de présentation du GBAF et du site</h1>
                    <img scr="" rel="illustration">
                </section>
                <section>
                    <h2> text acteurs et partenaires</h2>
                </section>
            </div>
           <?php include("routes/section_acteurs.php"); ?>
            </article>        
        </main>

        <footer>
            <nav>
                <p>| <a href="routes/mentions_legales.php" target="_blank">Mention légales</a> 
                | <a href="routes/contact.php" target="_blank">Contact</a> |</p>
            </nav>
        </footer>    
    </body>
    
</html>