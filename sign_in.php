<html>
    <main>
        <div class="form_sign_in">
            <form name="sign_in" method="POST" action="./validation_sign_in.php">
                <p>UserName</p>
                <input type="text" name="user_name" required/></br>
                <p>Password</p>
                <input type="password" name="password" required/></br>
                <button type="submit" name="valider">VALIDER</button>
            </form>
        </div>
        <button name="forgetpassword"><a href="./reset_password/recup_password.php">Mot de passe oublié ?</a></button>
    </main>
</html>
