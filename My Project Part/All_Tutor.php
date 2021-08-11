        <?php  include 'Tutor_header.php';  ?>
        <?php
          include 'controllers/TutorController.php';
		  $tutor = getAllTutor();
        ?>

<!--All Categories starts -->

<div class="center">
	<h3 class="text">All ll</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Image</th>
			<th>Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Gender</th>
			<th>Blood Group</th>
			<th>Category</th>
			
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($tutor as $l){
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td><img src='".$l["img"]."' width='60px' height='60px'></td>";
						echo "<td>".$l["name"]."</td>";
						echo "<td>".$l["email"]."</td>";
						echo "<td>".$l["address"]."</td>";
						//echo "<td>".$l["nid"]."</td>";<th>NID</th>
						//echo "<td>".$l["number"]."</td>";
						echo "<td>".$l["gender"]."</td>";
						echo "<td>".$l["blood group"]."</td>";
						echo "<td>".$l["category"]."</td>";
					echo "</tr>";
					$i++;
				}
			?>
			
			
		</tbody>
	</table>
</div>
<!--All Categories ends -->
     
		
		<?php include 'Tutor_footer.php';?>
		
		
	