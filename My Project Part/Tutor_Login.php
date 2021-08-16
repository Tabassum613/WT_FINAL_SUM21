<?php 

          include 'controllers/TutorController.php';
	 
?>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="style/T_login.css">
	<title>Tutor Login</title>
</head>
<body>
      

      <form method="Post" action="">
      	    <table align="center">
                             <tr>
                             	 <td  align="center" colspan="2">
								   <b>
								     <h2>Sign in</h2>
								   </b>
								 </td>
                             </tr>
							 
							 <tr>
                              <td>
                              	<span>
                              		<?php echo $err_db;?>	
                              	</span>
                              </td>
                            </tr>
							
							
      	    	   <tr>
				       <td>
      	    	   	   	   Email
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="text" placeholder="Email" name="email" size="40" value="<?php echo $email;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_email;?>
      	    	   	   </td>
      	    	   </tr>
				   
				   <tr>
      	    	   	   <td>
      	    	   	   	   Password
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="Password" placeholder="Password" name="password" size="40" value="<?php echo $pass;?>">
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <?php echo $err_pass;?>
      	    	   	   </td>
      	    	   </tr>
				   
				   
                            <tr>
						     <td align="center" colspan="2"><input type="submit" name="login" value="Login"></td>
					        </tr>
							
      	    	   </tr>
				   
				   <tr>
                	  	     	<td align="center" colspan="2">Create Account?  <a href="Tutor_Signup.php">Sign Up </a></td>
                  </tr>
      	    	 
      	    </table>
      </form>
</body>
</html>