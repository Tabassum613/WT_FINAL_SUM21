<?php 
          include 'Learner_header.php';
          include 'controllers/TutorController.php';
		  $tutor = getAllTutor();
?>

<!--All Categories starts -->

<div class="center">
	<h3 class="text">All ll</h3>
	<table class="table table-striped">
			
		
			<?php
			
			foreach($tutor as $m){
				
			  echo "<td>";
						
							
						/*echo "<tr><img src='".$m["img"]."' width='200px' height='200px'></tr>";
						echo "<br>";
						echo "<br>";
						echo "Name : ";
						echo "<tr>".$m["name"]."</tr>";
						echo "<br>";
						echo "Email : ";
						echo "<tr>".$m["email"]."</tr";
						echo "<br>";
						echo "<br>";
						echo "Address : ";
						echo "<tr>".$m["address"]."</tr>";
						echo "<br>";
						echo "NID Number : ";
						echo "<tr>".$m["nid"]."</tr>";
						echo "<br>";
						echo "Phone Number : ";
						echo "<tr>".$m["number"]."</tr>";
						echo "<br>";
						echo "Gender : ";
						echo "<tr>".$m["gender"]."</tr>";
						echo "<br>";
						echo "Blood Group : ";
						echo "<tr>".$m["blood group"]."</tr>";
						echo "<br>";
						echo "Category : ";
						echo "<tr>".$m["category"]."</tr>";
						echo "<br>";
						echo "<br>";*/
			echo "</td>";
			}
			
			?>
			
			
		
	</table>
</div>
<!--All Categories ends -->
     
		
		<?php include 'Learner_footer.php';?>

