<?php 
function connectToDB()
{
$host = "localhost"; // naam / locatie database server
$user = "root"; // gebruikersnaam om in te loggen op de database server
$pass = "usbw"; // wachtwoord usbw voor usb webserver
$dB = "top2000"; // naam van de database
$connect = mysqli_connect($host,$user, $pass, $dB);
return $connect;
}

$connect = connectToDB();



 ?>