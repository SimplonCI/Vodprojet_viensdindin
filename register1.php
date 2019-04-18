
    <?php
        include('include\main.head.include.php');
        
    ?>
    <?php
error_reporting(0);// With this no error reporting will be there
include('db/connect_db.php');
require('vendor/ismaeltoe/osms/src/Osms.php');
use \Osms\Osms;

require __DIR__.'/vendor/autoload.php';


function randomPrefix($length)
{
$random= "";
srand((double)microtime()*1000000);

$data = "AbcDE123IJKLMN67QRSTUVWXYZ";
$data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
$data .= "0FGH45OP89";

for($i = 0; $i < $length; $i++)
	{
		$random .= substr($data, (rand()%(strlen($data))), 1);
	}

		return $random;
	}


		$code = randomPrefix(8);

		$query = mysqli_query($conn, "INSERT INTO code (id_code,contenu_code)
		VALUES ('', '$code')");


 ?>
   
    <div class="container-fluid home">
    <form method="post" id="register_form" name="myForm">
    <a id="return" href="index.php"><i class="fas fa-arrow-left mt-3 ml-3"></i></a>
        <br><br><br><br><br><br>
        <h1>Entrez votre numéro de téléphone</h1>
        <br>
        <div class="container bloc">
            <p id="paragraphe">
                Nous allons utiliser uniquement votre numéro de <br>
                téléphone pour la création de votre compte et vérifier <br>
                que vous n'êtes pas un robot.
            </p>
            
            <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="inputEmail4">Indicatif</label>
                  <input type="number" style="text-align:center"  class="form-control" id="inputEmail4" placeholder="+225">
                </div>
                <div class="form-group col-md-8 offset-1">
                  <label for="inputPassword4">Numéro de téléphone</label>
                  <input type="tel" name="tel" class="form-control" id="tel" placeholder=""><div id="tel_div" style="color : red;"></div>
                </div>
                </div>
                <input type="hidden" name="content" value=" <?php echo ("Votre code Viens Dindin est ".$code);  ?>"/>
                <div>
            </div>
            <br>
            <div class="text-center"> 
                <button type="submit" class="btn btn-light" id="reg_btn" onclick="ajaxFunction('tel_div')">Envoyer moi un code</button>
            </div>
            <br>
            <p id="notice">En vous inscrivant vous accepter nos <span> conditions générales d'utilisateurs</span></p>
            
        </div>
    </form>
    </div>
    <?php



if(!empty($_POST)){



	$datas = array_map('htmlspecialchars', $_POST);
	$tel = $datas['tel'];

	if(strlen($tel) < 12){
		echo '
			<script>
				document.getElementById("tel_div").innerHTML="Veuillez entrer un numéro de téléphone valide";
			</script>
		';	}else{
	$query = mysqli_query($conn, "SELECT * FROM users WHERE telephone='$tel'");
				 $rows = mysqli_num_rows($query);
				 if($rows==1){

			echo '
				<script>
					document.getElementById("tel_div").innerHTML="Désolé ce numéro de téléphone est déjà pris";
				</script>
			';


  	}else{

				$query = mysqli_query($conn, "INSERT INTO users (id,telephone)
				VALUES ('', '$tel')");

		 session_start();
		 $_SESSION['telephone']= $tel;

	$credential = [
		'clientId' => 'Y4LlL3k389cuBFz6JdzudtKvQguA7xCR',
		'clientSecret' => 'TbbSkemzXRQRxPHw'
		];

		// puis on envoie le message

	$osms = new Osms($credential);
	$token = $osms->getTokenFromConsumerKey();
	$osms->sendSMS('tel:+22509682009', 'tel:' . $datas['tel'], $datas['content'], 'ViensDindin');

		if ($osms) {
			echo '
			<script>
			document.location.replace("register-verif.php");
			</script>
		';
	}
	}
}
}
?>
<script src="js/jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>