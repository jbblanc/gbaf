<?php
session_start();

?>
<hmtl>
    <head>
        <?php include("./head.php");?>
    </head>

    <body>
        <header>
            <?php include('./header.php');?>
        </header>

        <!-- ceartion of form -->
        <main>
            <div class="container_contact_form">
                <h2>Nous Contacter</h2>
                <p>Un probléme, une question ? Contacter nous via le formulaire suivant.</p>
                <div class="contact_form">
                    <form name="contact" method="post" action="./contact_saisie.php">
                        <p>
                            <textarea type="text" placeholder="Message" rows="10" style="margin: 0" required></textarea></br>
                            <input type="text" placeholder="E-mail" required></br>
                            <!-- adding option in list-->
                            <select name="option">   
                                <option value="Idea_or_suggestion">Commentaires ou suggestions</option>    
                                <option value="Technical_problem">Probléme technique</option>
                            </select>
                            <!-- buttom send-->
                            <input type="submit" name="envoyer" value="ENVOYER"/></br>
                        </p>
                    </form>
                </div>
            </div>
        </main>

        <footer>
            <?php include('./footer.php');?>
        </footer>
    </body>

</html>