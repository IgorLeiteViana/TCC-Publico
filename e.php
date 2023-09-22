<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "victorluizunasp@eaportal.org";
    $subject = "Contato pelo Formulário de Contato";
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    $headers = "From: $email";

    $body = "Nome: $nome\n";
    $body .= "Email: $email\n\n";
    $body .= "Mensagem:\n$mensagem";

    if (mail($to_email, $subject, $body, $headers)) {
        $response = array("success" => true, "message" => "Obrigado por entrar em contato, $nome. Seu email foi enviado com sucesso para $to_email.");
    } else {
        $response = array("success" => false, "message" => "Desculpe, ocorreu um erro ao enviar o email. Por favor, tente novamente mais tarde.");
    }

    // Retorna a resposta em formato JSON
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    header("Location: contato.php"); // Redireciona para a página de contato
}
?>
