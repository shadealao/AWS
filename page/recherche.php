
        <div class="container" id="container1" >
            <form id="myForm" action="post" class="form-horizontal"  role="form">

              <div class="mx-auto" style="width: 60%;">
                  <h1 class="text-center recherche-title">On va où ?</h1>

                  <div class="form-group" style="margin-bottom: 50px;">
                    <input type="text" class="form-control input-lg" onFocus="geolocate()" id="autocomplete" placeholder="Départ">
                  </div>
                  <div class="form-group" style="margin-bottom: 70px;">
                    <input type="text" class="form-control input-lg" onFocus="geolocate()" id="autocomplete" placeholder="Destination">
                  </div>


                  <div class="row" style="margin-bottom: 70px;">
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

                  <div class="text-center" > 
                    <button type="button" onclick="myFunction()" class="btn btn-primary btn-lg" >Rechercher</button>
                  </div>


              </div>

            </form>
</div>

<!-- les Trajets recherchés,  -->
<div id="trajets"></div>


</div>

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

                var trajet = '<div class="container shadow-lg p-3 mb-5 bg-white rounded " id="container2" style=" margin-top: 30px; width: 50%;" > <div class="row"> <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" > <div class="short-div trajet-place" id="depart-time-trajet">10:00</div> <div class="short-div trajet-vertical-separator"></div> <div class="short-div trajet-place" id="arrivee-time-trajet" style="margin-top: -10px;">16:45</div> </div> <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"> <div class="short-div "> <span class="dot trajet-circle" style="vertical-align: bottom;"></span> </div> <div class="short-div vertical-line trajet-vertical-separator"></div> <div class="short-div"> <span class="dot trajet-circle" ></span> </div> </div> <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"> <div class="short-div trajet-place" id="depart-trajet">Paris</div> <div class="short-div trajet-vertical-separator" ></div> <div class="short-div trajet-place" id="arrivee-trajet" style="margin-top: -10px;">Lyon</div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" ></div> <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 trajet-place" id="prix-trajet">54,00 $</div> </div> <div class="row" style="margin-top: 30px;"> <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1" > <img src="img-profile.jpg" id="img-profile" alt="img-profile"> </div> <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"> <div class="short-div" id="trajet-nom-prenom"> <span id="trajet-name">Ismail</span> </div> <div class="short-div " style="height: 30px;"></div> <div class="short-div" id="trajet-rating"> <img src="star.png" id="trajet-star" alt="img-star" height="30" width="30"> <strong id="rating-text" >5</strong> </div> </div> </div> </div>';

                var trajet2 = '';
                for (var i = 0; i < 6; i++) {
                    trajet2 = trajet2 + trajet;
                }
                document.getElementById("trajets").innerHTML = trajet2;

            }

        </script>

        <!-- API Google avec la clé -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz-PGb0TE9S_tIIZ9ePo7XnNqPROUGT7o&libraries=places&callback=initAutocomplete" async defer></script>


