<div class="container container-fluide">
    <h2>Nous Contacter</h2>
    <p>Un probléme, une question ? Contacter nous via le formulaire suivant.</p>
    <div class="form_contact">
    <form name="contact" method="post" action="contact.php">
        <textarea type="text" placeholder="Message" required></textarea> <br/>
        <input type="text" placeholder="E-mail" required><br/>
        <input type="submit" name="envoyer" value="ENVOYER"/></br>
        <div class="custom_select dropdown" data-update="contact_subject">
        <p><span class="selected_option">Objet</span></p>    
        </div>
        <div class="drop_menu_options">
            <ul class="options_list">
                <li data-selected="Technical problem">Probléme technique</li>
                <li data-selected="Idea or suggestion">Commentaires ou suggestions</li>
            </ul>
        </div>
        <input name="contact_subject" class="unvisible" required="">
    </form>
    </div>
</div>