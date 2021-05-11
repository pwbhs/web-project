
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

<head>
    <meta charset="UTF-8">
    <title></title>

</head>
<body>

    <?php
    
    include_once "Header.php";
    include_once "Menu.php"; 
    
    echo "<div id=\"Content\">";    
    
     $n = 5;
    
    for($i=1; $i<=$n; $i++){
        for($a=1; $a<=$n; $a++){
            if($a==1 || $a==5 || $i==1 || $i==5){
                echo '*';
            }else
                echo ' &nbsp';               
        }
        
        echo '<br>';
    }
    

    echo "</div>";
    
    include_once "Footer.php";
    
    ?>

</body>
</html>

