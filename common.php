<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Covoiturage</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Awesome MDB 4.14-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">



        <!-- JQuery -->
        <script    src= "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--MDB 4.14-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--Bootstrap -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
        <!-- Bootstrap tooltips -->
        <!--MDB 4.14-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <!--MDB 4.14-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <!--MDB 4.14-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"></script>


        <!-- Relie la page html avec le style css correspondant -->
        <link rel="stylesheet" href="css/style.css" />
        <link href="css/recherche.css" rel="stylesheet" media="screen">
        <!-- importe les codes javascript utilisés -->
        <script src="script/script.js" defer></script>
        <script src="script/inscription.js" defer></script>
        <script src="script/auto-complete.js"></script>
        <script src="script/profil.js"></script>

    </head>
    <body>
        <header class="col-md-12">
            <div class="offset-3 col-9 col-md-3 offset-md-9 row" id="inscription_connexion">
                <a href="#"><p class="col-md-6 menu_inscription">Inscription</p></a>
                <a href="#"><p class="col-md-6 menu_connexion">Connexion</p></a>
            </div>
            <div  class="col-md-12 sol-sm-12 text-center" ><img src="img/Covoit1.png" alt="covoit"/></div>
        
        </header>
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
                <a href="index.php?page=home" class="col-md-1"><img src="img/icon_home.png" title="home" width="30px"></a>
                <a href="javascript:void(0)" class=" col-md- 6 closebtn" onclick="hideMenu()">&times;</a>
            </div>

            <a href="index.php?page=profil">Profil</a>
            <a href="index.php?page=recherche">Rechercher</a>
            <a href="index.php?page=profil">Proposer un trajet</a>
        </div>




        <div class="modal fade" id="Modalconnexion" tabindex="-1" role="dialog" aria-labelledby="Modalconnexion"  aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Connexion</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!--<ul class="nav nav-tabs">
<li class="nav-item" class="menu_connexion">
<a class="nav-link active" href="#">Connexion</a>
</li>
<li class="nav-item " class="menu_inscription">
<a class="nav-link " href="#">Inscription</a>
</li>
</ul>-->
                    </div>
                    <div class="modal-body" >
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">Email</label> 
                            <div class="col-sm-8"> 
                                <input type="email" required="required" class="form-control" id="email" placeholder="Email">  
                            </div> 
                        </div>
                        <div class="form-group row">   
                            <label for="mdp" class="col-sm-4 col-form-label">Mot de passe</label> 
                            <div class="col-sm-4"> 
                                <input type="password" required="required" class="form-control" id="mdp1" placeholder="*******">  
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Annuler</button>
                        <button type="button" class="btn btn-success">Valider</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Modal   connexion -->

        <!-- Modal inscription  -->
        <div class="modal fade" id="Modalinscription" tabindex="-1" role="dialog" aria-labelledby="Modalinscription"  aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Inscription</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!--<ul class="nav nav-tabs">
<li class="nav-item" class="menu_connexion">
<a class="nav-link " href="#">Connexion</a>
</li>
<li class="nav-item " class="menu_inscription">
<a class="nav-link active" href="#">Inscription</a>
</li>
</ul>-->
                    </div>
                    <div class="modal-body" >
                        <div class="form-group row">   
                            <label for="prenom" class="col-sm-4 col-form-label">Prénom</label> 
                            <div class="col-sm-8"> 
                                <input type="text" required="required" class="form-control" id="prenom" placeholder="Jules">  
                            </div> 
                        </div>
                        <div class="form-group row"> 
                            <label for="nom" class="col-sm-4 col-form-label">Nom</label> 
                            <div class="col-sm-8">
                                <input type="text" required="required" class="form-control" id="nom" placeholder="Dupont">  
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label">Email</label> 
                            <div class="col-sm-8"> 
                                <input type="email" required="required" class="form-control" id="email" placeholder="Email">  
                            </div> 
                        </div>
                        <div class="form-group row">   
                            <label for="mdp" class="col-sm-4 col-form-label">Mot de passe</label> 
                            <div class="col-sm-4"> 
                                <input type="password" required="required" class="form-control" id="mdp1" placeholder="*******">  
                            </div>
                            <div class="col-sm-4"> 
                                <input type="password" required="required" class="form-control" id="mdp2" placeholder="*******">  
                            </div> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Annuler</button>
                        <button type="button" class="btn btn-success">Valider</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
