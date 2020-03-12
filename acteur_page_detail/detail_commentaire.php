<?php
require '_db.php';

if (!isset($_SESSION['user_is_connected']) || !$_SESSION['user_is_connected'])
{
    header('Location: ./index.php');
}
//$req = $pdo->prepare("SELECT COUNT()");
$req = $pdo->prepare("SELECT COUNT(acteur_id) FROM articles WHERE acteur_id = ?");
$req->execute([$_SESSION['id']]);
$nbr_total_comments = $req->fetch();
$req->closeCursor();

$req = $pdo->prepare("SELECT user_id, com, date FROM articles WHERE acteur_id = ? ORDER BY date DESC");
$req->execute([$_SESSION['id']]);
$comments_data = $req->fetchALL();
$req->closeCursor();
?>

<div class="commentaires">
    <h3><?=$nbr_total_comments[0]?> Commentaires</h3>
    
    <script type="text/javascript">

        
        async function submit(message) {
            try {
                let form = new FormData();

                form.append("message", message);

                const response = await fetch('/coursphp/gbaf/acteur_page_detail/commentaires.php', {
                    method: 'POST',
                    body: form 
                })
                
                let data = await response.text()
                let url = window.name;

                if(response.status === 200) {
                    window.location = url;
                }
                
                console.log('data :', data);
                
            } catch (error) {
                console.log(error);
            }
        }
        
        function write_comment()
        {
            var msg = prompt("Entrer votre commentaire");
            if (!msg == ''){
                message = msg.trim();
                submit(message);
            }
        }

    </script>

    <button onclick="write_comment();" >Nouveau commentaire</button>
    <button onclick="();" ><?=$nrb_likes?></button>

    <?php
    foreach($comments_data as $com)
    {
        $req = $pdo->prepare("SELECT user_name FROM users WHERE user_id = ?");
        $req->execute([$com['user_id']]);
        $user_name = $req->fetchALL();
        $req->closeCursor();
    ?>
    <article style="border: solid;">
        <?php
        foreach($user_name as $user)
        {
        ?>
            <p><?=$user['user_name']?></p>
        <?php
        }
        ?>
        <p><?=$com['date']?></p>
        <p><?=$com['com']?></p>
    </article>
</div>
<?php
    }
?>