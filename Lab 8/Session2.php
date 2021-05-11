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
	height: 500px;
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




$employeeName = $email = $post = $employeeID = $phone = $project = "";

session_start();

$employeeName=$_SESSION['employeeName'];

$employeeID = $_SESSION['employeeID'];

$email = $_SESSION['email'];

$phone = $_SESSION['phone'];

$post = $_SESSION['post'];

$project=$_SESSION['project'];

echo "<h2>Submitted Information</h2>";

echo "<label>Employee Name : </label>";

echo $employeeName;

echo "<br>";

echo "<label>Employee ID : </label>";

echo $employeeID;

echo "<br>";

echo "<label>Telephone Number : </label>";

echo $phone;

echo "<br>";

echo "<label>Email Address: </label>";

echo $email;

echo "<br>";

echo "<label>Post : </label>";

echo $post;

echo "<br>";

echo "<label>Project : </label>";

echo $project;


?>

</section>
<?php

    include_once "Footer.php";
?>


</html>