<html>
<style>

body 
{
	margin: 0px 0px; 
	padding: 0px;
	text-align:center;
} 
.banner {
    width: 100%;
    height: 150px;
    margin: 0px auto;
	padding: 25px;
 	border: 1px solid black;
}
.banner  .banner-image{
    width: 100%;
    height: 150px;
}

/* #header{ 
	background-color: grey;
	width: 100%;	
	height: 150px;
	margin: 0px auto;
	padding: 25px;
 	border: 1px solid black;
}  */

#menu{
    position: static;
    top: -80px;
    border-style: solid;
    border-color: black;
	word-spacing: 1em;
    line-height: 75px;
    font-size: 18pt;
    text-align: center;
    background-color: white;
    width: 900px;
    position: relative;
    float: right;
    bottom: 0px;  
}

#content
{   
    
    background-color: orange;
	width: 100%;

	min-height: 500px;
	margin: 0px auto;
	padding: 25px;
 	border-left: 1px solid black;
 	border-right: 1px solid black;
	text-align: left;
}

#footer
{
	background-color: grey;
	width: 100%;
	height: 150px;
	margin: 0px auto;
	padding: 25px;
 	border: 1px solid black;
}

</style>
<?php

//  	$host = "localhost";
//  	$username = "pwbhshsc_pwbhshsc";
//  	$password = "74#pdFaYTNc8*3";
//  	$database = "pwbhshsc_cst8238";

//  	$error = "";
 		
//  	if(!isset($_POST["EmployeeId"]) || !isset($_POST["FirstName"]) || !isset($_POST["LastName"]) || !isset($_POST["EmailAddress"]) || !isset($_POST["TelephoneNumber"]) || !isset($_POST["SocialInsuranceNumber"]) || !isset($_POST["Password"]))
//  	{
//  	    $error = "Please enter all information.";
//  	}
//  	else
//  	{	    
//  	    if($_POST["EmployeeId"] != "" && $_POST["FirstName"] != "" && $_POST["LastName"] != "" && $_POST["EmailAddress"] != "" && $_POST["TelephoneNumber"] != "" && $_POST["SocialInsuranceNumber"] != "" && $_POST["Password"] != "")
//  	    {
//  	        $dbConnection = mysqli_connect($host, $username, $password);
 	        
//  	        // Check connection
//  	        if ($dbConnection->connect_error) {
//  	            die("Connection failed: " . $dbConnection->connect_error);
//  	        }
//  	        echo "Connected successfully" . "<br>";
 	        
//  	        mysqli_select_db($dbConnection, $database);
 	        
//  	        $sqlQuery = "INSERT INTO Employee (EmployeeId, FirstName, LastName, EmailAddress, TelephoneNumber, SocialInsuranceNumber, Password) VALUES('".$_POST["EmployeeId"]."', '".$_POST["FirstName"]."', '".$_POST["LastName"]."', '".$_POST["EmailAddress"]."', '".$_POST["TelephoneNumber"]."', '".$_POST["SocialInsuranceNumber"]."', '".$_POST["Password"]."')";
 	        
//  	        if (mysqli_query($dbConnection, $sqlQuery)) {
//  	            echo "Employee Successfully Added". "<br>";
//  	        } else {
//  	            echo "Employee Could not be added: " . $sql . "<br>" . mysqli_error($dbConnection);
//  	        }
 	        
//  	        mysqli_close($dbConnection);
//  	    }
//  	    else
//  	        $error = "Please enter all information.";
//  	}

?>

<?php
	include_once "Header.php";
	include_once "Menu.php";
	?>
	
	<section id="content">
	
	<form action="CreateAccount.php" method="post">

	<h3>Create your new account</h3>
		<p>Please fill in all information.</p>
		Empolyee Id: <input type="text" name="EmpolyeeId"><br>
   		First Name: <input type="text" name="FirstName"><br>
		Last Name: <input type="text" name="LastName"><br>
		Email Address: <input type="text" name="EmailAddress"><br>
		Phone Number: <input type="text" name="TelephoneNumber"><br>
		SIN: <input type="text" name="SocialInsuranceNumber"><br>
		Password: <input type="text" name="Password"><br>
		
		<input type="submit" name="SubmitA" value="Submit Information">

</form>
 <?php 
    $host = "localhost";
    $username = "pwbhshsc_pwbhshsc";
    $password = "74#pdFaYTNc8*3";
    $database = "pwbhshsc_cst8238";
	$dbConnection = mysqli_connect($host, $username, $password);
	
	if(!$dbConnection){
	    die("Unable to connect to database $host");	
	}else{
	    echo "Connected successfully" . "<br>";
	}
	    
		
	    $EmpolyeeId = $_POST['EmpolyeeId'];
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$EmailAddress = $_POST['EmailAddress'];
		$TelephoneNumber = $_POST['TelephoneNumber'];
		$SocialInsuranceNumber = $_POST['SocialInsuranceNumber'];
		$Password = $_POST['Password'];
		if(!($EmpolyeeId == "" || $FirstName == "" || $LastName == "" || $EmailAddress == "" || $TelephoneNumber == "" || $SocialInsuranceNumber == "" ||$Password == "")) 
 		{
 		    
 		    mysqli_select_db($dbConnection, $database);
 		    
 		    $sqlQuery = "INSERT INTO Employee (EmployeeId, FirstName, LastName, EmailAddress, TelephoneNumber, SocialInsuranceNumber, Password) 
            VALUES('".$_POST["EmployeeId"]."', '".$_POST["FirstName"]."', '".$_POST["LastName"]."', '".$_POST["EmailAddress"]."', '".$_POST["TelephoneNumber"]."', '".$_POST["SocialInsuranceNumber"]."', '".$_POST["Password"]."')";
        
            if(mysqli_query($dbConnection, $sqlQuery)){
                echo "Employee successfully Added". "<br>";  
                ?>
                <script type="text/javascript">
   window.location="ViewAllEmployees.php";
</script>
                
               <?php  
            }else{
                echo "Employee Could not be added: " . $sql . "<br>" . mysqli_error($dbConnection);
            }
            mysqli_close($dbConnection);
 		}else{
 		     echo "information can not be null";
 		}
            
        
 ?>
 



}

</section>

<?php

    include_once "Footer.php";
?>


</html>