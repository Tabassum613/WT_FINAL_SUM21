<?php 

          include 'controllers/TutorController.php';
	 
?>
<html>
<head>

<script>
 
 var hasError=false;
 function get(id){
 return document.getElementById(id);
 }

 function validate(){
	
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
	 
	 

 refresh();
 if(get("pass").value == ""){
 hasError = true;
 get("err_pass").innerHTML = "**Password Required";
 }

 else if(get("pass").value.length <= 3){
 hasError = true;
 get("err_pass").innerHTML = "*Password must be >= 3 characters";
 get("err_pass").innerHTML = "*Password must contain at least 3 characters";
 }  
  return !hasError;
 }
 function refresh(){
 hasError=false;
 get("err_pass").innerHTML="";
 }     
  </script>
	 <link rel="stylesheet" type="text/css" href="style/T_login.css">
	<title>Tutor Login</title>
	<style>
input{
padding: 8px 10px;
border-radius: 5px;
margin: 5px;
border: 2px solid red;
}

 

</style>

</head>
<body>
      

      <form method="Post" onsubmit="return validate()" action="" style="
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
								     <h1>Sign in</h1>
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
      	    	   	   	   <input type="text"  id="email" placeholder="Email" name="email" size="40" value="<?php echo $email;?>">
      	    	   	   </td>

      	    	   	   <td><span id="err_email">
                                   <?php echo $err_email;?>
                           </span>
                            </td>
      	    	   </tr>
				   
				   <tr>
      	    	   	   <td>
      	    	   	   	   Password
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	   <input type="Password" id="pass" placeholder="Password" name="password" size="40" value="<?php echo $pass;?>">
      	    	   	   </td>

      	    	   	   <td><span id="err_pass">
      	    	   	   	   <?php echo $err_pass;?></span>
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