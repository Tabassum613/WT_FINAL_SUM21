<?php  

       include 'Tutor_header.php'; 

       include 'controllers/LearnerController.php';
       $id = $_GET["id"];
	   $d = getLearner($id);
 ?>


                   <form action="" method="post" enctype="multipart/form-data">
                	  <table align="center">
                           <input type="hidden" value="<?php echo $id ; ?>" name="id" >
							 
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
                                  <input type="text" name="name" value="<?php echo $d["name"]; ?>" size="40">
                              </td>
							  </tr>
							 
                           
							 
							 </tr>
                	  	     <tr>
                	  	     	 <td>
								    <b>Email</b>
								</td>
                	  	     	 <td>
                                    <input type="text" name="email" value="<?php echo $d["email"]; ?>" size="40">
                                 </td>
								 </tr>
							
                	  	     
							 
							 <tr>
                            <td>
							<b>Address</b>
							</td>
							<td>
      	    	   	   	       <select name="Address">
      	    	   	   	   	       <option selected disabled><?php echo $d["address"]; ?></option>
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
                                 <b>Postal Code</b>
                               </td>
                            
                               <td>
                                 <input type="text"  size="40" name="pcode" value="<?php echo $d["postal_code"];?>">
                               </td>
                               </tr>

						   
						   
				   
				              <tr>
      	    	   	          <td>
      	    	   	   	           <b>Phone Number</b>
      	    	   	          </td>
      	    
      	    	   	          <td>
                                  	<input type="text" name="num" value="<?php echo $d["number"]; ?>" size="40">
                              </td>
					    </tr>
				        
				   
				   
				   
							  <tr>
                             <td>
							     <b>Gender</b>
							 </td>
							 <td>
							 
                                  <input type="radio" name="gender" value="Male" <?php if($d["gender"] == "Male") echo "checked"?> > Male 
                                  <input type="radio" name="gender" value="Female"<?php if($d["gender"] == "Female") echo "checked"?> > Female
								  <input type="radio" name="gender" value="Other" <?php if($d["gender"] == "Other") echo "checked"?> > Other
                            </td>
							 </tr>
							 
                          
							  
                            <tr>
                            <td>
							<b>Blood Group</b>
							</td>
							<td>
      	    	   	   	       <select name="Blood">
      	    	   	   	   	       <option selected disabled><?php echo $d["blood_group"]; ?></option>
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
							        <b>Upload Your Photo</b> 
					           </td>
				             <td>
							      
							       <input type="file" name="image" value="<?php echo $d["img"];?>">
			    		       </td>
                               
				            </tr>
							 
				   
				             
							
							
						
							

                	  	 
                          
							 
							 <tr>
                	  	     	 <td>
								   <b>Confirm Password</b>
								 </td>
                	  	
							 <td>
      	    	   	   	         <input type="Password" placeholder="Confirm Password" name="confirm_password" value="<?php echo $d["password"];?>" size="40">
      	    	   	         </td>
                             </tr>
							 
                           
							 
                             <tr>
						       <td align="center" colspan="2">
							     <input type="submit" name="delete" value="Delete">
							   </td><br>
					        </tr>
							 
							
                	  </table>
                </form>   	
<?php include 'Tutor_footer.php';?>