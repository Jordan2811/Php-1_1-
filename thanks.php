<?php
$lastname = $_GET["lastname"];
$firstname =  $_GET["firstname"];
$subject = $_GET["subject"];
$mail = $_GET["mail"];
$phone =$_GET["phone"];
echo "Merci $_GET["lastname"] $_GET["firstname"] de nous avoir contacté à propos de $_GET["subject"]. </br>";
echo "Un de nos conseiller vous contactera  $_GET["mail"] ou par téléphone au $_GET["phone"] dans les plus brefs délais pour traiter votre demande: </br>";
echo $_GET["message"];
