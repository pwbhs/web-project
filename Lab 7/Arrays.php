
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
	height: 1500px;
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

<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
 <?php
     include_once "Header.php";
     include_once "Menu.php"; 
 ?>
    
    <?php  
     echo "<div id=\"Content\">"; 
  
    $noKeyArray = array(0 => 10,1 =>20,2 => 30,3 => 40);
    
    echo "<h3>No Key Array - Output using var_dump</h3>";
    var_dump($noKeyArray); 
    
    echo"<h3>No Key Array - Output using foreach</h3>";
    foreach($noKeyArray as $key => $value){
        echo "key: $key \n";
        echo "value: $value \n";
        echo "data type: int";
        echo "<br></br>";
         
    }
    
    $stringKeyArray = array("Audi" => 1, "BMW" => 2, "Benz" => 3);
    
    echo "<h3>String Key Array - Output using var_dump</h3>";
    var_dump($stringKeyArray);
    
    echo"<h3>String Key Array - Output using foreach</h3>";   
    foreach($stringKeyArray as $key => $value){       
        echo "key: $key \n";       
        echo "value: $value \n";
        echo "data type: string";
        echo "<br></br>";
    }
          
    $intKeyArray = array(1 => "SUV", 2 => "Sports car", 3 => "Muscle car");
    
    echo "<h3>Integer Key Array - Output using var_dump</h3>";
    var_dump($intKeyArray);
    
    echo"<h3>Integer Key Array - Output using foreach</h3>";
    foreach($intKeyArray as $key => $value){
        echo "key: $key \n";
        echo "value: $value \n";
        echo "data type: string";
        echo "<br></br>";
    }
    
    $mixedKeyArray = array(3, "Toyota", 7, "Honda", 11, "Cadillac");
    
    echo "<h3>Mixed Key Array - Output using var_dump</h3>";
    var_dump($mixedKeyArray);
    
    echo"<h3>Mixed Key Array - Output using foreach</h3>";
    foreach($mixedKeyArray as $key => $value){
        echo "key: $key \n";
        echo "value: $value \n";
        echo "data type: string";
        echo "<br></br>";
    }
    
    $multiDimensionArray = array();
    $multiDimensionArray [] = array("Lexus" => 4, "Acura "=> 5, "Infiniti" => 6);
    $multiDimensionArray [] = array("Lamborghini" => 1, "Ferrari" => 2, "Porsche" => 3);
  
    echo "<h3>Multi-dimension Array - Output using var_dump</h3>"; 
    var_dump($multiDimensionArray);
    
    echo"<h3>Multi-dimension Array - Output using foreach</h3>";
    foreach($multiDimensionArray as $key => $value){
        echo "key: $key \n";
        echo "value: $value \n";
        echo "data type: string";
        echo "<br></br>";
    }
    echo "</div>";
    include_once "Footer.php";
    
    ?>
    
</body>


</html>