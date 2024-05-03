<?php
session_start();
$pagename="homteq: cloud controlled tech for your home"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
include ("detectlogin.php");
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
echo "homteq is a highly-specialised online retailer that offers a wide range of devices at the most competitive prices
to make your home and your life super SMART.
<br><br>
<b>SMART SECURITY</b><br><br>
Smart-home monitoring products mean you can set up cameras to check on your home, even if you’re in another country.
You can either watch a live stream through your phone or tablet, or just get alerts when the motion sensor is triggered.
<br><br>
<b>SMART ENERGY</b><br><br>
Smart thermostat systems let you turn it off instantly from your phone – no matter where you are – or you can tell them
when you’re heading home to switch it back on, so it’s warm when you get in.
They can figure out your routine and customise your heating and hot water so it’s on when you need it and off when you don’t,
helping to reduce your energy bills. 
<br><br>
<b>SMART SPEAKERS</b><br><br>
We’ve all got too much to do.
Being able to command a virtual assistant to do something for you saves time, and it also means you can multitask more effectively.
If your hands are covered in flour but you need a two-minute timer, you can set it by voice without even having to stop kneading.
Because virtual assistants live in a speaker with a microphone, they’re present in your home whenever you need them.
<br><br>
Whatever smart tech you are after, homteq has it on offer!";
//echo "<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non consectetur a erat nam at lectus urna. Cras pulvinar mattis nunc sed blandit libero volutpat sed cras. Nunc aliquet bibendum enim facilisis gravida neque convallis a cras. Nunc consequat interdum varius sit. Nam aliquam sem et tortor consequat. Magna sit amet purus gravida. Non sodales neque sodales ut etiam sit. Tortor consequat id porta nibh venenatis. Ornare arcu odio ut sem nulla pharetra diam. Tincidunt ornare massa eget egestas purus. Pulvinar mattis nunc sed blandit libero volutpat sed. Nulla malesuada pellentesque elit eget. Varius quam quisque id diam vel quam elementum pulvinar. Aliquet eget sit amet tellus cras adipiscing enim eu turpis. Vestibulum lectus mauris ultrices eros in. Faucibus in ornare quam viverra. Hac habitasse platea dictumst vestibulum rhoncus. Parturient montes nascetur ridiculus mus. Dui accumsan sit amet nulla facilisi morbi tempus iaculis urna.";
include("footfile.html"); //include head layout
echo "</body>";
?>
