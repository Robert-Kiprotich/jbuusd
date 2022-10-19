<?php
session_start();
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];  
$serviceCode = $_POST["serviceCode"];  
$text = $_POST["text"];
//This is the first menu screen
if ( $text == "" ) {
$response  = "CON Hi welcome,get loan easily \n";
$response .= "1. Enter 1 to continue";
}
// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen
else if ($text == "1") {
$response  = "CON  enter your phone name\n";
$response .= "1.  \n";

}
//Menu for a user who selects '1' from the second menu above
// Will be brought to this third menu screen
else if ($text == "1*1") {
$response = "CON enter your phone no \n";
$response .= " \n";
}
else if ($text == "1*1*1") {
$response = "CON your loan limit is 10,000 \n";
$response .= "Enter 1 to continue \n";
$response .= "Enter 0 to cancel";
}
else if ($text == "1*1*1*1") {
$response = "END apply";
}
else if ($text == "1*1*1*0") {
$response = "END loan processing fee ksh 90";
}
// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1*2") {
$response = "CON You are about to book a table for 4 \n";
$response .= "Please Enter 1 to confirm \n";
}

else if ($text == "1*4*1*0") {
$response = "END Your Table your loan is being processed";
}
//echo response
header('Content-type: text/plain');
echo $response
?>