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
	
	<form action="ViewAllEmployees.php" method="post">
	<h3>Login</h3>
		
		Email Address: <input type="text" name="email"><br>
		Password: <input type="text" name="passWord"><br>		
		<input type="submit" name="SubmitB" value="Login">
		$TelephoneNumber = $_POST['TelephoneNumber'];
 
		$Password = $_POST['Password'];
</form>
<?php


$EmailAddress = $_POST['EmailAddress'];
$Password = $_POST['Password'];


$host = "localhost";
$username = "pwbhshsc_pwbhshsc";
$password = "74#pdFaYTNc8*3";
$database = "pwbhshsc_cst8238";
//$dbConnection = mysqli_connect($host, $username, $password);


$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Can not connected: " . $conn->connect_error);
} 

$sql = "select*FROM Employee WHERE EmailAddress = $EmailAddress";
    $result = $conn->query($sql);
    echo $result->num_rows;

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "<br> EmployeeId: ". $row["EmployeeId"]. "- FirstName: ". $row["FirstName"]. "- LastName: " . $row["lastname"] ."-Email: ".$row["EmailAddress"]. "- Telephone Number: " .$row[TelephoneNumber]. "- Social Insurance Number: " .$row[SocialInsuranceNumber]. "- Password: " .$row[Password] ;
    }
} else {
    echo "0 result";
}

$conn->close();
?>
	
	

</section>

<?php

    include_once "Footer.php";
?>


</html>
