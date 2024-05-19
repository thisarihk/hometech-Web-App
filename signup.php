<?php
$pagename="sign up"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
echo "<form action=signup_process.php method=post id='signupform' style='align-items:center;' >"; 
echo "<table class='formTable' style='border:0px; width:60%; background-color:white; border-radius:20px; "
. "box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>";
echo "<tr>";
echo "<td style='border:0px'><label for='fname'>First Name: </label></td>";
echo "<td style='border:0px; width:40%;'><input type='text' id='fname' name='fname' size=30></td>";
echo "</tr>"; 
echo "<tr>";
echo "<td style='border:0px'><label for='lname'>Last Name: </label></td>";
echo "<td style='border:0px; width:40%;'><input type='text' id='lname' name='lname' size=30></td>";
echo "</tr>";
echo "<tr>";
echo "<td style='border:0px'><label for='address'>Address: </label></td>";
echo "<td style='border:0px; width:40%;'><input type='text' id='address' name='address' size=30></td>";
echo "</tr>";
echo "<tr>";
echo "<td style='border:0px'><label for='postcode'>Postcode: </label></td>";
echo "<td style='border:0px; width:40%;'><input type='text' id='postcode' name='postcode' size=30></td>";
echo "</tr>";
echo "<tr>";
echo "<td style='border:0px'><label for='telno'>Tel No: </label></td>";
echo "<td style='border:0px; width:40%;'><input type='tel' id='telno' name='telno' size=30></td>";
echo "</tr>";
echo "<tr>";
echo "<td style='border:0px'><label for='email'>Email Address: </label></td>";
echo "<td style='border:0px; width:40%;'><input type='text' id='email' name='email' size=30></td>";
echo "</tr>";
echo "<tr>";
echo "<td style='border:0px'><label for='password'>Password: </label></td>";
echo "<td style='border:0px; width:40%;'><input type='password' id='password' name='password' size=30></td>";
echo "</tr>";
echo "<tr>";
echo "<td style='border:0px'><label for='Cpassword'>Confirm password:</label></td>";
echo "<td style='border:0px; width:40%;'><input type='password' id='Cpassword' name='Cpassword' size=30></td>";
echo "</tr>"; 
echo "<tr>";
echo "<td style='border:0px'><button type='submit'>Sign Up</button></td>";
echo "<td style='border:0px; width:40%;'><button type='reset'>Clear Form</button></td>";
echo "</tr>";
//pass the product id to the next page basket.php as a hidden value
//echo "<input type=hidden name=h_prodid value=".$prodid.">";
echo "</table>";
echo "</form>";
include("footfile.html"); //include head layout
echo "</body>";
?>
