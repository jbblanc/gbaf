<hmtl>
    <head>
        <?php
        include("./doctype.php");
        include("./header.php");?>
    </head>    
    <body>
    <!-- ceartion of type form -->
        <div class="container_form">
            <h2>Nous Contacter</h2>
            <p>Un probléme, une question ? Contacter nous via le formulaire suivant.</p>
            <div class="form_contact">
                <form name="contact" method="POST" action="./contact_saisie.php">
                    <textarea type="text" placeholder="Message" required></textarea> <br/>
                    <input type="text" placeholder="E-mail" required><br/>
                    <!-- adding option in list-->
                    <div class="custom_select dropdown" data-update="contact_subject">
                        <p><span class="selected_option">Objet</span></p>
                        <div class="drop_menu_options">
                            <ul class="options_list" display="hidden">
                                <li data-selected="Technical problem">Probléme technique</li>
                                <li data-selected="Idea or suggestion">Commentaires ou suggestions</li>
                            </ul>
                            <input name="contact_subject" class="unvisible">
                        </div>
                        <!-- buttom send-->
                    <input type="submit" name="envoyer" value="ENVOYER"/></br>
                    </div>
                </form>
            </div>
        </div>
    </body>

</html>