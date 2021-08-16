<?php
          include 'controllers/TutorController.php';
		  $email=$_GET["email"];
		  $tutor=checkEmail($email);
		  if($tutor){
			echo "INVALID";
		}
		else echo "VALID";    
?>

