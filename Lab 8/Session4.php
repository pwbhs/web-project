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

	<body>
<section id="content">
<?php

// Set session variables

	  	  if (isset($_POST['SubmitA'])===true){
   
    session_start();

    $_SESSION["name"] = $_POST["name"];
    $_SESSION["ID"] = $_POST["ID"];
    $_SESSION["Tel"] = $_POST["Tel"];
    $_SESSION["Email"] = $_POST["Email"];
    $_SESSION["position"] = $_POST["position"];
    $_SESSION["Project"] = $_POST["Project"];
    
    echo "Employee Name:" . $_SESSION["name"]."<br>";
    echo "Employee ID: " . $_SESSION["ID"] . "<br>";
    echo "Telephone Number: " . $_SESSION["Tel"] ."<br>";
    echo "Email Address:" . $_SESSION["Email"] . "<br>";
    echo "position: " . $_SESSION["position"] . "<br>";
    echo "Project: " . $_SESSION["Project"] . "<br>";
    exit;
}

?>
</section>
</body>

<?php

    include_once "Footer.php";
?>


</html>