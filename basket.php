<?php 
session_start();
include("db.php");
$pagename="smart basket"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php");
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//To check if the $_POST superglobal variable exists in PHP, you can use the isset() function
// Remove item from basket if the remove button is clicked
if(isset($_POST['remove_prodId'])) {
    $delprodid = $_POST['remove_prodId'];
    unset($_SESSION['basket'][$delprodid]);
    echo "<p><b>1 item removed from the basket</b><br>";
}
if(isset($_POST['h_prodid']) && isset($_POST['p_quantity'])) {
    $newprodid=$_POST['h_prodid'];
    $reququantity =$_POST['p_quantity'];
    //echo "ID of selected product: ".$newprodid."<br>";
    //echo "Quantity of selected product: ".$reququantity; 
    //create a new cell in the basket session array. Index this cell with the new product id.
    //Inside the cell store the required product quantity
    $_SESSION['basket'][$newprodid]=$reququantity; 
    echo "<p><b>1 item added.</b>";
}
echo '<br><br>';
$total = 0;
echo '<table id="baskettable">';
echo '<tr><th>Product Name</th>';
echo '<th>Price</th>';
echo '<th>Quantity</th>';
echo '<th>Subtotal</th>';
echo '<th>Remove Product</th></tr>';
//echo '</table>'; 
if(isset($_SESSION['basket'])){
    foreach($_SESSION['basket'] as $index => $value){
        $SQL="select prodId, prodName, prodPrice, prodQuantity from Product WHERE prodId = $index";
        $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn)); 
        $arrayp=mysqli_fetch_array($exeSQL); 
        echo '<tr>';
        echo '<td>'.$arrayp['prodName'].'</td>';
        echo '<td>'.$arrayp['prodPrice'].'</td>'; 
        echo '<td>'.$value.'</td>'; 
        $subtotal = $arrayp['prodPrice']*$value;
        echo '<td>'.$subtotal.'</td>'; 
        // create a form to remove the product from the basket
        echo "<td>";
        echo "<form action='basket.php' method='post'>";
        echo "<input type='hidden' name='remove_prodId' value='$index'>";
        echo "<button type='submit' value='Remove'>Remove</button>";
        echo "</form>";
        echo "</td>";
        $total+=$subtotal;
        echo '</tr>';
    } 
}else{
    echo "<p style='font-weight:bold;'>Basket is empty<br><br>";
}
echo '<tr><b><td colspan="4" style="font-weight:bold;">Total</td><td style="font-weight:bold;">'.$total.'</td></tr>';
echo '</table><br><br>';
echo '<a href="clearbasket.php">CLEAR BASKET</a><br><br>';
if(isset($_SESSION['userid'])){
   echo 'To finalise your order:<a href="checkout.php"> Checkout</a><br><br>'; 
}else{
   echo 'New hometeq customers:<a href="signup.php"> Sign Up</a><br><br>';
   echo 'Returning hometeq customers:<a href="login.php"> Log In</a><br><br>';
}

include("footfile.html"); //include head layout
echo "</body>";
?>
