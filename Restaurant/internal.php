<?php include 'header.php';?>

<?php

if(isset($_SESSION['websiteUser']) && $_SESSION['websiteUser']['Authenticated'] ===TRUE){
  
	echo "<p>AdminID: ". $_SESSION['websiteUser']['AdminID']."</p>";
	echo "<p>AdminLevel: ". $_SESSION['websiteUser']['AdminLevel']."</p>";
	echo "<p>Lastlogin: ". $_SESSION['websiteUser']['Lastlogin']."</p>";
	echo "<a href='logout.php'>Logout</a>";
?>
            <div id="content" class="clearfix">
                <p>&nbsp;</p>
               
            </div><!-- End Content -->
<?php
}else{
	$_SESSION['websiteUser']['Authenticated'] = FALSE;
	?>
        <script type="text/javascript">
	window.location="login.php";
	</script>
	
   <?php
   //header("Location:login.php");
}?>

<?php include 'footer.php';?>
