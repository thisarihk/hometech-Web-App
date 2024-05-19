<?php
session_start();
include("db.php");
mysqli_report(MYSQLI_REPORT_OFF);
$pagename="your login results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
if (!empty($_POST["email"]) && !empty($_POST["password"])) {
    
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    
    /*echo "email: ".$email."<br><br>";
    echo "password: ".$password;*/
    
    $SQL="SELECT * FROM users WHERE userEmail = '".$email."' ";
    $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));
    $nbrecs= mysqli_num_rows($exeSQL); 
    if($nbrecs==0){
        echo "<p><b>Login failed!</b></p>";
        echo "<br><br><p>Email not recognised.</p>";
        echo "<br><br><p>Go back to: <a href=login.php>login</a></p>";
    }else{ 
        $arrayu=mysqli_fetch_array($exeSQL);
        
        if($arrayu['userPassword']<> $password ){
            echo "<p><b>Login failed!</b></p>";
            echo "<br><p>Password not valid.</p>";
            echo "<br><br><p>Go back to: <a href=login.php>login</a></p>";
            echo "<br><br><br><br>";
        }else{
            echo "<p><b>Login success!</b></p>";
            $_SESSION['userid'] = $arrayu['userId'];
            $_SESSION['fname'] = $arrayu['userFName'];
            $_SESSION['sname'] = $arrayu['userSName'];
            $_SESSION['usertype'] = $arrayu['userType']; 
            echo "<p>Welcome, ". $_SESSION['fname']." ".$_SESSION['sname']."</p>"; 
            
            if ($_SESSION['usertype']=='C'){
            echo "<p>User Type: homteq Customer</p>";
            }
            if ($_SESSION['usertype']=='A'){
            echo "<p>User type: homteq Administrator</p>";
            }
            
            echo "<br><p>Continue shopping for <a href=index.php>Home Tech</a>";
            echo "<br>View your <a href=basket.php>Smart Basket</a></p>";
        }
         
    }
   
}else{
    echo "<p><b>Your log-in failed!</b></p>";
    echo "<br><br><p>Both email and password fields need to be filled in.</p>";
    echo "<br><br><p>Go back to: <a href=login.php>login</a></p>";
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


