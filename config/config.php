<?php
ob_start(); //Turns on output buffering 
session_start();

$timezone = date_default_timezone_set("Europe/London");

// $con = mysqli_connect("ec2-174-129-240-67.compute-1.amazonaws.com", "nxvaerxycwfrcq
// ", "916e1504c7075da675f905ab66a8157175a137fe98b43f22f54294e7344f0a0c
// ", "d8re99qld0lkoh"); //Connection variable
$con = mysqli_connect("localhost", "root", "", "social"); 

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>