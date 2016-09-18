<?php
	
	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupEmailError = "";
	$signupPasswordError = "";
	$loginEmailError = "";
	$loginPasswordError = "";
	$firstNameError = "";
	$lastNameError = "";
	
	if (isset ($_POST["loginEmail"]) ){
		if (empty ($_POST["loginEmail"]) ){
			$loginEmailError = "Palun sisesta e-post!";		
		}
	}
	
	if (isset ($_POST["loginPassword"]) ){ 
		if (empty ($_POST["loginPassword"]) ){ 
			$loginPasswordError = "Palun sisesta parool!";		
		}
	}
	
	if (isset ($_POST["firstName"]) ){
		if (empty ($_POST["firstName"]) ){
			$firstNameError = "See väli on kohustuslik!";		
		}
	}
	
	if (isset ($_POST["lastName"]) ){
		if (empty ($_POST["lastName"]) ){
			$lastNameError = "See väli on kohustuslik!";		
		}
	}
	
	//kas e-post oli olemas
	if (isset ($_POST["signupEmail"]) ){ //kas keegi nuppu vajutas, kas signupEmail tekkis
		if (empty ($_POST["signupEmail"]) ){ //oli email, kuid see oli tühi
			//echo "email oli tühi";
			$signupEmailError = "See väli on kohustuslik!";		
		}
	}
	
	if (isset ($_POST["signupPassword"]) ){ 
		if (empty ($_POST["signupPassword"]) ){ 
			$signupPasswordError = "See väli on kohustuslik!";		
		} else {
			//tean, et oli parool ja see ei olnud tühi
			if (strlen($_POST["signupPassword"]) < 8){ //strlen- stringi pikkus
				$signupPasswordError = "Parool peab olema vähemalt 8 tähemärki pikk!";
			}
		}
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimise lehekülg</title>
	</head>
	<body>
		<h1>Logi sisse</h1>	
		
		<form method="POST">
			<input name="loginEmail" type="email" placeholder="E-post"> <?php echo $loginEmailError; ?>
			<br><br>
			
			<input name="loginPassword" type="password" placeholder="Parool"> <?php echo $loginPasswordError; ?>
			<br><br>
			
			<input type="submit" value = "Logi sisse">
		</form>
		
		<h1>Loo kasutaja</h1>	
		
		<form method="POST">
			<label>Nimi</label>
			<br>
			<input name="firstName" type="text"> <?php echo $firstNameError; ?>
			<br><br>
			
			<label>Perekonnanimi</label>
			<br>
			<input name="lastName" type="text"> <?php echo $lastNameError; ?>
			<br><br>
		
			<label>E-Post</label>
			<br>
			<input name="signupEmail" type="email"> <?php echo $signupEmailError; ?>
			<br><br>
			
			<label>Parool</label>
			<br>
			<input name="signupPassword" type="password"> <?php echo $signupPasswordError; ?>
			<br><br>
			
			<label>Sugu:</label>
			<input type="radio" name="gender" value="female">Naine
			<input type="radio" name="gender" value="male">Mees
			<br><br>
			
			<label>Telefoni number</label>
			<br>
			<input name="phoneNumber" type="text">
			<br><br>
			
			<input type="submit" value = "Loo kasutaja">
		</form>

	</body>
</html>