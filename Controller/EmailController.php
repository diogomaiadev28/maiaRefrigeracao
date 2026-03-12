<?php

namespace Controller;

class EmailController {
    public function send() {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['doubts'];

        $para = 'contatomaiarefrigeracao@gmail.com';
        $subject = 'Mensagem de cliente - SITE';

        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";

        $content = "Nome: $name\nTelefone: $phone\nEmail: $email\nMensagem: $message";
        if (mail($para, $subject, $content, $headers)){
            echo '<script>alert("Email enviado com sucesso.")</script>';
        } else {
            echo '<script>alert("Falha ao enviar o e-mail.")</script>';
        }
    }
}

?>