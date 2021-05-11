<?php include("header.php"); ?>

<?php
if ($_SERVER['REQUEST_METHOD']=='GET'){?>
            <div id="content" class="clearfix">
                <div class="main">
                    <h1>Login</h1>
                    <p>You have not logged in yet, please log in first!</p>
                    <form name="frmLogin" id="frmLogin" method="post">
                        <table>
                            <tr>
                                <td>Username:</td>
                                <td><input type="text" name="username" id="username" size='40'></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="password" id="password" size='40'></td>
                            </tr>
 
                            <tr>
                                <td colspan='2'><input type='submit' name='btnSubmit' id='btnSubmit' value='Login'>&nbsp;&nbsp;</td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
<?php
}elseif ($_SERVER['REQUEST_METHOD']=='POST'){

?><div id="content" class="clearfix">
    <div class="main"><?php

    $un = $_REQUEST["username"];
    $pw = $_REQUEST["password"];

    $fieldIsOK = TRUE;

    $messageTitle ="";
    $messageContent = "";

    if (strlen($un) < 1){
        $fieldIsOK = FALSE;
        $messageContent = $messageContent . "Username cannot be empty.<br>";
    }
    if (strlen($pw) < 1){
        $fieldIsOK = FALSE;
         $messageContent = $messageContent . "Password cannot be empty.<br>";
    }

    if ($fieldIsOK === TRUE){
        include("db_config.php"); 

        $loginQuery = "SELECT AdminID,AdminLevel,Lastlogin FROM adminusers WHERE Username= ? AND Password= ?";
        $stmt = $conn->prepare($loginQuery);
        $stmt->bind_param('ss',$un,$pw);
        $stmt->execute();
        $result = $stmt->get_result();

        $loginResult = FALSE;
        if($result->num_rows == 1){
        	$loginResult = TRUE;
    		$row  =  $result -> fetch_array ( MYSQLI_NUM );

    		$_SESSION['websiteUser']=array("AdminID"=>$row[0],
    								   "AdminLevel" => $row[1],
    									"Lastlogin" => $row[2],
    									"Username"=>$un,
    									"Authenticated"=>TRUE);

    		$conn->query("update adminusers set Lastlogin=NOW() where Username='{$un}'");
        
        }
        $stmt->free_result();
        mysqli_close($conn);


        if ($loginResult ==TRUE){
			$messageTitle = "Login Access";
        	$messageContent = $messageContent . '<a href="internal.php" onClick="javascript :history.back(-1);">visit internal.php</a>';

        }else{
        	$messageTitle = "Login Failed:";
        	$messageContent = $messageContent . "wrong username or password！";
        	$messageContent = $messageContent . '<a href="#" onClick="javascript :history.back(-1);">go back</a>';

        }
    }else{
         $messageTitle = "Login Failed:";
         $messageContent = $messageContent . '<a href="#" onClick="javascript :history.back(-1);">go back</a>';
    }

    echo "<h1>".$messageTitle."</h1>";
    echo "<p>".$messageContent."</p>";

    echo "</div></div>";
}?>

<?php include("footer.php"); ?>
