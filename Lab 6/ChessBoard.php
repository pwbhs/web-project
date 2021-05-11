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

<head>
    <meta charset="UTF-8">
    <title></title>

</head>
<body>
 <?php
     include_once "Header.php";
     include_once "Menu.php"; 
 ?>
 	<div id="Content">
<table width="270px" cellspacing="0px" cellpadding="0px" border="1px" -->
    <!-- cell 270px wide (8 columns x 60px) -->
    
    <?php
    
 /*    echo "<div id=\"Content\">"; */

    
    for($row=1;$row<=8;$row++)
    {
        echo "<tr>";
        for($col=1;$col<=8;$col++)
        {
            $total=$row+$col;
            if($total%2==0)
            {
                echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
            }
            else
            {
                echo "<td height=30px width=30px bgcolor=#000000></td>";
            }
        }
        echo "</tr>";
    }
    echo "</div>";

    ?>
    
    
</table>
</div>
</body>

<?php 
    include_once "Footer.php";
    ?>
</html>