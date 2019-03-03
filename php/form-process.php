<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Escribe tu nombre";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Escribe tu correo electrónico";
} else {
    $email = $_POST["email"];
}

// PHONE
if (empty($_POST["phone"])) {
    $errorMSG .= "Escribe tu teléfono";
} else {
    $phone = $_POST["phone"];
}
// EMAIL
if (empty($_POST["affair"])) {
    $errorMSG .= "Escribe tu asunto";
} else {
    $affair = $_POST["affair"];
}
// MESSAGE
if (empty($_POST["comment"])) {
    $errorMSG .= "Comentarios";
} else {
    $comment = $_POST["comment"];
}


$EmailTo = "ing.tiupt@gmail.com";
$Subject = "Nuevo Mensaje";

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Correo electrónico: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Teléfono: ";
$Body .= $phone;
$Body .= "\n";

$Body .= "Asunto: ";
$Body .= $affair;
$Body .= "\n";

$Body .= "Comentarios: ";
$Body .= $comment;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>