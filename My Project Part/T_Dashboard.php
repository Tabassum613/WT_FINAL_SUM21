<?php 
          include 'Tutor_header.php';

          include 'controllers/TutorController.php';
		  $tutor = getAllTutor();
		  
?>

<!--All Categories starts -->

         <div class="center">
	      <h3 class="text">All ll</h3>
		  <form action="" method="post" enctype="multipart/form-data">
	      <table class="table table-striped">
			
		
			<?php
			
			foreach($tutor as $a){
				
			  echo "<td>";
									
						echo "<tr><img src='".$a["img"]."' width='200px' height='200px'></tr>";
						echo "<br>";
						echo "<br>";
						echo "Name : ";
						echo "<tr>".$a["name"]."</tr>";
						echo "<br>";
						echo "Email : ";
						echo "<tr>".$a["email"]."</tr";
						echo "<br>";
						echo "<br>";
						echo "Address : ";
						echo "<tr>".$a["address"]."</tr>";
						echo "<br>";
						echo "NID Number : ";
						echo "<tr>".$a["nid"]."</tr>";
						echo "<br>";
						echo "Phone Number : ";
						echo "<tr>".$a["number"]."</tr>";
						echo "<br>";
						echo "Gender : ";
						echo "<tr>".$a["gender"]."</tr>";
						echo "<br>";
						echo "Blood Group : ";
						echo "<tr>".$a["blood group"]."</tr>";
						echo "<br>";
						echo "Category : ";
						echo "<tr>".$a["category"]."</tr>";
						echo "<br>";
						echo "<br>";
			echo "</td>";
			}
			
			?>
			
			
		
	</table>
	<//form>
</div>
<!--All Categories ends -->
     
		
		<?php include 'Tutor_footer.php';?>

