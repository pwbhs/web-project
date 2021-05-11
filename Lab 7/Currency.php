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

	<div id="content">
	<form method="post" action="Currency.php">

				<label>Convert </label>
				<input type="text" name="srcamt" />

				<label></label>
				<select name="basecurr" >
				<option>Canadian Dollar</option>
				<option>New Zealand Dollar</option>
				<option>Us Dollar</option>
				</select>
				
				<label>to</label>
				<select name="destcurr" >
				<option>Canadian Dollar</option>
				<option>New Zealand Dollar</option>
				<option>Us Dollar</option>
				</select>
				
				<input type="submit" value="Generate">

<?php


    $amount_input = $_POST['srcamt'];
    $basecurr1 = $_POST['basecurr'];
    $destcurr1 = $_POST['destcurr'];
    
    $currencies = array( "CAD" => "Canadian Dollar", "NZD" => "New Zealand Dollar", "USD" => "US Dollar");
    
    $rates = array( "CAD" => 0.97645, "NZD" => 1.20642, "USD" => 1.0 );
    
    $basecurr = array_search($basecurr1, $currencies);
    $destcurr = array_search( $destcurr1, $currencies);
           
    $converted_output = ($amount_input/$rates[$basecurr]) * $rates[$destcurr];

    while($amount_input != 0){
        echo "<br></br>";
        echo "<h3>Conversion Results \n\n</h3>";
        echo "$amount_input $basecurr1 coverts to $converted_output $destcurr1";
        break;
    }
    
   
    
    //= ($amount_input/$rates[CAD]) * $rates[NZD] = (100/0.97645) * 1.20642 = 123.55;
    
    
?>

</form>

</div>

<?php

    include_once "Footer.php";
?>


</html>