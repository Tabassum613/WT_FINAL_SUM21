<?php 
          include 'Learner_header.php';
          include 'controllers/LearnerController.php';
		  
		   if(!isset($_COOKIE['loggedLearner']))
          {
        header("Location: Learner_Login.php");
              }
?>

  <h4 align="center">Welcome <?php echo $_COOKIE["loggedLearner"]; ?> </h4>
      


     
		
		<?php include 'Learner_footer.php';?>

