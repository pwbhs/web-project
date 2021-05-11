<!DOCTYPE HTML>
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


/* Clear floats after the columns */

/* .row:after { */

/* content: ""; */

/* display: table; */

/* clear: both; */

/* } */

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

 #content .column {  

    text-align:center;  
    float: left;  
    width: 50%;  

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



<!-- 	<form method="post" action="input.php"> -->

<!-- 				<label>Enter your Name: </label> -->
<!-- 				<input type="text" name="Employee Name" /> -->

<!-- 				<label>Enter your ID: </label> -->
<!-- 				<input type="text" name="Employee ID" /> -->
				
<!-- 				<label>Enter your Telephone Number: </label> -->
<!-- 				<input type="text" name="Telephone Number" /> -->
				
<!-- 				<label>Enter your Email: </label> -->
<!-- 				<input type="text" name="Email Address" /> -->
				
<!-- 				<label>Chose your position</label> -->
<!-- 				<select name="position" > -->
<!-- 				<option>Manager</option> -->
<!-- 				<option>Team Lead</option> -->
<!-- 				<option>IT Developer</option> -->
<!-- 				<option>IT Analyst</option> -->
<!-- 				</select> -->
				
<!-- 				<label>Chose the project</label> -->
<!-- 				<select name="position" > -->
<!-- 				<option>Project A</option> -->
<!-- 				<option>Project B</option> -->
<!-- 				<option>Project C</option> -->
<!-- 				<option>Project D</option> -->
<!-- 				</select> -->
				
<!-- 				<input type="submit" value="Generate"> -->





<body>
	<section id="content">
<?php
       // echo "<div id=\"content\ ">";
// define variables and set to empty values

    $employeeName = $email = $post = $employeeID = $phone = $project = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $employeeName=test_input($_POST["employeeName"]);

            $employeeID = test_input($_POST["employeeID"]);

            $email = test_input($_POST["email"]);

            $phone = test_input($_POST["phone"]);

            $post = test_input($_POST["post"]);

            $project=test_input($_POST['project']);

    }

    function test_input($data) {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

}

?>

   

	<div class="column">



		<form method="post" action="<?php
		echo htmlspecialchars($_SERVER["PHP_SELF"]);
		?>">

		Employee Name: <input type="text" name="employeeName" value="<?php echo $employeeName;?>">

		<br><br>

		Employee ID: <input type="text" name="employeeID" value="<?php echo $employeeID;?>">

		<br><br>

		Telephone Number: <input type="text" name="phone" value="<?php echo $phone;?>">
	
		<br><br>

		E-mail: <input type="text" name="email" value="<?php echo $email;?>">

		<br><br>

	Post:

	<input type="radio" name="post" <?php if (isset($post) && $post=="Manager") echo "checked";?> value="manager">Manager

	<input type="radio" name="post" <?php if (isset($post) && $post=="TeamLead") echo "checked";?> value="Team Lead">Team Lead

	<input type="radio" name="post" <?php if (isset($post) && $post=="itDeveloper") echo "checked";?> value="IT Developer">IT Developer

	<input type="radio" name="post" <?php if (isset($post) && $post=="itAnalyst") echo "checked";?> value="IT Analyst">IT Analyst

	<br><br>

		<label for="project">Choose a project: </label>

		<select name="project" id="project">

		<option value="Poject A">Project A</option>

		<option value="Project B">Project B</option>

		<option value="Project C">Project C</option>

		<option value="Project D">Project D</option>

	</select>

	<br><br>

		<input type="submit" name="submit" value="Submit Information">

	</form>

</div>

 	<div class="column">

<?php

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

 </div> 
</section>

</body>


				
<?php



    include_once "Footer.php";


?>

</html>