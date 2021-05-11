<html>
	<head>
		<title>Lab 5</title>

	</head>

		<style>

body 
{
	margin: 0px 0px; 
	padding: 0px;
	text-align:center;
} 

#header
{
	background-color: grey;
	width: 100%;	
	height: 150px;
	margin: 0px auto;
	padding: 25px;
 	border: 1px solid black;
}

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
<body>

	  
	  	  

		<?php
		    $firstName = "Wenbo";
		    $lastName = "Peng";
		    define("StudentNumber", "040939963");
		    $h = "Hello World!!!";
		    $t = "This is the first time I am using PHP!!";
		    include_once "Header.php";
		    include_once "Menu.php"; 
		
		    echo "<div id=\"Content\">";
			/* include_once "Index.php"; */
			
			echo "Name: $firstName $lastName";
			echo " Student Number: ";
			echo StudentNumber;
			echo " $h  $t";
			echo "</div>";
			
			
			include_once "Footer.php";
		?>

	</body>
</html>
