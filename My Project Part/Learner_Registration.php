<?php
          include 'controllers/LearnerController.php';
?>
<html>
  <head>
	<link rel="stylesheet" type="text/css" href="style/L_Registration.css">
	<style>
input{
padding: 4px 5px;
border-radius: 5px;
margin: 5px;
border: 2px solid red;
}

 

</style>
	
	 <script type="text/javascript">

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
				
				if(get("add").selectedIndex==0){
                    hasError = true;
                    get("err_add").innerHTML = "**Address required";
                }
                
                
                if(isNaN(get("num").value))
                {
                    hasError = true;
                    get("err_num").innerHTML="**Phone Number Should be Integer Value";
                }
                
                
             
            
             if(get("nid").value == "")
                {
                    hasError = true;
                    get("err_nid").innerHTML="**NID Number Required";
                }

 

                if(isNaN(get("nid").value))
                {
                    hasError = true;
                    get("err_nid").innerHTML="**NID Number Should be Integer Value";
                }
				
				
                
                if(get("num").value == "")
                {
                    hasError = true;
                    get("err_num").innerHTML="**Number Required";
                }

 

                if(isNaN(get("num").value))
                {
                    hasError = true;
                    get("err_num").innerHTML="** Number Should be Integer Value";
                }
          
		  
		  
		  
		  
		  
		  if(get("category").value == ""){
                    hasError = true;
                    get("err_category").innerHTML = "**Category requiredReq";
                }
		  
				
	  if(get("pass").value == "")
                {
                    hasError = true;
                    get("err_pass").innerHTML="**Password Required";
                }
                if(get("cpass").value == "")
                {
                    hasError = true;
                    get("err_cpass").innerHTML="**Confirm Password Required";
                }

 

                if(get("pass").value != get("cpass").value)
                {
                    hasError = true;
                    get("err_cpass").innerHTML="**Password does not Matched";
                }
				
				
				
            
                    if(get("bld").selectedIndex==0){
                    hasError = true;
                    get("err_bld").innerHTML = "**Blood Group required";
                }

 
 return !hasError;
 }
 function refresh(){
 hasError=false;
 get("err_name").innerHTML="";
 }
	
	</script>
			 
			 
			 
			 
			 
			 
	
  </head>
  <body>
                 <form action="" method="post" enctype="multipart/form-data" style="
background: rgb(0,0,0,0.5);
width: 40%;
margin: 150px auto;
padding: 20px 0;
border-radius: 15px;
box-shadow: 5px 5px 8px gray;
">
                	  <table align="center">
                             <tr>
                             	 <td  align="center" colspan="2">
								   <b>
								     <h1><b>Learner Registration Form</b></h1>
								   </b>
								 </td>
                             </tr>
							 
							 <tr><td></td><td>
							  <tr><td></td><td>
							   <tr><td></td><td>
							   
							 <tr>
                              <td>
                              	<span>
                              		<?php echo $err_db;?>	
                              	</span>
                              </td>
                            </tr>
							 
							 
							 
                	  	     <tr>
                              <td>
                                   <b> Name  </b> 
                              </td>
							  <td>
                                  <input type="text" placeholder="Name" name="name" value="<?php echo $name; ?>" size="40">
                              </td>
							  </tr>
							 
                             <tr>
							 <td>
							 </td>
                              <td>
                              	<span>
                              		<?php echo $err_name;?>	
                              	</span>
                              </td>
                            </tr>
							 
							 </tr>
                	  	     <tr>
                	  	     	 <td>
								    <b>Email</b>
								</td>
                	  	     	 <td>
                                    <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>" size="40">
                                 </td>
								 </tr>
							 
                                 <tr>
								 <td>
								 </td>
                                 <td>
                                    <span>
                                        <?php echo $err_email;?>    
                                    </span>
                                 </td> 
      	    	            </tr>
                	  	     
							 
							 <tr>
                            <td>
							<b>Address</b>
							</td>
							<td>
      	    	   	   	       <select name="Address">
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
                                 <td>
							     </td>								 
      	    	   	              <td>
                              	<span>
                              	   <?php echo $err_add;?>
                              	</span>
                            </td>  
                            </tr>
							
				        
				   <tr>
                               <td>
                                 <b>Postal Code</b>
                               </td>
                            
                               <td>
                                 <input type="text" placeholder="PostalCode" size="40" name="pcode" value="<?php echo $pcode;?>">
                               </td>
                               </tr>

                               <tr>
							    <td></td>
                               <td>
                       	          <span>
                       	   	          <?php echo $err_pcode;?>
                       	           </span>
                               </td>
                           </tr>
						   
						   
				   
				        <tr>
      	    	   	          <td>
      	    	   	   	           <b>Phone Number</b>
      	    	   	          </td>
      	    
      	    	   	          <td>
                                  	<input type="text" placeholder="Phone Number" name="num" value="<?php echo $num; ?>" size="40">
                              </td>
					    </tr>
				        <tr> 
						      <td></td>
                              <td>
                              	<span>
                              		<?php echo $err_num;?>	
                              	</span>
                              </td> 
      	    	        </tr>
				   
				   
				   
							  <tr>
                             <td>
							     <b>Gender</b>
							 </td>
							 <td>
							 
                                  <input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked"?> > Male 
                                  <input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "checked"?> > Female
								  <input type="radio" name="gender" value="Other" <?php if($gender == "Other") echo "checked"?> > Other
                            </td>
							 </tr>
							 
                             <tr>
							 <td>
							 </td>
                             <td>
                                <span><?php echo $err_gender;?></span>
                            </td>
                              </tr>
							  
							  
                            <tr>
                            <td>
							<b>Blood Group</b>
							</td>
							<td>
      	    	   	   	       <select name="Blood">
      	    	   	   	   	       <option selected disabled>Select Blood Group</option>
								  <?php
								  foreach($Blood as $b)
								  {
								  	if($bld == $b)
								  		echo "<option selected>$b</option>" ;
								  	else
								  		echo "<option>$b</option>";
								  }
								  ?>
      	    	   	   	        </select>
      	    	   	             </td>
								  </tr>
							 
                                 <tr>
                                 <td>
							     </td>								 
      	    	   	              <td>
                              	<span>
                              	   <?php echo $err_bld;?>
                              	</span>
                            </td>  
                            </tr>
							
							<tr>
                               <td>
							        <b>Upload Your Photo</b> 
					           </td>
				           
                               <td>
							       <input type="file" name="image">
			    		       </td>
				            </tr>
							 </tr>
				   
				             <tr>
							
							
						
							

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
      	    	   	            <td>
      	    	   	   	             <?php echo $err_pass;?>
      	    	   	            </td>
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
      	    	   	         <td>
      	    	   	   	             <?php echo $err_cpass;?>
      	    	   	         </td>
                             </tr>
							 
							 
                             <tr>
						       <td align="center" colspan="2">
							     <input type="submit" name="register" value="Register">
							   </td><br>
					        </tr>
							 
							
                	  </table>
                </form>   	
   </body>
</html>