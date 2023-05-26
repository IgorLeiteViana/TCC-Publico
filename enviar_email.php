<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $mensagem = $_POST["mensagem"];

  // Aqui você pode adicionar o código para enviar o email com os dados fornecidos

  // Exemplo de envio de email usando a função mail do PHP
  $para = "igorleiteviana08@gmail.com";
  $assunto = "Mensagem do formulário de contato";
  $corpo = "Nome: $nome\nEmail: $email\nMensagem: $mensagem";
  $headers = "De: $email";

  if (mail($para, $assunto, $corpo, $headers)) {
    echo "Email enviado com sucesso!";
  } else {
    echo "Erro ao enviar o email.";
  }
}
?>