<?php
session_start();
require './_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //fetch of the username
    $user_name_verif = $pdo->prepare("SELECT COUNT(*) FROM users WHERE user_name = ?");
    $user_name_verif->execute([htmlspecialchars($_POST['user_name'])]);
    $nbr_u_n_v = $user_name_verif->fetch();
    $user_name_verif->closeCursor();
    //verification if username does exist
    if ($nbr_u_n_v[0] > 0)
    {
        echo 'username deja utiliser</br>';
    }
    else
    {
        $hpwd = htmlspecialchars($_POST['password']);
        $password = password_hash($hpwd, PASSWORD_DEFAULT);
        $req = $pdo->prepare("INSERT INTO users SET nom = ?, prenom = ?, user_name = ?, password = ?, question = ?, reponse = ?");
        $req->execute([
            htmlspecialchars($_POST['nom']),
            htmlspecialchars($_POST['prenom']),
            htmlspecialchars($_POST['user_name']),
            $password,
            htmlspecialchars($_POST['question']),
            htmlspecialchars($_POST['reponse'])
        ]);
        $req->closeCursor();


        $req_id = $pdo->prepare("SELECT user_id FROM users WHERE user_name = ?");
        $req_id->execute([ htmlspecialchars($_POST['user_name'])]);
        $result = $req_id->fetch();
        $req_id->closeCursor();
        $user_id = $result[0];
        // add user data to session id nom prenom
        // $_SESSION['user_id'] = $user_id;
        // $_SESSION['nom'] = $_POST['nom'];
        // $_SESSION['prenom'] = $_POST['prenom'];
        // $_SESSION['user_name'] = $_POST['user_name'];
        // $_SESSION['user_is_connected'] = true;
        header('Location: ./index.php');
        
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include('./head.php');?>
    </head>

    <body class="text-center">
    <img class="mb-4" src="https://user.oc-static.com/upload/2019/07/15/15631755744257_LOGO_GBAF_ROUGE%20%281%29.png" 
        alt="" width="72" height="72">
        <h1>Inscription</h1>
        <p>Remplir les champs</p>
  </br>
        <form method="POST" action="./sign_up.php">
        
            <div class="form-row" style="padding: 5px">
                <div class="col-md-4 mb-3">
                    <label for="validationDefault01">Nom</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="Entrer votre Nom" name="nom" required autofocus>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Prénom</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="Entrer votre prénom" name="prenom" required> 
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault03">Username</label>
                    <input type="text" class="form-control" id="validationDefault03" placeholder="Entrer votre UserName" name="user_name" required>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="validationDefault04">Password</label>
                    <input type="password" class="form-control" id="validationDefault04" placeholder="Entrer votre Password" name="password" required>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="validationDefault05">Question secrète</label>
                    <input type="text" class="form-control" id="validationDefault05" placeholder="Entrer votre question secrète" name="question" required>
                </div>
                <div class="col-md-4 mb-4">
                    <label for="validationDefault06">Réponse secrète</label>
                    <input type="text" class="form-control" id="validationDefault06" placeholder="Entrer la réponse à la question secrète" name="reponse" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                    En créant un compte vous accepter nos <a href="./mentions_legales.php" style="color: dodgerblue">Termes & Conditions</a>
                    </label>
                </div>
            </div>
        <button class="btn btn-primary" type="submit">VALIDATION</button>
        <a class="btn btn-sm btn-outline-secondary" type="button" href="./index.php">Annuler</a>
    </form>
    </br>
        <?php include('./footer.php');?>
    <?php include('./script.php');?> </body>
</html>