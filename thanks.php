<?php
$lastname = $_GET["lastname"];
$firstname =  $_GET["firstname"];
$subject = $_GET["subject"];
$mail = $_GET["mail"];
$phone =$_GET["phone"];
echo "Merci $lastname $firstname  de nous avoir contacté à propos de $subject . </br>";
echo "Un de nos conseiller vous contactera  $mail = $_GET["mail"] ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande: </br>";
echo $phone;
