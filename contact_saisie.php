<!Doctype html>
<hmtl>
    <head>
        <?php include("./doctype.php");?>
        <title>Saisie contact</title>
    </head>    
    <body>
        <header>
            <?php include('./header.php');?>
        </header>
        <main>
            <h1>Message bien reçus</h1>
            <?php
            echo '<p>' . htmlspecialchars($_POST['']) . '</p>';
            ?>
        </main>
        <footer>
            <?php include('./footer.php');?>
        </footer>
    </body>

</html>