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

/* #header
{

	background-color: grey;
	width: 100%;	
	height: 150px;
	margin: 0px auto;
	padding: 25px;
 	border: 1px solid black;
} */

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
	<form method="post" action="Prime.php">

				<label>Range 1: </label>
				<input type="text" name="Range1" />

				<label>Range 2: </label>
				<input type="text" name="Range2" />
				
				<input type="submit" value="Generate">
				
	<?php
	
	    $r1 = $_POST['Range1'];
        $r2 = $_POST['Range2'];
        echo "<div>";
        for($i=$r1; $i<$r2; $i++){
            if($i==2 || $i==3 || $i==5 || $i==7){
                echo "<br>$i is a prime number";
            }else if(($i%2)!=0 && ($i%3)!=0 && ($i%5)!=0 && ($i%7)!=0){              
                echo "<br>$i is a prime number";
            }else
                echo " ";                          
            }
        
        /* echo " <br>$i is a prime number</br> "; */
        
        echo "</div>";
		
		
					?>	
	</form>
	</div>

</html>


<?php

    include_once "Footer.php";
?>
