    
    <?php
        include('include\main.head.include.php');
        include('db/connect_db.php');
        
    ?>

<body>
    
    
    <div class="container-fluid home">
        <a id="return" href="register-verif.html"><i class="fas fa-arrow-left mt-3 ml-3"></i></a>
        <br><br><br><br>
        <h1>Terminer votre inscription</h1>
        <br>
        <div class="container bloc register">

            <div class="text-center mb-3">
                    <span id="infosperso">Informations personelles</span>
            </div>
            <form method="post" action="index.php">
            <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="">Nom</label>
                  <input type="text" class="form-control" id="" placeholder="">
                </div>
                <div class="form-group col-md-7 offset-1">
                  <label for="">Prénoms</label>
                  <input type="text" class="form-control" id="" placeholder="">
                </div>
            </div>

            <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="">Ville</label>
                      <input type="text" class="form-control" id="" placeholder="">
                    </div>
                    <div class="form-group col-md-7 offset-1">
                            <label for="">Date de naissance</label>
                    <input type="text"  id="datepicker" class="form-control">
                      <!--<input type="date" class="form-control" id="inputPassword4" placeholder="">-->
                    </div>
            </div>

            <div class="form-row col-md-8" id="input-left">
                <label for="">Adresse E-mail</label>
                <input type="email" class="form-control" id="" placeholder="">
            </div>

            <div class="form-row col-md-8" id="input-left">
                <label for="" class="mt-2">Mot de passe</label>
                <input type="password" width="25" class="form-control" id="" placeholder="">
            </div>
            <br>
            <div class="text-center">
                <button type="submit" class="btn btn-light" id="send-code">S'enregistrer</button>
            </div>
            <br>
        </form>
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