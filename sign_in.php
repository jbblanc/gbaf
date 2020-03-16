<form class="form-signin" method="POST" action="./validation_sign_in.php">
    <img class="mb-4" src="https://user.oc-static.com/upload/2019/07/15/15631755744257_LOGO_GBAF_ROUGE%20%281%29.png" 
    alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Connecter-vous</h1>
    
    <label for="inputUserName" class="sr-only">UserName</label>
    <input type="text" id="inputEmail" class="form-control" placeholder="UserName" name="user_name" required autofocus>
</br>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
</br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Connection</button>
    <p class="mt-5 mb-3 text-muted"><a href='./sign_up.php'>Pas de compte ?</p></a>
</form>
