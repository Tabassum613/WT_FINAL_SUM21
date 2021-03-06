<?php
      include 'Model/db_config.php';

      
     $fname="";
     $lname="";
     $err_name="";

     $email="";
     $err_email=""; 

	 $gender="";
     $err_gender="";
	 
	 $add="";
     $err_add="";
	 
	 $pcode="";
     $err_pcode="";
	 
	 $pass="";
     $err_pass="";
	 $cpass="";
     $err_cpass="";

     $services=[];
     $err_services="";
     $err_db="";

     $message="";
     $err_message="";

     $hasError = false;
	 
	 $Address = array("Dhaka","Chittagong","Rajshahi","Khulna");

      function Service($service){
				global $services;
				foreach($services as $s){
					if($s == $service)
					{
					 return true;
				    }
				}
				return false;
			}
			
			
	if (isset($_POST["sign-up"]))
     {
		 
		 //Name  Validation
				
                if (empty($_POST["fname"]) && empty($_POST["lname"]))   
        {
            $err_name="First Name & Last Name required";
            $hasError = true;
        }

         elseif(!is_numeric($_POST["fname"]) && !empty($_POST["fname"]) && !is_numeric($_POST["lname"]) && !empty($_POST["lname"]))
               {
                $fname=$_POST["fname"];
                $lname=$_POST["lname"];
               }


           elseif(!is_numeric($_POST["fname"]) && !empty($_POST["fname"]))
               {
                   $err_name="Last Name required";
                    $hasError = true; 
					$fname=$_POST["fname"];
               }

             elseif(!is_numeric($_POST["lname"]) && !empty($_POST["lname"]))
               {
                   $err_name="First Name required";
                    $hasError = true; 
					 $lname=$_POST["lname"];
               }
			   elseif(is_numeric($_POST["fname"]) && is_numeric($_POST["lname"]))
               {
                   $err_name="Number is not allowed";
                    $hasError = true; 
               }

               elseif(is_numeric($_POST["fname"]) || is_numeric($_POST["lname"]))
               {
                   if(is_numeric($_POST["fname"]))
                   {
                    $err_name="Numeric number is not allowed ";  
                    $hasError = true; 
                   }
                    elseif(is_numeric($_POST["lname"]))
                    {
                    $err_name="Numeric number is not allowed ";
                    $hasError = true;
                     }
                  
               }
		      
			  
			  //Email  Validation

                 
            if(empty($_POST["email"])){
                  
                $err_email="Email required ";
                 $hasError = true;
                 }
                
               else if(strpos($_POST["email"],"@"))
               {
                 if(strpos($_POST["email"],"."))
                 {
                  $email=$_POST["email"];
                }
                else{
                     $err_email="Not accepted";
                     $hasError = true;
                }
               }
              
                else if(strpos($_POST["email"],"."))
               {
                 if(strpos($_POST["email"],"."))
                 {
                   $err_email="use .(dot) after @";
                   $hasError = true;
                 }
                 
               }
               
               else{
                   $err_email="Invalid email";  
                   $hasError = true;
                }
				
				
				
				
             //Gender Validation
            
            if(!isset($_POST["gender"])){
                $err_gender="Gender required";
                $hasError = true;
            }
                else{
                $gender=$_POST["gender"]; 
                
            }  
			
			
			//Postal Code Validation

       if(empty($_POST["pcode"]))    
     	{
			$err_pcode="Postal code required";
			$hasError = true;
		}

       elseif(is_numeric($_POST["pcode"]) && !empty($_POST["pcode"]))
		{
			$pcode=$_POST["pcode"];
		}
         elseif(!is_numeric($_POST["pcode"]))
		 {
			 $err_pcode="Invalid";
			$hasError = true;
		 }
			
			
			
			  
			  //Password Validation
			  
			  
     	
      if(empty($_POST["password"]))                      //Password
     	{
			$err_pass="Password required";
			$hasError = true;
		}

		elseif (strlen($_POST["password"])<=8 && !empty($_POST["password"]))  
	    {
			$pass=$_POST["password"];
		}

	   
	   
		if(empty($_POST["confirm_password"]))              //Confirm password 
     	{
			$err_cpass="Confirm Password required";
			$hasError = true;
		}

		elseif ($_POST["password"]!=$_POST["confirm_password"])  
	    {
			$err_cpass="Password does not Matched";
			$hasError = true;
		}

		else
		{
			$pass=$_POST["password"];
			$cpass=$_POST["confirm_password"];
		}
		
		

         //Check Box Validation

         if(!isset($_POST["services"]))   
		{
			$err_services="   ";
			$hasError = true;
		}
		else
		{
			$services = $_POST["services"];
		}
		
		
        //Address
			
			if(!isset($_POST["Address"])){
				$err_add="Address required";
				$hasError = true;
			}
				else{
				$add=$_POST["Address"]; 
				
            }  
		 

	 //for Database

		if (!$hasError) 
            {
            	$rs= InsertData($fname,$lname,$email,$gender,$add,$pass,$cpass,$pcode);
            	var_dump($rs);	
            }

     }

     else if (isset($_POST["login"]))          //login
     {
     	if(empty($_POST["email"])){
                  
                $err_email="Email Required ";
                 $hasError = true;
                 }
                
               else if(strpos($_POST["email"],"@"))
               {
                 if(strpos($_POST["email"],"."))
                 {
                  $email=$_POST["email"];
                }
                else{
                     $err_email="Not accepted";
                     $hasError = true;
                }
               }
              
                else if(strpos($_POST["email"],"."))
               {
                 if(strpos($_POST["email"],"."))
                 {
                   $err_email="use .(dot) after @";
                   $hasError = true;
                 }
                 
               }
               
               else{
                   $err_email="Invalid email";  
                   $hasError = true;
                }

              if(empty($_POST["password"]))   
     	{
			$err_pass="Password Required";
			$hasError = true;
		}

		elseif (strlen($_POST["password"])<=8 && !empty($_POST["password"]))  
	    {
			$pass=$_POST["password"];
		}

		

		if (!$hasError) 
		{
			if(AuthenticateData($email, $pass))
			{
				header("Location: AddCatagory.php");
			}

			$err_db="Username Or Password Invalid";
		}

     }

     function InsertData($fname,$lname,$email,$gender,$add,$pass,$cpass,$pcode)
     {
		 $query="INSERT INTO users VALUES(NULL,'$fname','$lname','$email','$gender','$add','$pass','$cpass','$pcode')";
     	 return execute($query);
     }

     function AuthenticateData($email, $pass)
     {
     	$query= "select * from users where Email='$email' and Password='$pass'";
     	$rs= get($query);
     	if(count($rs)>0)
     	{
     		return true;
     	}

     	return false;
     }

?>