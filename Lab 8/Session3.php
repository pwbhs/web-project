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
	


	
	// define variables and set to empty values
	
    <form action="Session3.php" method="post">
    Employee Name: <input type="text" name="name"><br>
Employee ID: <input type="text" name="ID"><br>
Telephone Number: <input type="text" name="Tel"><br>
Email Address: <input type="text" name="Email"><br>

<p>Please select your position:</p>
<input type="radio" id="Manager" name="position" value="Manager">
<label for="Manager">Manager</label><br>
<input type="radio" id="female" name="position" value="Team Lead">
<label for="Team Lead">Team Lead</label><br>
<input type="radio" id="IT Developer" name="position" value="IT Developer">
<label for="IT Developer">IT Developer</label><br>
<input type="radio" id="IT Analyst" name="position" value="IT Analyst">
<label for="IT Analyst">IT Analyst</label>

<br> <label for="cars">Choose a Project:</label>
<select name="Project" id="cars" >
<option value="Project A">Project A</option>
<option value="Project B">Project B</option>
<option value="Project C">Project C</option>
<option value="Project D">Project D</option>
</select>
<br><br>
<input type="submit" name="SubmitA" value="Submit Information">


</form>
</section>

<?php

    include_once "Footer.php";
?>


</html>
