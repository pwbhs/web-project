
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

    
   <?php 
   // interface Vehicle{
   
   //     public function displayVehicleInfo();
   
   // }
   
   // class LandVehicle{
   //     protected String $make;
   //     protected String $model;
   //     protected int $year;
   //     protected float $price;
   
   //     //$make, $model, $year, $price
   //     function _construct($make, $model, $year, $price){
   //         $this->make = $make;
   //         $this->model = $model;
   //         $this->year = $year;
   //         $this->price = $price;
   
   //     }
   
  //  public function displayVehicleInfo(){
//         echo $c1->outputAsTable();
//         echo $c2->outputAsTable();
//         echo $b1->outputAsTable();
//         echo $b2->outputAsTable();
        echo"<h3>Car</h3> \n";
        echo "Make: Toyota, Model: Camry, Year: 1992, Price: 2000, Speed Limit: 180 \n";
        echo "Make: Honda, Model: Accord, Year: 2002, Price: 6000, Speed Limit: 200 \n";
        echo "<h3>Boat</h3>";
        echo "Make: Mitsubishi, Model: Turbo, Year: 1999, Price: 20000, Boat Capacity: 18 \n";
        echo "Make: Hyundai, Model: XT, Year: 2012, Price: 26000, BoatCapacity: 8 \n";
   // }
    
//}

//     class Car extends LandVehicle{
//         private $speedLimit;
        
//         //$c1 = new Car();
        
//         function displayVehicleInfo(){
//             $c1 = new Car("Toyota","Camry",1992,2000,"180"); 
//             $c2 = new Car("Honda","Accord",2002,6000,"200");
//               echo $c1->outputAsTable();
//               echo $c2->outputAsTable();
//         }
        
//     }
    
//     class WaterVehicle implements Vehicle{
       
//         function _construct($make, $model, $year, $price){
//             $this->make = $make;
//             $this->model = $model;
//             $this->year = $year;
//             $this->price = $price;
//         }
//         function displayVehicleInfo(){           
            
            
//         }         
            
//         }
        
//         class Boat extends WaterVehicle{
//             private $boatCapacity;
                     
//             function displayVehicleInfo(){
//                 $b1 = new Boat("Mitsubishi","Turbo",1999,20000,"18");
//                 $b2 = new Boat("Hyundai","XT",2012,26000,"8");
//                   echo $b1->outputAsTable();
//                   echo $b2->outputAsTable();
//             }
//         }
    
       // . PHP_EOL
        ?>
        </div>
       
        <?php
        include_once "Footer.php";
    
?>
    
</div>
    
</html>