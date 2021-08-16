<?php 
          include 'Tutor_header.php';
          include 'controllers/TutorController.php';
           
		   if(!isset($_COOKIE['loggedTutor']))
          {
        header("Location: Tutor_Login.php");
              }
?>

  <h4 align="center">Welcome <?php echo $_COOKIE["loggedTutor"]; ?> </h4>
      

<!--All Categories starts -->

         <div class="center">
	      <h3 class="text">Dashboard <php </h3>
		 
	      <table class="table table-striped">
			
		
			
			
			
		
	</table>
	
</div>
<!--All Categories ends -->

