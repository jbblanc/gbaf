<?php
session_start();
require '_db.php';

if (!isset($_SESSION['user_is_connected']) || !$_SESSION['user_is_connected'])
{
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //verif of user_name disponobility
    $user_name_verif = $pdo->prepare("SELECT COUNT(*) FROM users WHERE user_name = ? AND user_id <> ?");
    $user_name_verif->execute([
        htmlspecialchars($_POST['user_name']),
        $_SESSION['user_id']
    ]);
    $nbr_u_n_v = $user_name_verif->fetch();
    if ($nbr_u_n_v[0] > 0)
    {
        echo 'username deja utiliser</br>';
    }
    else
    {
        //update sql champs form
        $req = $pdo->prepare("UPDATE users SET nom = ?, prenom = ?, user_name = ?, password = ?, question = ?, reponse = ? WHERE user_id = ?");
        $req->execute([
            htmlspecialchars($_POST['nom']),
            htmlspecialchars($_POST['prenom']),
            htmlspecialchars($_POST['user_name']),
            htmlspecialchars($_POST['password']),
            htmlspecialchars($_POST['question']),
            htmlspecialchars($_POST['reponse']),
            $_SESSION['user_id']
        ]);

        $_SESSION['nom'] = htmlspecialchars($_POST['nom']);
        $_SESSION['prenom'] = htmlspecialchars($_POST['prenom']);
        $_SESSION['user_name'] = htmlspecialchars($_POST['user_name']);
        $_SESSION['password'] = htmlspecialchars($_POST['password']);;
        $_SESSION['question'] = htmlspecialchars($_POST['question']);;
        $_SESSION['reponse'] = htmlspecialchars($_POST['reponse']);
    }
}
//fetch all user_data WHERE user_name == SESSION['user_name']
$req = $pdo->prepare("SELECT nom, prenom, user_name, password, question, reponse FROM users WHERE user_id = ?");
$req->execute([$_SESSION['user_id']]);
$user_data = $req->fetch();



?>
<!DOCTYPE html>
<html>
    <head>
        <?php include('./head.php');?>
    </head>
    
    <body>
        <header>
            <?php include('./header.php');?>
            <hr>
        </header>
        <main>
            <h1>Mon Compte</h1>  
            <form name="sign_up_form" method="POST" action="./user_page.php">
                <div class="sign_up_form">
                    
                    <hr>
                    <label for="nom"><b>Nom</b></label>
                    <input type="text" placeholder="<?=$user_data['nom']?>" value ="<?=$user_data['nom']?>" name="nom" required>

                    <label for="prenom"><b>Prénom</b></label>
                    <input type="text" placeholder="<?=$user_data['prenom']?>" value ="<?=$user_data['prenom']?>" name="prenom" required>

                    <label for="username"><b>UserName</b></label>
                    <input type="text" placeholder="<?=$user_data['user_name']?>" value ="<?=$user_data['user_name']?>" name="user_name" required>

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="<?=$user_data['password']?>" value ="<?=$user_data['password']?>" name="password" requred>

                    <label for="question"><b>Question secrète</b></label>
                    <input type="text" placeholder="<?=$user_data['question']?>" value ="<?=$user_data['question']?>" name="question" required>

                    <label for="reponse"><b>Réponse secrète</b></label>
                    <input type="text" placeholder="<?=$user_data['reponse']?>" value ="<?=$user_data['reponse']?>" name="reponse" required>

                    <button type="submit">Update</button>
                </div>
            </form>   
        </main>
        
        <footer>
            <?php include('./footer.php');?>
        </footer>
    </body>

</html>