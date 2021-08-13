<?php
     include 'models/db_config.php';    
     
	 $name="";
     $err_name="";

     $email="";
     $err_email=""; 

	 $gender="";
     $err_gender="";
	 
	 
	 $pass="";
     $err_pass="";
	 $cpass="";
     $err_cpass="";

     $services=[];
     $err_services="";
	 
	 $nid="";
     $err_nid=""; 
	 
     $num="";
     $err_num="";
	 
	 $category="";
     $err_category="";
	 
     $add="";
     $err_add="";
	 
	 $bld="";
     $err_bld="";
	
	 $image="";
     //$err_image="";
	 
     $err_db="";
     $hasError = false;
	 
	 $Address = array("Dhaka","Chittagong","Rajshahi","Khulna","Sylhet","Barisal","Mymensingh","Rangpur");
     $Blood = array("A+","A-","B+","B-","O+","O-","AB+","AB-");
	 
	 
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
			
			
     if(isset($_POST["sign_up"]))
     {
		 
		 //Name  Validation
				
                 if(empty($_POST["name"])){
               $err_name="Name required";
               $hasError = true;
               }
               elseif(!is_numeric($_POST["name"]) && !empty($_POST["name"]))
               {
               	if(strpos($_POST["name"]," ") && strlen($_POST["name"]) >= 6)
               	{
                $name=$_POST["name"];
                }

                elseif(!strpos($_POST["name"]," ") && strlen($_POST["name"]) >= 6)
               	{
                $err_name="Space required";
			        $hasError = true;
                }

                elseif(strpos($_POST["name"]," ") && strlen($_POST["name"]) < 6)
               	{
                $err_name="Name must contain at least 6 characters";
			        $hasError = true;
                }
                
                elseif(!strpos($_POST["name"]," ") && strlen($_POST["name"]) < 6)
                {
                	$err_name="Name must contain at least 6 characters with space";
			        $hasError = true;
                }
               
			   }
			   
				elseif(is_numeric($_POST["name"]))
				{
                    $err_name="Number is not allowed";
			        $hasError = true; 
				}
		      
			  
			  //Email  Validation

                 
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
				
				
           
				//Address
			
			if(!isset($_POST["Address"])){
				$err_add="Address Required";
				$hasError = true;
			}
			else{
				$add=$_POST["Address"]; 
				
            } 
			
				
				
             //Gender Validation
            
            if(!isset($_POST["gender"])){
                $err_gender="Gender Required";
                $hasError = true;
            }
                else{
                $gender=$_POST["gender"]; 
                
            }  
			
			
			  
			  //Password Validation
			  
			  
     	
      if(empty($_POST["password"]))   
     	{
			$err_pass="Password Required";
			$hasError = true;
		}

		elseif (strlen($_POST["password"])<=8 && !empty($_POST["password"]))  
	    {
			$pass=$_POST["password"];
		}

		
       //Confirm password validation
	   
	   
		if(empty($_POST["confirm_password"]))    
     	{
			$err_cpass="Confirm Password Required";
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
		
		
        


			if(!$hasError){
			$rs = insertUser($name,$email,$gender,$add,$cpass); //value asle ai function call hobe
			if($rs === true){
				header("Location: Tutor_Registration.php");
			}
			$err_db = "dddddddddddddddddd";
			
		    }

     }
	 
	 
	 
	 
	    elseif(isset($_POST["register"]))
         {
	
		 
		 //Name  Validation
				
                 if(empty($_POST["name"])){
               $err_name="Name required";
               $hasError = true;
               }
               elseif(!is_numeric($_POST["name"]) && !empty($_POST["name"]))
               {
               	if(strpos($_POST["name"]," ") && strlen($_POST["name"]) >= 6)
               	{
                $name=$_POST["name"];
                }

                elseif(!strpos($_POST["name"]," ") && strlen($_POST["name"]) >= 6)
               	{
                $err_name="Space required";
			        $hasError = true;
                }

                elseif(strpos($_POST["name"]," ") && strlen($_POST["name"]) < 6)
               	{
                $err_name="Name must contain at least 6 characters";
			        $hasError = true;
                }
                
                elseif(!strpos($_POST["name"]," ") && strlen($_POST["name"]) < 6)
                {
                	$err_name="Name must contain at least 6 characters with space";
			        $hasError = true;
                }
               
			   }
			   
				elseif(is_numeric($_POST["name"]))
				{
                    $err_name="Number is not allowed";
			        $hasError = true; 
				}
		      
			  
			  //Email  Validation

                 
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
				
				
				  //**********************National ID Number Validation***************
			
			if(empty($_POST["nid"])){
				$err_nid="National ID Number Required";
				$hasError = true;
			}

			    elseif(!is_numeric($_POST["nid"]) && !empty($_POST["nid"]))
                {
                $err_nid=" NID Number Required";
				$hasError = true;
                }

				elseif(is_numeric($_POST["nid"]))
			{
				$nid=$_POST["nid"]; 
				
            }    
             

            //*****************Number Validation*********************
			
			
             if(empty($_POST["num"])){
				$err_num="Phone Number Required";
				$hasError = true;
			}

			    elseif(!is_numeric($_POST["num"]) && !empty($_POST["num"]))
                {
                $err_num=" Phone Number Required";
				$hasError = true;
                }

				elseif(is_numeric($_POST["num"]))
			{
				$num=$_POST["num"]; 
				
            }    
			
			
			
			//Address
			
			if(!isset($_POST["Address"])){
				$err_add="Address Required";
				$hasError = true;
			}
			else{
				$add=$_POST["Address"]; 
				
            } 
			
			
			 //Blood Group
			
			if(!isset($_POST["Blood"])){
				$err_bld="Blood Group Required";
				$hasError = true;
			}
			else{
				$bld=$_POST["Blood"]; 
				
            } 
			
				
             //Gender Validation
            
            if(!isset($_POST["gender"])){
                $err_gender="Gender Required";
                $hasError = true;
            }
                else{
                $gender=$_POST["gender"]; 
                
            }  
			
			   //*********************Category validation***************

             if(empty($_POST["category"]))
            {
				$err_category ="Category Required";
				$hasError = true;
            }
            else
            {
				$category = $_POST["category"];
            }

			  
			  //Password Validation
			  
			  
     	
      if(empty($_POST["password"]))   
     	{
			$err_pass="Password Required";
			$hasError = true;
		}

		elseif (strlen($_POST["password"])<=6 && !empty($_POST["password"]))  
	    {
			$pass=$_POST["password"];
		}

		
       //Confirm password validation
	   
	   
		if(empty($_POST["confirm_password"]))    
     	{
			$err_cpass="Confirm Password Required";
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

       
        $fileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
		$file = "storage/product_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["image"]["tmp_name"],$file);

			if(!$hasError){
			$rs = insertTutor($name,$email,$add,$nid,$num,$gender,$bld,$file,$category,$cpass);
			if($rs === true){
				header("Location: All_Tutor.php");
				
			}
			
			$err_db = "Data";
			}

     }
	 
	 //****************************************Update Profile***************************************
	 
	 
	/* elseif(isset($_POST["update"]))
         {
	
		 
		 //Name  Validation
				
                 if(empty($_POST["name"])){
               $err_name="Name required";
               $hasError = true;
               }
               elseif(!is_numeric($_POST["name"]) && !empty($_POST["name"]))
               {
               	if(strpos($_POST["name"]," ") && strlen($_POST["name"]) >= 6)
               	{
                $name=$_POST["name"];
                }

                elseif(!strpos($_POST["name"]," ") && strlen($_POST["name"]) >= 6)
               	{
                $err_name="Space required";
			        $hasError = true;
                }

                elseif(strpos($_POST["name"]," ") && strlen($_POST["name"]) < 6)
               	{
                $err_name="Name must contain at least 6 characters";
			        $hasError = true;
                }
                
                elseif(!strpos($_POST["name"]," ") && strlen($_POST["name"]) < 6)
                {
                	$err_name="Name must contain at least 6 characters with space";
			        $hasError = true;
                }
               
			   }
			   
				elseif(is_numeric($_POST["name"]))
				{
                    $err_name="Number is not allowed";
			        $hasError = true; 
				}
		      
			  
			  //Email  Validation

                 
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
				
				
				  //**********************National ID Number Validation***************
			
			if(empty($_POST["nid"])){
				$err_nid="National ID Number Required";
				$hasError = true;
			}

			    elseif(!is_numeric($_POST["nid"]) && !empty($_POST["nid"]))
                {
                $err_nid=" NID Number Required";
				$hasError = true;
                }

				elseif(is_numeric($_POST["nid"]))
			{
				$nid=$_POST["nid"]; 
				
            }    
             

            //*****************Number Validation*********************
			
			
             if(empty($_POST["num"])){
				$err_num="Phone Number Required";
				$hasError = true;
			}

			    elseif(!is_numeric($_POST["num"]) && !empty($_POST["num"]))
                {
                $err_num=" Phone Number Required";
				$hasError = true;
                }

				elseif(is_numeric($_POST["num"]))
			{
				$num=$_POST["num"]; 
				
            }    
			
			
			
			//Address
			
			if(empty($_POST["Address"])){
				$err_add="Address Required";
				$hasError = true;
			}
			else{
				$add=$_POST["Address"]; 
				
            } 
			
			
			 //Blood Group
			
			if(!isset($_POST["Blood"])){
				$err_bld="Blood Group Required";
				$hasError = true;
			}
			else{
				$bld=$_POST["Blood"]; 
				
            } 
			
				
             //Gender Validation
            
            if(empty($_POST["gender"])){
                $err_gender="Gender Required";
                $hasError = true;
            }
                else{
                $gender=$_POST["gender"]; 
                
            }  
			
			   //*********************Category validation***************

             if(empty($_POST["category"]))
            {
				$err_category ="ategory Required";
				$hasError = true;
            }
            else
            {
				$category = $_POST["category"];
            }

		
		 
      //Password Validation
 
        if(empty($_POST["password"]))   
     	{
			$err_cpass="Password Required";
			$hasError = true;
		}

		elseif (strlen($_POST["password"])>=6 && !empty($_POST["password"]))  
	    {
			$cpass=$_POST["password"];
		}
		
		
       
        $fileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
		$file = "storage/product_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["image"]["tmp_name"],$file);

			if(!$hasError){
			$rs = UpdatetTutor($name,$email,$add,$nid,$num,$gender,$bld,$file,$category,$cpass);
			if($rs === true){
				header("Location: All_Tutor.php");
				
			}
			
			$err_db = "DataBase error";
			}

     }*/
	 
	 //****************************************LOGIN**************************************************
	 
	 
	   else if(isset($_POST["login"]))
        {
	   if(empty($_POST["email"]))      //Email validation
     	{
			$err_email="Email Required";
			$hasError = true;
		}

		elseif(strpos($_POST["email"],'@') && strpos($_POST["email"],'.'))
		{
			$email=$_POST["email"];
		}

		elseif(!strpos($_POST["email"],'@') && !strpos($_POST["email"],'.'))
		{
             $err_email="First use @ and then .(dot)";
			 $hasError = true;
		}

		elseif(!strpos($_POST["email"],'@'))
		{
			if(strpos($_POST["email"],'.'))
			{
				$err_email="First use @ and then .(dot)";
		        $hasError = true;
			}

			else
			{
				$err_email="First use @ and then .(dot)";
		        $hasError = true;
			}
		}

		elseif (strpos($_POST["email"],'@') ) 
		{
			if (strpos($_POST["email"],'.')) 
			{
			    $email=$_POST["email"];
			}

			elseif (!strpos($_POST["email"],'.') || strpos($_POST["email"],'@'))
			{
				$err_email="First use @ and then .(dot)";
			    $hasError = true;
			}
			
		}
		
		if(empty($_POST["password"]))   //Password validation
     	{
			$err_pass="Password Required";
			$hasError = true;
		}

		elseif (strlen($_POST["password"])>=6 && !empty($_POST["password"]))  
	    {
			$pass=$_POST["password"];
		}
		elseif (strlen($_POST["password"])< 6 && !empty($_POST["password"]))  
	    {
			$err_pass="Password must contain at least 6 characters";
			$hasError = true;
		}
		
		
		
		
		if(!$hasError){
			
			if($user = authenticateUser($email,$pass)){
				
					header("Location: T_Dashboard.php");
				}
					
			$err_db = "Username password invalid";
		}
		
		
	}
		 
		 
	    
	 
	 
//........................Sign Up End................................



        function insertUser($name,$email,$gender,$add,$cpass){           //Tutor signup
		$query  = "insert into tutor_signup values (NULL,'$name','$email','$gender','$add','$cpass')";
		//echo $query;
		return execute($query);	
		}
		function insertTutor($name,$email,$add,$nid,$num,$gender,$bld,$file,$category,$cpass){
		$query  = "insert into tutor_registration values (NULL,'$name','$email','$add','$nid','$num','$gender','$bld','$file','$category','$cpass')";
		//echo $query;
		return execute($query);	
		}
		
		
		function UpdatetTutor($name,$email,$add,$nid,$num,$gender,$bld,$file,$category,$cpass,$id){
		$query = "update tutor_registration set name='$name',email='$email',address='$add',nid=$nid,number=$num,gender='$gender',blood_group='$bld',img='$file',category='$category',password='$cpass' where id = $id";
		//echo $query;
		return execute($query);	
		}
		
		
		function getTutor($id){                   
		$query = "select * from tutor_registration where id=$id";
		$rs = get($query);
		return $rs[0];                  //To pass only one instance
	    }
		
		function authenticateUser($email,$pass){
		$query ="select * from tutor_registration where email='$email' and password='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return $rs[0];
		}
		return false;
		
	    }
	
	    function getAllTutor(){                   //show in all tutor page
		$query = "select * from tutor_registration";
		$rs = get($query);
		return $rs;
	    }
		
		
?>

