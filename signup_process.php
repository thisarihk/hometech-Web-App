<?php
session_start();
include("db.php");
mysqli_report(MYSQLI_REPORT_OFF);
$pagename="sign up results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
if (!empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["address"]) 
        && !empty($_POST["postcode"]) && !empty($_POST["telno"]) && !empty($_POST["email"]) 
        && !empty($_POST["password"]) && !empty($_POST["Cpassword"])) {
    
    $first_name = $_POST["fname"];
    $last_name = $_POST["lname"];
    $address = $_POST["address"];
    $postcode = $_POST["postcode"];
    $teleno = $_POST["telno"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmed_password = $_POST["Cpassword"]; 
    
    if($password <> $confirmed_password){
        echo "<p><b>Your sign-up failed!</b></p>";
        echo "<br><br><p>The two passwords are not matching.</p>";
        echo "<br><br><p>Go back to: <a href=signup.php>sign up</a></p>";
        echo "<br><br><br><br>";
    } else {
        //$email_pattern = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
        $reg = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
        if(preg_match($reg, $email)){
            $SQL = "INSERT INTO users (userType, userFName, userSName, userAddress, userPostCode, userTelNo, userEmail, userPassword) "
            . "VALUES ('C', '".$first_name."', '".$last_name."', '".$address."', '".$postcode."', '".$teleno."', '".$email."', '".$password."')";
            
            // Execute the SQL query
            if (mysqli_query($conn, $SQL)){
                echo "<p>Sign-Up Complete</p>";
                echo "<br><br><p>Go to Log In Page: <a href=login.php>Log In</a></p>";
            }else{
                echo "<p><b>Your sign-up failed!</b></p>";
                //if the error detector returned the number 1062,
                //the unique constraint is violated as the user entered an email which already existed
                if (mysqli_errno($conn)==1062){
                echo "<br><br><p>An account with your e-mail address is already registered.</p>";
                }
                //error code for inserting character that is problematic for SQL query
                if (mysqli_errno($conn)==1064){
                echo "<br><br><p>Invalid characters used.</p>";
                }
                echo "<br><br><p>Go back to: <a href=signup.php>sign up</a></p>";
                echo "<br><br><br><br>";
            }
        }else{
            echo "<p><b>Your sign-up failed!</b></p>";
            echo "<br><br><p>Please insert your e-mail correctly.</p>";
            echo "<br><br><p>Go back to: <a href=signup.php>sign up</a></p>";
            echo "<br><br><br><br>";
        }
        
    }
}else{
    echo "<p><b>Your sign-up failed!</b></p>";
    echo "<br><br><p>All the mandatory fields need to be filled in.</p>";
    echo "<br><br><p>Go back to: <a href=signup.php>sign up</a></p>";
    echo "<br><br><br><br>";
}


include("footfile.html"); //include head layout
echo "</body>";
/*
 * $pass_pattern = "/^(?=.*[A-Z])(?=.*\d)(?=.*[^\w\s]).{8,}$/"; 
    $password = "YOUR_PASSWORD";
    if(preg_match($pass_pattern,$password)){
        echo 'Password is Okay!';
    }else{
        echo 'Password is NOT OK';
    }
 */
?>
