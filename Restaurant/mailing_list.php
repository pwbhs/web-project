<?php include("header.php"); ?>
<div id="content" class="clearfix">
	<div class="main">
		<h1>Customer Information</h1>
		<table cellpadding="3">
			<thread>
				<tr>
					<th>Full Name</th>
					<th>Email Address</th>
					<th>Phone</th>
				</tr>
			</thread>
			<tbody>
<?php

include("db_config.php"); 
$sql = "select firstName,lastName,emailAddress,phoneNumber from mailingList";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    	echo "<tr>";
        echo "<td>" . $row["firstName"]. " ".$row["lastName"]."</td>";
        echo "<td>" . $row["emailAddress"]."</td>";
        echo "<td>" . $row["phoneNumber"]."</td>";
        echo "</tr>";
    }
}
mysqli_close($conn);
?>
</tbody></table>
</div>
</div>
<?php include("footer.php"); ?>
