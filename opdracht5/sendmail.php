<?php
// MAILVARABELEN AANMAKEB
$to = '24452@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: ' . $_POST['from'];

// MAIL VERSTUREN
mail($to,$subject,$message,$headers);

// BEVESTING VOOR DE GEBRUIKER
echo 'Uw mail is verstuurd. Bedankt!';