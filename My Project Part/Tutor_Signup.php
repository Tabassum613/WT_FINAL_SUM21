<script src="JS/tutor_signup.js"></script>
<?php
          include 'controllers/TutorController.php';
?>
<html>
  <head>
          <link rel="stylesheet" type="text/css" href="style/T_signup.css">
		  	<style>
input{
padding: 4px 5px;
border-radius: 5px;
margin: 4px;
border: 2px solid red;
}


</style>
		  <script>
 var hasError=false;
 function get(id){
	
 return document.getElementById(id);
 }
 
 function validate(){
 
 refresh();
 if(get("name").value == ""){
 hasError = true;
 get("err_name").innerHTML = "*Name Req*";
 }
 
 else if(get("name").value.length <= 3){
 hasError = true;
 get("err_name").innerHTML = "*Name must be >= 3 characters";
 get("err_name").innerHTML = "*Space req";
 get("err_name").innerHTML = "*Name must contain at least 3 characters with space";
 }
 
   if(get("email").value == "")
                 {
                     hasError = true;
                     get("err_email").innerHTML= "**Email Required";
                 }

                if(get("email").value.indexOf('@') > get("email").value.indexOf('.'))
                {
                    hasError = true;
                    get("err_email").innerHTML="**Invalid ('@') & ('.') Position";
                }
	 
	 
	 
 return !hasError;
 
 }
 
	
	
	</script>

  </head>
  <body>
                 <form method="post" onsubmit= "return validate()" action=""  style="
background: rgb(0,0,0,0.5);
width: 40%;
margin: 30px auto;
padding: 20px 0;
border-radius: 15px;
box-shadow: 5px 5px 8px gray;
">
                	  <table align="center">
                                   <tr><td colspan="2" align="center">
								   <h1><b>Sign up</b></h1>
								  </td></tr>
							 
							
							 <tr><td><span><?php echo $err_db;?></span> </td> </tr>
							 
							 
							 
                	  	     <tr>
                              <td>
                                   <b> Name  </b> 
                              </td>
							  <td>
                                  <input type="text" placeholder="Name" id="name" name="name" value="<?php echo $name; ?>" size="40">
                              </td>
							  </tr>
							 
                             <tr>
							 <td>
							 </td>
                              <td>
                              	<span id="err_name"><?php echo $err_name;?></span>
                              </td>
                            </tr>
							 
							 
                	  	     <tr>
                	  	     	 <td>
								    <b>Email</b>
								</td>
							    <td>
                                    <input type="text" onfocusout="checkEmail(this)" placeholder="Email" name="email" value="<?php echo $email; ?>" size="40">
                                 </td>
								 </tr>
							 
                                 <tr>
								 <td>
								 </td>
                                 <td>
                                    <span id="err_email">
                                        <?php echo $err_email;?>    
                                    </span>
                                 </td> 
      	    	            </tr>
                	  	     
							 
							  <tr>
                             <td>
							     <b>Gender</b>
							 </td>
							 <td>
							 
                                  <input type="radio" name="gender" id="Male" value="Male" <?php if($gender == "Male") echo "checked"?> > Male 
                                  <input type="radio" name="gender" id="Female" value="Female" <?php if($gender == "Female") echo "checked"?> > Female
                            </td>
							 </tr>
							 
                             <tr>
							 <td>
							 </td>
                             <td>
                                <span id="err_gender"><?php echo $err_gender;?></span>
                            </td>
                              </tr>
							  
							  
                           <tr>
                            <td>
							<b>Address</b>
							</td>
							<td>
      	    	   	   	       <select id="address" name="Address">
      	    	   	   	   	       <option selected disabled>Address</option>
								  <?php
								  foreach($Address as $a)
								  {
								  	if($add == $a)
								  		echo "<option selected>$a</option>" ;
								  	else
								  		echo "<option>$a</option>";
								  }
								  ?>
      	    	   	   	        </select>
      	    	   	             </td>
								  </tr>
							 
                                 <tr>
                                 <td></td>
								 <td>
                              	<span ="err_add"><?php echo $err_add;?></span>
                                </td>  
                                </tr>
							
							

                	  	     <tr>
                	  	     	 <td>
								    <b>Password<b>
								</td>
							    <td>
      	    	   	   	           <input type="Password" placeholder="Password" name="password" value="<?php echo $pass;?>" size="40">
      	    	   	            </td>
                             </tr>
							 
                             <tr>
							 <td>
							 </td>
      	    	   	            <td><span>
      	    	   	   	             <?php echo $err_pass;?>
      	    	   	            </span></td>
      	    	            </tr>
							 
							 <tr>
                	  	     	 <td>
								   <b>Confirm Password</b>
								 </td>
                	  	
							 <td>
      	    	   	   	         <input type="Password" placeholder="Confirm Password" name="confirm_password" value="<?php echo $cpass;?>" size="40">
      	    	   	         </td>
                             </tr>
							 
                             <tr>
							 <td>
							 </td>
      	    	   	         <td><span>
      	    	   	   	             <?php echo $err_cpass;?>
      	    	   	         </span></td>
                             </tr>
							 
							 
							
							
							 <tr>
							   <td  colspan="2">
							   <br><input type="checkbox" value="" <?php if(Service("")) echo "checked" ?> name="services[]"> I agree to the term of services<br><br>
							   </td>
							 
                              <td>
                              	<span>
                              	   <?php echo $err_services;?>
                              	</span>
                              </td>
							 </tr>
							 
                             <tr>
						       <td align="center" colspan="2">
							     <input type="submit" name="sign_up" value="SignUp">
							   </td><br>
					        </tr>
							 <tr>
                	  	     	<td align="center" colspan="2"> Do you have an account? <a href="Tutor_login.php">Sign in </a></td>
                	  	     </tr>
							
                	  </table>
                </form>   	
   </body>
</html>