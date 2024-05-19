<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
if(isset($_SESSION['userid'])){
    echo "<p style='float: right'><img src=UserLogo.png style='width:20px; height:20px'><b> "
    .$_SESSION['fname']." ".$_SESSION['sname'].
            " | User type: ".$_SESSION['usertype']."</b></p>";
}
