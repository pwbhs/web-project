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
	include_once "Header.php";
	include_once "Menu.php";
	?>
	
	<section id="content">
<?php 
	
	if (isset($_POST['SubmitA'])===true){	
		session_start();
		$_SESSION["EmpolyeeId"] = $_POST['EmpolyeeId'];
		$_SESSION["FirstName"] = $_POST['FirstName'];
		$_SESSION["LastName"] = $_POST['LastName'];
		$_SESSION["EmailAddress"] = $_POST['EmailAddress'];
		$_SESSION["TelephoneNumber"] = $_POST['TelephoneNumber'];
		$_SESSION["SocialInsuranceNumber"] = $_POST['SocialInsuranceNumber'];
		$_SESSION["Password"] = $_POST['Password'];	
	}
	
	$host = "localhost";
	$username = "pwbhshsc_pwbhshsc";
	$password = "74#pdFaYTNc8*3";
	$database = "pwbhshsc_cst8238";
	$dbConnection = mysqli_connect($host, $username, $password);
	
	if(!$dbConnection)
	    die("Could not connect to the database. Remember this will only run on the Playdoh server.");
	    
	    mysqli_select_db($dbConnection, $database);
	    
	    $sqlQuery = "SELECT * FROM Employee";
	    
	    $result = mysqli_query($dbConnection,$sqlQuery);
	    
	    $rowCount = mysqli_num_rows($result);
	    
	    if($rowCount == 0)
	        echo "*** There are no rows to display from the Person table ***";
	        else
	        {
	            for($i=0; $i<$rowCount; ++$i)
	            {
	                $row = mysqli_fetch_row($result);
	                
	                echo "<table><tr><td>";
	                echo "<br />";                
	                echo "</td>"; 
	                echo "<td>";
	                echo "Employee Id: ".$row[0]."<br />";
	                echo "First Name: ".$row[1]."<br />";
	                echo "Last Name: ".$row[2]."<br />";
	                echo "Email Address: ".$row[3]."<br />";
	                echo "Telephone Number: ".$row[4]."<br />";
	                echo "Social Insurance Number: ".$row[5]."<br />";
	                echo "Password: ".$row[6]."<br />";
	                echo "</td></tr></table>";
	                
	                echo "<br />";
	            }
	        }
	        
	        mysqli_close($dbConnection);

?>

</section>

<?php

    include_once "Footer.php";
?>


</html>
