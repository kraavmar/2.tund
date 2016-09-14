<?php
	$firstName = "Mariann";
	$lastName = "Kraav";
	
	// echo trükib välja muutuja väärtuse
	// echo $firstName;
	// echo $lastName;
	
	echo $firstName." ".$lastName; // . liidab stringe
?>

<br>

<?php

	$age = 21;
	
	if ($age < 18){
		// kui vastus on tõene (true)	
		echo "alaealine";
	} else {
		// kui vastus on väär (false)
		echo "täisealine";
	}

?>

<br>

<?php

	for ($i = 1; $i <= $age; $i = $i + 1){ //for ($i = 0; $i < $age; $i = $i + 1
		//echo "palju ";
		echo $i."palju ";
	}
	echo "õnne";

?>

<br>

<?php

	echo date("l, d.F, Y, H.i.s");

?>