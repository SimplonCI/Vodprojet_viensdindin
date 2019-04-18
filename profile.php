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
            <div class="col-md6  illustration">
                    <a id="return" href="index.php"><i class="fas fa-arrow-left mt-3 ml-3"></i></a>
            </div>
            <div class="col-md6 infos">
                
                <h3 class="mt-5">Mon profil</h3>
                <br>
                <h4>Mes informations personelles</h4>

                <div class="info-user">
                    <p>
                        Nom : <span id="infos-table">Kakro</span> <br> 
                        <br>
                        Prénoms : <span id="infos-table">Guindo Ahmed Marc</span><br>
                        <br>
                        Âge : <span id="infos-table">21 ans</span><br>
                        <br>
                        Ville : <span id="infos-table">Abidjan</span><br>
                        <br>
                        Adresse E-mail : <span id="infos-table">kakro41@gmail.com</span> <br>
                        <br>
                        Abonnement : <span id="infos-table"> <span style="color:#2ECC71">Oui</span>  (Premium)</span> <br>
                    </p>
                   
                    <div class="text-center">
                            <a href="edit-profile.php"><button type="button" class="btn btn-light" id="edit-user-info">Modifier mes infos</button></a>
                    </div>
    
                    
                </div>



            </div>
        </div>
    </div>
    

</body>
</html>