<?php  
     include 'Controller/StudentController.php';
     $catagory = allStudents();
?>

<html>
<head>
     <title>All Students Information</title>
</head>
<body>
      <h1 align="center">All Students Information</h1><br>
      <table align="center">
               <th>Sl</th>&nbsp;&nbsp;&nbsp;&nbsp;
               <th>Name</th>&nbsp;&nbsp;&nbsp;&nbsp;
               <th>Date of Birth</th>&nbsp;&nbsp;&nbsp;&nbsp;
               <th>CGPA</th>&nbsp;&nbsp;&nbsp;&nbsp;
               <th>Credit</th>&nbsp;&nbsp;&nbsp;&nbsp;
               <th>Department</th>&nbsp;&nbsp;&nbsp;&nbsp;
               <th></th>&nbsp;&nbsp;&nbsp;&nbsp;
               <th></th>&nbsp;&nbsp;&nbsp;&nbsp;

               <?php  
                    $i=1;
                    foreach ($catagory as $c) 
                    {
                               echo "<tr>";
                               echo "<td>$i</td>";
                               echo "<td>".$c["Name"]."</td>";
                               echo "<td>".$c["DOB"]."</td>";
                               echo "<td>".$c["CGPA"]."</td>";
                               echo "<td>".$c["Credit"]."</td>";
                               echo "<td>".$c["Department"]."</td>";
                               echo '<td><a href="EditStudent.php?id='.$c["id"].'">Edit</a></td>';
                               echo '<td><a href="DeleteStudent.php?id='.$c["id"].'">Delete</a></td>';
                               echo "</tr>";
                         $i++;
                    }
               ?>
      </table>
</body>
</html>