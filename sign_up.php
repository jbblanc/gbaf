<?php
session_start();
require './_db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //fetch of the username
    $user_name_verif = $pdo->prepare("SELECT COUNT(*) FROM users WHERE user_name = ?");
    $user_name_verif->execute([htmlspecialchars($_POST['user_name'])]);
    $nbr_u_n_v = $user_name_verif->fetch();

    //verification if username does exist
    if ($nbr_u_n_v[0] > 0)
    {
        echo 'username deja utiliser</br>';
        // header('Location: ./sign_up.php');
    }
    else
    {
        $req = $pdo->prepare("INSERT INTO users SET nom = ?, prenom = ?, user_name = ?, password = ?, question = ?, reponse = ?");
        $req->execute([
            htmlspecialchars($_POST['nom']),
            htmlspecialchars($_POST['prenom']),
            htmlspecialchars($_POST['user_name']),
            htmlspecialchars($_POST['password']),
            htmlspecialchars($_POST['question']),
            htmlspecialchars($_POST['reponse'])
        ]);
        //END of the req
        $req->closeCursor();
        echo 'insert valide';

        $req_id = $pdo->prepare("SELECT user_id FROM users WHERE user_name = ?");
        $req_id->execute([ htmlspecialchars($_POST['user_name'])]);
        $result = $req_id->fetch();
        $user_id = $result[0];
        // add user data to session id nom prenom
        $_SESSION['user_id'] = $user_id;
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['prenom'] = $_POST['prenom'];
        $_SESSION['user_name'] = $_POST['user_name'];
        $_SESSION['user_is_connected'] = true;
        $req_id->closeCursor();
        header('Location: home.php');
        
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <?php include('./head.php');?>
    </head>

    <body>
        <main>
            <form name="sign_up_form" method="POST" action="./sign_up.php">
                <div class="sign_up_form">
                    <h1>Sign up</h1>
                    <p>Remplir les champs</p>
                    <hr>
                    <label for="nom"><b>Nom</b></label>
                    <input type="text" placeholder="Entrer votre Nom" name="nom" required>

                    <label for="prenom"><b>Prénom</b></label>
                    <input type="text" placeholder="Entrer votre prénom" name="prenom" required>

                    <label for="username"><b>UserName</b></label>
                    <input type="text" placeholder="Entrer votre UserName" name="user_name" required>

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Entrer votre mot de passe" name="password" requred>

                    <label for="question"><b>Question secrète</b></label>
                    <input type="text" placeholder="Entrer votre question secrète" name="question" required>

                    <label for="reponse"><b>Réponse secrète</b></label>
                    <input type="text" placeholder="Entrer la réponse à la question secrète" name="reponse" required>

                    <p>En créant un compte vous accepter nos <a href="./mentions_legales.php" style="color: dodgerblue">Terms & Conditions</a></p>

                    <div class="clearfix">
                        <button type="submit">Sign Up</button>
                    </div>
                </div>
            </form>
            <div class="clearfix">
                <a href="./index.php"><button>Annuler</button></a>
            </div>
        </main>

        <?php include('./footer.php');?>
    </body>
</html>