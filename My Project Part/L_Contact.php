
<?php 
     
          include 'Learner_header.php';
		  include 'controllers/TutorController.php';
		  $tutor = getAllTutor();
?>
      

	<div class="center">
	<table class="table table-striped">
	   <h1>ChatBox</h1>
	   </br>
	   
		<tbody>
		<tr></tr>
					    <tr></tr>
						<tr></tr>
					    <tr></tr>
						<tr></tr>
					    <tr></tr>
						<tr></tr>
					    <tr></tr>
						<tr></tr>
					    <tr></tr>
						<tr></tr>
					    <tr></tr>
			<?php
				foreach($tutor as $t){
					    echo "<tr></tr>";
						echo "<tr></tr>";
						echo "<tr></tr>";
						echo "<tr></tr>";
					    echo "<tr>";
						echo "<td><img src='".$t["img"]."' width='60px' height='60px'></td>";
						echo "<td>".$t["name"]."</td>";
						echo '<td><a href="T_ContactForm.php?id='.$t["id"].'" class="btn btn-success">Message</a></td>';
						
					echo "</tr>";
				
				}
			?>
			
			
		</tbody>
	</table>
    </div>
	
	<?php include 'Learner_footer.php';?>

