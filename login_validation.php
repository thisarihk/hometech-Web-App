<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$username = $_GET['username']; 
$pass = $_GET['password'];

$sample = $_GET['sample']; //Can't do this with POST method.

echo "<h2>".$username."</h2>";
echo "<h2>".$pass."</h2>"; 

echo "<h2>".$sample."</h2>";

