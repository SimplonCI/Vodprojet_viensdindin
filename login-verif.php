
    <?php
        include('include\main.head.include.php');
        
    ?>

<body>
    
    
    <div class="container-fluid home">
            <a id="return" href="login.php"><i class="fas fa-arrow-left mt-3 ml-3"></i></a>
        <br><br><br><br><br><br>
        <h1>Connectez vous</h1>
        <br>
        <div class="container bloc">
            <p id="paragraphe">
                Veuillez entrer votre mot de passe pour <br>
                confirmer que c'est bien vous. 
            </p>
            
            <div class="form-group col-md-5 text-center" style="margin:0 auto">       
                  <label for="inputEmail4">Mot de passe</label>
                  <input type="password" style="text-align:center"  class="form-control" id="inputEmail4" placeholder="">
            </div>
            <br>
            <!--<p id="error-code">Code de confirmation incorrect</p>-->
            <div class="text-center">
                <a href="freemium.php"><button type="button" class="btn btn-light" id="send-code">Se connecter</button></a>
            </div>
            <br>
            <p id="notice">Vous avez oublié votre mot de passe ? <span> Cliquez ici </span></p>
            
        </div>
    </div>

</body>
</html>