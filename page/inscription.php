
<div id="corps">
    <!-- Modal  connexion --> 
    <div class="modal fade" id="Modalconnexion" tabindex="-1" role="dialog" aria-labelledby="Modalconnexion"  aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="nav nav-tabs">
                        <li class="nav-item" id="menu_connexion">
                            <a class="nav-link active" href="#">Connexion</a>
                        </li>
                        <li class="nav-item " id="menu_inscription">
                            <a class="nav-link " href="#">Inscription</a>
                        </li>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </ul>
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
                    <ul class="nav nav-tabs">
                        <li class="nav-item" id="menu_connexion">
                            <a class="nav-link " href="#">Connexion</a>
                        </li>
                        <li class="nav-item " id="menu_inscription">
                            <a class="nav-link active" href="#">Inscription</a>
                        </li>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </ul>
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
    <!-- Fin Modal inscription  -->
</div>

<script>
    $(function(){
        $("#Modalconnexion").modal("show");
    });
</script>