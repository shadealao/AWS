$( "#inscription" ).click(function() {
    /*Champs concernant la modale connexion*/
    
    $("#exampleModalCenter").modal('show');
    $("#menu_connexion a").addClass('active')
    if($("#menu_connexion a").hasClass('active')){
        $(".modal-body").append("<div class='form-group row'>   <label for='email' class='col-sm-4 col-form-label'>Email</label> <div class='col-sm-8'> <input type='email' required='required' class='form-control' id='email' placeholder='Email'>  </div> </div>");
        $(".modal-body").append("<div class='form-group row'>   <label for='mdp' class='col-sm-4 col-form-label'>Mot de passe</label> <div class='col-sm-4'> <input type='password' required='required' class='form-control' id='mdp1' placeholder='*******'>  </div><div class='col-sm-4'> <input type='password' required='required' class='form-control' id='mdp2' placeholder='*******'>  </div> </div>");

    }
    
    $("#menu_connexion a").click(function() {
        $("#menu_connexion a").addClass('active')
        $("#menu_inscription a").removeClass('active')
        $(".modal-body").remove()
        $(".modal-header").after('<div class="modal-body"> </div>')
        if($("#menu_connexion a").hasClass('active')){
            $(".modal-body").append("<div class='form-group row'>   <label for='email' class='col-sm-4 col-form-label'>Email</label> <div class='col-sm-8'> <input type='email' required='required' class='form-control' id='email' placeholder='Email'>  </div> </div>");
            $(".modal-body").append("<div class='form-group row'>   <label for='mdp' class='col-sm-4 col-form-label'>Mot de passe</label> <div class='col-sm-4'> <input type='password' required='required' class='form-control' id='mdp1' placeholder='*******'>  </div><div class='col-sm-4'> <input type='password' required='required' class='form-control' id='mdp2' placeholder='*******'>  </div> </div>");
        }

    });
    /*Fin Champs concernant la modale connexion*/

    


    /*Champs concernant la modale inscription*/
    $("#menu_inscription a").click(function() {
        $("#menu_connexion a").removeClass('active')
        $(".modal-body").remove()
        $(".modal-header").after('<div class="modal-body"> </div>')


        $("#menu_inscription a").addClass('active')
        if($("#menu_inscription a").hasClass('active')){
            $(".modal-body").append("<div class='form-group row'>   <label for='prenom' class='col-sm-4 col-form-label'>Prénom</label> <div class='col-sm-8'> <input type='text' required='required' class='form-control' id='prenom' placeholder='Jules'>  </div> </div>");
            $(".modal-body").append("<div class='form-group row'>   <label for='nom' class='col-sm-4 col-form-label'>Nom</label> <div class='col-sm-8'> <input type='text' required='required' class='form-control' id='nom' placeholder='Dupont'>  </div> </div>");
            $(".modal-body").append("<div class='form-group row'>   <label for='email' class='col-sm-4 col-form-label'>Email</label> <div class='col-sm-8'> <input type='email' required='required' class='form-control' id='email' placeholder='Email'>  </div> </div>");
            $(".modal-body").append("<div class='form-group row'>   <label for='mdp' class='col-sm-4 col-form-label'>Mot de passe</label> <div class='col-sm-4'> <input type='password' required='required' class='form-control' id='mdp1' placeholder='*******'>  </div><div class='col-sm-4'> <input type='password' required='required' class='form-control' id='mdp2' placeholder='*******'>  </div> </div>");


        }

    });
    /* Fin Champs concernant la modale inscription*/

});



