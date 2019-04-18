<?php
        include('include\main.head.include.php');
        
?>
    
    
    <div class="container-fluid home">
            <a id="return" href="register1.html"><i class="fas fa-arrow-left mt-3 ml-3"></i></a>
        <br><br><br><br><br><br>
        <h1>Confirmation</h1>
        <br>
        <form method="post">
        <div class="container bloc">
            <p id="paragraphe">
                Veuillez entrer le code alphanumérique que vous <br>
                avez par SMS. 
            </p>
            
            <div class="form-group col-md-5 text-center" style="margin:0 auto">       
                  <label for="inputEmail4">Code de confirmation</label>
                  <input type="text" name="code"  style="text-align:center"  class="form-control" id="" placeholder=""><div id="div_code" style=" color : red;"></div>
            </div>
            <br>
            <!--<p id="error-code">Code de confirmation incorrect</p>-->
            <div class="text-center">
                <a href="register2.html"><button type="submit" name="verifier" class="btn btn-light" id="send-code">Verifier</button></a>
            </div>
            <br>
            <p id="notice-code">Je n'ai pas reçu de code</p>
            
        </div>
    </form>
    </div>
    <?php
	if (isset($_POST['verifier'])) {
		$code = $_POST['code'];
		$recherche = mysqli_query($conn, "SELECT * FROM code WHERE contenu_code = '$code' ");
		$rows = mysqli_num_rows($recherche);
			 if($rows==1){
				 echo "<script>";
				 echo	"document.location.replace('register2.php');";
				echo "</script>";
			 }
			 else {
         echo '
   				<script>
   					document.getElementById("div_code").innerHTML="Code de confirmation incorrect";
   				</script>
   			';
			 }
	}

?>
<script src="js/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

</body>
</html>