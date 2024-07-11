<?php
    session_start();

    require("mailer.php");

    // ---- Obtenir de vrai code sur le site de google reCAPTCHA => suivre les instructions de chatGPT ---- //

    // $recaptcha_secret = 'your-secret-key';
    // $recaptcha_response = $_POST['g-recaptcha-response'];

    // reCAPTCHA verification
    // $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
    // $response_keys = json_decode($response, true);

    // if (intval($response_keys["success"]) !== 1) {
    //     die("reCAPTCHA verification failed. Please try again.");
    // }

    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    $validationMessage = "";
    $errorMessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST) && !empty($_POST)) {
        $name = isset($_POST["name"]) ? htmlspecialchars(strip_tags(trim($_POST["name"]))) : "";
        $email = isset($_POST["email"]) ? htmlspecialchars(strip_tags(trim($_POST["email"]))) : "";
        $message = isset($_POST["message"]) ? htmlspecialchars(strip_tags(trim($_POST["message"]))) : "";

        if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            die("Invalid CSRF token.");
        }

        if (empty($name) || !preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $errorMessage = "Invalid name.";
        }

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMessage = "Invalid email.";
        }

        if (empty($message) || strlen($message) > 255) {
            $errorMessage = "Invalid message.";
        }

        if (empty($errorMessage)) {
            $_SESSION["verifiedName"] = $name;
            $_SESSION["verifiedEmail"] = $email;
            $_SESSION["verifiedMessage"] = $message;
            $_SESSION["validationMessage"] = "";
            $_SESSION["errorMessage"] = "";
        } else {
            $_SESSION["errorMessage"] = $errorMessage;
        }
    }

    if (isset($_POST["submit"])) {
        if (empty($_SESSION["verifiedName"]) || empty($_SESSION["verifiedEmail"]) || empty($_SESSION["verifiedMessage"])) {
            $errorMessage = "An error occurred while sending the message. Please complete the form correctly and try again.";
        } else {
            $validationMessage = "Thank you for your message. We will respond as soon as possible.";
            $response = sendMail($_SESSION["verifiedName"], $_SESSION["verifiedEmail"], $_SESSION["verifiedMessage"]);

            session_unset();
            session_destroy();

            header("Location: " . strtok($_SERVER["REQUEST_URI"], "?"));
            exit;
        }
    }

    if (isset($_SESSION["validationMessage"])) {
        $validationMessage = $_SESSION["validationMessage"];
        unset($_SESSION["validationMessage"]);
    }

    if (isset($_SESSION["errorMessage"])) {
        $errorMessage = $_SESSION["errorMessage"];
        unset($_SESSION["errorMessage"]);
    }
?>