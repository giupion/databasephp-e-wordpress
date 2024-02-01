<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati dal form
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Crea un array associativo con i dati
    $utente = array(
        'username' => $username,
        'email' => $email,
        'password' => $password
    );

    // Salva l'array nella variabile di sessione
    $_SESSION['utente'] = $utente;

    // Redirect alla pagina principale
    header("Location: index.php");
    exit;
} else {
    // Se la richiesta non è di tipo POST, redirect alla pagina principale
    header("Location: index.php");
    exit;
}
?>
