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

if ($_SERVER["REQUEST_METHOD"] == "POST") {

session_start();

$employeeName=test_input($_POST["employeeName"]);

$employeeID = test_input($_POST["employeeID"]);

$email = test_input($_POST["email"]);

$phone = test_input($_POST["phone"]);

$post = test_input($_POST["post"]);

$project=test_input($_POST['project']);

$_SESSION['employeeName']=$employeeName;

$_SESSION['employeeID']=$employeeID;

$_SESSION['email']=$email;

$_SESSION['phone']=$phone;

$_SESSION['post']=$post;

$_SESSION['project']=$project;

?>
<script type="text/javascript">
   window.location="Session2.php";
</script>
<?php

exit();
}

function test_input($data) {

$data = trim($data);

$data = stripslashes($data);

$data = htmlspecialchars($data);

return $data;

}
?>



<form method="post">

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



</section>

<?php

    include_once "Footer.php";
?>


</html>
