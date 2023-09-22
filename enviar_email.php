<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "igorleiteviana08@gmail.com";
    $subject = "Contato pelo Formulário de Contato";
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    $headers = "From: $email";

    $body = "Nome: $nome\n";
    $body .= "Email: $email\n\n";
    $body .= "Mensagem:\n$mensagem";

    if (mail($to_email, $subject, $body, $headers)) {
        $mensagem_sucesso = "Obrigado por entrar em contato, $nome. Seu email foi enviado com sucesso para $to_email.";
    } else {
        $mensagem_erro = "Desculpe, ocorreu um erro ao enviar o email. Por favor, tente novamente mais tarde.";
    }
} else {
    header("Location: contato.php"); // Redireciona para a página de contato
}

$tempo_redirecionamento = 5; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contato</title>
    <!-- Inclua o link do Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('assets/images/Su.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>

<!-- Conteúdo da página aqui -->

<!-- Inclua o link do Bootstrap JavaScript e jQuery, se necessário -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Adicione o código JavaScript para mostrar o pop-up modal -->
<script>
$(document).ready(function(){
    <?php if (isset($mensagem_sucesso)): ?>
    // Se houver uma mensagem de sucesso, mostre o pop-up modal de sucesso
    $('#modalSucesso').modal('show');

    // Redirecione para a página valores.php após o pop-up ser fechado
    $('#modalSucesso').on('hidden.bs.modal', function (e) {
        window.location.href = 'valores.php';
    });
    <?php elseif (isset($mensagem_erro)): ?>
    // Se houver uma mensagem de erro, mostre o pop-up modal de erro
    $('#modalErro').modal('show');

    // Redirecione para a página valores.php após o pop-up ser fechado
    $('#modalErro').on('hidden.bs.modal', function (e) {
        window.location.href = 'valores.php';
    });
    <?php endif; ?>
});
</script>

<!-- Pop-up modal de sucesso -->
<div class="modal fade" id="modalSucesso" tabindex="-1" role="dialog" aria-labelledby="modalSucessoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSucessoLabel">Mensagem de Sucesso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $mensagem_sucesso; ?>
      </div>
    </div>
  </div>
</div>

<!-- Pop-up modal de erro -->
<div class="modal fade" id="modalErro" tabindex="-1" role="dialog" aria-labelledby="modalErroLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalErroLabel">Erro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $mensagem_erro; ?>
      </div>
    </div>
  </div>
</div>

</body>
</html>
