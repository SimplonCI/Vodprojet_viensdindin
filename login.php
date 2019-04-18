
    <?php
        include('include\main.head.include.php');
        
    ?>
   
    <div class="container-fluid home">
    <a id="return" href="index.php"><i class="fas fa-arrow-left mt-3 ml-3"></i></a>
        <br><br><br><br><br><br>
        <h1>Connectez vous</h1>
        <br>
        <div class="container bloc">
            <p id="paragraphe">
                Veuille entrez votre numéro de téléphone <br>
                et votre mot de passe pour vous connectez <br>
                
            </p>
            
            <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="inputEmail4">Indicatif</label>
                  <input type="email" style="text-align:center" disabled class="form-control" id="inputEmail4" placeholder="+225">
                </div>
                <div class="form-group col-md-8 offset-1">
                  <label for="inputPassword4">Numéro de téléphone</label>
                  <input type="number" class="form-control" id="inputPassword4" placeholder="">
                </div>
            </div>
            <br>
            <div class="text-center">
                <a href="login-verif.php"><button type="button" class="btn btn-light" id="send-code">Suivant</button></a>
            </div>
            <br>
            <p id="notice">Un soucis avec votre numéro de téléphone ? <span> Cliquez ici </span></p>
            
        </div>
    </div>
