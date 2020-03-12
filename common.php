<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Covoiturage</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              rel="stylesheet"
              />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!-- Relie la page html avec le style css correspondant -->
        <link rel="stylesheet" href="style.css" />
        <link href="recherche.css" rel="stylesheet" media="screen">
        <!-- importe les codes javascript utilisés -->
        <script src="script/script.js" defer></script>
        <script src="script/inscription.js" defer></script>
        <script src="script/auto-complete.js"></script>
        
    </head>
    <body>
        <!-- c'est ici que le contenu principal doit être placé -->
        <div id="pageContent">
            <!-- le bouton qui permet d'afficher le Menu -->
            <button class="openbtn" id="btnOpen" onclick="showMenu()">&#9776;</button>


            <?php include('./page/' . $page . '.php'); ?>



        </div>

        <!-- c'est la balise qui contient le menu -->
        <!-- on doit l'avoir dans toutes les pages du site -->
        <div id="mySidebar" class="sidebar">
            <div class="col-md-12">
                <a href="index.php?page=inscription" class="col-md-6"><img src="user-login-icon-png-4.png" id="login" title="connexion/inscription" width="30px"></a>
                <a href="javascript:void(0)" class=" col-md- 6 closebtn" onclick="hideMenu()">&times;</a>
            </div>
            <a href="index.php?page=home" class="col-md-1"><img src="icon_home.png" title="home" width="30px"></a>
            <a href="index.php?page=profil">Profil</a>
            <a href="index.php?page=recherche">Rechercher</a>
            <a href="index.php?page=profil">Proposer un trajet</a>
        </div>
    </body>
</html>
