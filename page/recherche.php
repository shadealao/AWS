
<div class="container" id="container1" >
    <form id="myForm" action="post" class="form-horizontal"  role="form">

        <div class="mx-auto offset-md-2 col-md-8 card">
            <div class="col-md-12 row text-center" id="titre">
                <div class="col-sm-2 ">
                    <img src="https://img.icons8.com/nolan/96/user-location.png"/>
                </div>
                <div class="col-sm-10 align-self-center">
                    <h1 class=" text-center recherche-title">Envie de se déplacer ?</h1>
                </div>
            </div>
            <div class="form-group" style="margin-bottom: 50px;">
                <input type="text" class="form-control input-lg" onFocus="geolocate()" id="autocomplete" placeholder="Départ">
            </div>
            <div class="form-group" style="margin-bottom: 50px;">
                <input type="text" class="form-control input-lg" onFocus="geolocate()" id="autocomplete" placeholder="Destination">
            </div>


            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md" >
                    <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" >
                        <input class="form-control input-lg" type="text" value="Quand ?" readonly>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                    <input type="hidden" id="dtp_input2" value="" /><br/>
                </div>
                <div class="col-md">
                    <div class="input-group date form_time" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                        <input class="form-control input-lg" type="text" value="À quelle heure ?" readonly>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                    </div>
                    <input type="hidden" id="dtp_input3" value="" /><br/>
                </div>
            </div>

            <div class="text-center" style="margin-bottom: 15px;" > 
                <button type="button" onclick="myFunction()" class="btn btn-primary btn-lg" >Rechercher</button>
            </div>


        </div>

    </form>
    
    
   
</div>
 
<!-- les Trajets recherchés,  -->
<div id="trajets"></div>




<script type="text/javascript" src="./bootstrap/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>

<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>

<script type="text/javascript">
    // Format de la date
    ;(function($){
        $.fn.datetimepicker.dates['fr'] = {
            days: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
            daysShort: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam", "Dim"],
            daysMin: ["D", "L", "Ma", "Me", "J", "V", "S", "D"],
            months: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
            monthsShort: ["Jan", "Fev", "Mar", "Avr", "Mai", "Jui", "Jul", "Aou", "Sep", "Oct", "Nov", "Dec"],
            today: "Aujourd'hui",
            suffix: [],
            meridiem: ["am", "pm"],
            weekStart: 1,
            format: "dd/mm/yyyy hh:ii"
        };
    }(jQuery));

    $('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        //todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });

    //Ajout des trajets quand l'utulisateur click sur Recherche
    function myFunction() {

        var trajet = '<div class="container shadow-lg p-3 mb-5 bg-white rounded " id="container2"><div class="col-md-12 row" id="info_trajet">           <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 col-1" > <div class="short-div trajet-place" id="depart-time-trajet">10:00</div>                 <div class="short-div trajet-vertical-separator"></div> <div class="short-div trajet-place" id="arrivee-time-trajet" style="margin-top: -10px;">16:45</div> </div> <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 offset-sm-1 offset-md-0 offset-1 col-1"><div class="short-div "> <span class="dot trajet-circle" style="vertical-align: bottom;"></span> </div>  <div class="short-div vertical-line  trajet-vertical-separator"></div><div class="short-div"><span class="dot trajet-circle"></span></div></div> <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 col-1" >  <div class="short-div trajet-place" id="depart-trajet">Paris</div> <div class="short-div trajet-vertical-separator" ></div> <div class="short-div trajet-place" id="arrivee-trajet" style="margin-top: -10px;">Lyon</div> </div> <div class="col-lg-2 col-md-3  col-sm-2 col-xs-2 offset-md-7 offset-2 col-5 trajet-place text-right" id="prix-trajet">54,00$</div> </div>  <div class="col-md-12 col-12 row"> <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-4 align-self-center">  <div class="short-div" id="trajet-nom-prenom"> <span id="trajet-name">Ismail</span> </div> <div class="short-div " style="height: 30px;"></div> <div class="short-div " id="trajet-rating"> <img src="img/star.png" id="trajet-star" alt="img-star" style="margin-top: -16px;" height="30" width="30"> <strong id="rating-text" >5</strong> </div> </div> <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1 col-5" > <img src="img/img-profil.jpg" id="img-profil" alt="img-profil"> </div> </div></div>';

        var trajet2 = '';
        for (var i = 0; i < 6; i++) {
            trajet2 = trajet2 + trajet;
        }
        document.getElementById("trajets").innerHTML = trajet2;

    }

</script>

<!-- API Google avec la clé -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz-PGb0TE9S_tIIZ9ePo7XnNqPROUGT7o&libraries=places&callback=initAutocomplete" async defer></script>


