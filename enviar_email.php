<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $to = "luis_gauze@estudante.sesisenai.org.br";
    $subject = "Nova mensagem do formulário de contato";
    $body = "Nome: $nome\nEmail: $email\nMensagem: $mensagem";

    if (mail($to, $subject, $body)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem. Por favor, tente novamente mais tarde.";
    }
}
?>
