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
                    <form name="contact_form" method="post" action="./contact_saisie.php">
                        <p>
                            <textarea type="text" name="message" placeholder="Message" rows="10" cols="40" required></textarea></br>
                            <input id="email" type="text" name="email" placeholder="E-mail" required></br>
                            <!-- buttom send-->
                            <input id="envoyer" type="submit" name="envoyer" value="ENVOYER"/></br>
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