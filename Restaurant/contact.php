<?php include("header.php"); 
?>

<?php
if ($_SERVER['REQUEST_METHOD']=='GET'){?>
            <div id="content" class="clearfix">
                <aside>
                        <h2>Mailing Address</h2>
                        <h3>1385 Woodroffe Ave<br>
                            Ottawa, ON K4C1A4</h3>
                        <h2>Phone Number</h2>
                        <h3 style="color:blue;">(613)727-4723</h3>
                        <h2>Fax Number</h2>
                        <h3 style="color:blue;">(613)555-1212</h3>
                        <h2>Email Address</h2>
                        <h3>info@wpeatery.com</h3>
                </aside>
                <div class="main">
                    <h1>Sign up for our newsletter</h1>
                    <p>Please fill out the following form to be kept up to date with news, specials, and promotions from the WP eatery!</p>
                    <form name="frmNewsletter" id="frmNewsletter" method="post">
                        <table>
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" name="customerfName" id="customerfName" size='40'></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="customerlName" id="customerlName" size='40'></td>
                            </tr>
                            <tr>
                                <td>Phone Number:</td>
                                <td><input type="text" name="phoneNumber" id="phoneNumber" size='40'></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="emailAddress" id="emailAddress" size='40'>
                            </tr>
                             <tr>
                                <td>Username:</td>
                                <td><input type="text" name="username" id="username" size='20'>
                            </tr>
                            <tr>
                                <td>How did you hear<br> about us?</td>
                                <td>
                                   <select name="referral" size="1">
                                      <option>Select referer</option>
                                      <option value="newspaper">Newspaper</option>
                                      <option value="radio">Radio</option>
                                      <option value="tv">Television</option>
                                      <option value="other">Other</option>
                                   </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan='2'><input type='submit' name='btnSubmit' id='btnSubmit' value='Sign up!'>&nbsp;&nbsp;<input type='reset' name="btnReset" id="btnReset" value="Reset Form"></td>
                            </tr>
                        </table>
                    </form>
                </div><!-- End Main -->
            </div><!-- End Content -->
<?php
}elseif ($_SERVER['REQUEST_METHOD']=='POST'){

?><div id="content" class="clearfix">
    <div class="main"><?php
    ini_set("display_errors",On);
    ini_set("error_reporting", E_ALL);
    
    $customerfName = $_REQUEST["customerfName"];
    $customerlName = $_REQUEST["customerlName"];
    $phoneNumber = $_REQUEST["phoneNumber"];
    $emailAddress =  $_REQUEST["emailAddress"];
    $username =  $_REQUEST["username"];
    $referral = $_REQUEST["referral"];

    $fieldIsOK = TRUE;

    $messageTitle ="";
    $messageContent = "";
    if (strlen($customerfName) < 1){
        $fieldIsOK = FALSE;
        $messageContent = $messageContent . "First Name cannot be empty.<br>";
    }
    if (strlen($customerlName) < 1){
        $fieldIsOK = FALSE;
         $messageContent = $messageContent . "Last Name cannot be empty.<br>";
    }
    if (strlen($phoneNumber) < 1){
        $fieldIsOK = FALSE;
         $messageContent = $messageContent . "Phone Number cannot be empty.<br>";
    }
    if (strlen($emailAddress) < 1){
        $fieldIsOK = FALSE;
        $messageContent = $messageContent . "Email Address cannot be empty.<br>";
    }
    if (strlen($username) < 1){
        $fieldIsOK = FALSE;
         $messageContent = $messageContent . "Username cannot be empty.<br>";
    }
    if (strlen($referral) < 1 || $referral=="Select referer"){
        $fieldIsOK = FALSE;
         $messageContent = $messageContent . "How did you hear about us?<br>";
    }

    if ($fieldIsOK === TRUE){
        include("db_config.php"); 
        $query = $conn->query("select emailAddress from mailingList where emailAddress='{$emailAddress}'");
        $row = mysqli_fetch_assoc($query);
        if ($row>0){
            $messageTitle = "Registration Failed:";
            $messageContent = $messageContent . "Email address has already been used.<br>";
            $messageContent = $messageContent . '<a href="#" onClick="javascript :history.back(-1);">go back</a>';
        }else{
            $sql = "INSERT INTO mailingList (firstName,lastName,phoneNumber,emailAddress,username,referrer)
                VALUES ('$customerfName','$customerlName','$phoneNumber','$emailAddress','$username','$referral')";
            if ($conn->query($sql)===TRUE){
                 $messageTitle=  "Registration Success";
            }else{
                 $messageTitle = "Registration Failed:";
                  $messageContent = $messageContent . $conn->error;
            }
        }
        mysqli_close($conn);
    }else{
         $messageTitle = "Registration Failed:";
         $messageContent = $messageContent . '<a href="#" onClick="javascript :history.back(-1);">go back</a>';
    }

    echo "<h1>".$messageTitle."</h1>";
    echo "<p>".$messageContent."</p>";

    echo "</div></div>";
}?>
<?php include("footer.php"); ?>
