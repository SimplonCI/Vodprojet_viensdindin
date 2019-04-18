<!DOCTYPE html>
<html lang="fr">

<?php 

    include('include\main.head.include.php');
    include('include\header-freemium.include.php');

?>

</html>
<body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md6  illustration edit">
                    <a id="return" href="profile.php"><i class="fas fa-arrow-left mt-3 ml-3"></i></a>
            </div>
            <div class="col-md6 infos">
                
                <h3 class="mt-5">Modifications</h3>
                <br>
                <h4>Mes informations personelles</h4>

                <div id="edit" class="info-user edit">
                    <p>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                              <label for="inputEmail4">Nom</label>
                              <input type="text" class="form-control" id="inputEmail4" placeholder="">
                            </div>
                            <div class="form-group col-md-4 offset-2">
                              <label for="inputPassword4">Prénoms</label>
                              <input type="text" class="form-control" id="inputPassword4" placeholder="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Date de naissance</label>
                                <input type="text"  id="datepicker" class="form-control">
                            </div>
                            <div class="form-group col-md-4 offset-2">
                              <label for="inputPassword4">Adresse E-mail</label>
                              <input type="text" class="form-control" id="inputPassword4" placeholder="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Ville</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-4 offset-2">
                              <label for="inputPassword4">Abonnement</label>
                              <a href="index.html"><input type="button" id="subscription" class="form-control" id="inputPassword4"  value="Souscrire à un abonnement"></a>
                            </div>
                        </div>
                    </p>
                   
                    <div class="text-center">
                            <button type="button" class="btn btn-light" id="edit-user-info-edit">Enregistrer</button>
                    </div>
    
                    
                </div>



            </div>
        </div>
    </div>
    
    <script>
        $('#datepicker').datepicker();
        $('#datepicker').on('changeDate', function() {
            $('#my_hidden_input').val(
                $('#datepicker').datepicker('getFormattedDate')
            );
        });
            </script>
</body>
</html>

