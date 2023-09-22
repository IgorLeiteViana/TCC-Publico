<!DOCTYPE html>
<html>
<head>
  <title>Valores da Empresa</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700">
  <link rel="stylesheet" href="assets/css/loader/loaders.css">
  <link rel="stylesheet" href="assets/css/font-awesome/font-awesome.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/aos/aos.css">
  <link rel="stylesheet" href="assets/css/swiper/swiper.css">
  <link rel="stylesheet" href="assets/css/lightgallery.min.css">
  <link rel="stylesheet" href="assets/css/style1.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick.css"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick.min.js"></script>
</head>
<body>
  <!-- Cabeçalho -->
  <header>
    <!-- Inclua o logotipo da empresa, menu de navegação e informações de contato -->
    <h1>Valores</h1>
    <nav>
      <ul>
        <li><a href="#valores">Valores</a></li>
        <li><a href="#downloads">Downloads</a></li>
        <li><a href="#contato">Contato</a></li>
        <li><a href="Untitled-1.html">Voltar</a></li>
      </ul>
    </nav>
  </header>

  <!-- Seção de Destaque (Herói) -->
  <section id="destaque">
    <h2>Art of Work</h2>
    <p>Aqui voce pode encontrar os valores que guiam nossa empresa e nossas açoes diarias.</p>
  </section>

  <!-- Seção de Valores -->
  <section id="valores">
    <h2>Nossos Valores</h2>
    <ul>
      <li>Aqui voce tera os aquivos pdf dos nossos valores empresariais da nossa compania</li>
      <li>Indo desde de oque pensamos porque fazemos e como sera trabalhar com nos</li>
    </ul>
  </section>

  <!-- Seção de Downloads -->
  <section id="downloads">
    <h2>Baixe nossos Documentos</h2>
    <p>Aqui voce pode baixar ou visualizar nossos documentos que falam dos nossos valores.</p>
    <div class="downloads-container">
      <div class="download-item">
        <a href="valores/arquivo1.pdf" target="_blank">
          <i class="fa fa-file-pdf-o"></i>
          Visualizar Documento 1
        </a>
      </div>
      <div class="download-item">
        <a href="valores/arquivo2.pdf" target="_blank">
          <i class="fa fa-file-pdf-o"></i>
          Visualizar Documento 2
        </a>
      </div>
      <div class="download-item">
        <a href="valores/arquivo3.pdf" target="_blank">
          <i class="fa fa-file-pdf-o"></i>
          Visualizar Documento 3
        </a>
      </div>
    </div>
    
    
  <!-- Seção de Contato -->
  <section id="contato">
    <h2>Entre em Contato</h2>
    <p>Para mais informações sobre nossos valores ou qualquer outra dúvida, entre em contato conosco.</p>
    <p>Endereço: Rua Exemplo, 123 - Cidade, Estado</p>
    <p>Telefone: (00) 1234-5678</p>
    <p>Email: exemplo@empresa.com</p>
    <form id="contact-form" action="enviar_email.php" method="POST">
      <input type="text" name="nome" placeholder="Seu nome" required>
      <input type="email" name="email" placeholder="Seu email" required>
      <textarea name="mensagem" placeholder="Digite sua mensagem" required></textarea>
      <button type="submit">Enviar Mensagem</button>
    </form>
  </section>
  

  <section id="clientes">
      <div class="container">
        <h2>Nossos Clientes</h2>
        <div class="clientes-lista">
          <div class="cliente">
            <h2>Unasp Ht</h2>
            <img src="assets/images/client1.png" alt="Cliente 1" id="imagem-cliente">
            
          </div><br>
          <div class="cliente">
            <h2>Em Hortolandia</h2>
            <!-- Rodapé  <img src="assets/images/client.png" alt="Cliente 1" id="imagem-cliente"> -->
          </div>
        </div>
      </div>
  </section>
  <!-- Rodapé -->
  <footer>
    <div class="footer-content">
      <div class="social-media">
        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
      </div>
      <p>&copy; 2023 Nome da Empresa. Todos os direitos reservados.</p>
    </div>
  </footer>

  <script src="assets/js/jquery-3.3.1.js"></script>
  <script src="assets/js/bootstrap.bundle.js"></script>
  <script src="assets/js/loaders.css.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/swiper.min.js"></script>
  <script src="assets/js/lightgallery-all.min.js"></script>
  <script src="assets/js/main.js"></script>

 
 

<script>
  // Função para mostrar a mensagem pop-up
 
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<script>
  var imagens = ["assets/images/client1.png", "assets/images/client2.png", "assets/images/client3.png"];
  var indice = 0;
  var imagemCliente = document.getElementById("imagem-cliente");

  function trocarImagem() {
    indice = (indice + 1) % imagens.length; // Alterna para a próxima imagem circularmente
    imagemCliente.src = imagens[indice];
  }

  setInterval(trocarImagem, 3000); // Muda a imagem a cada 3 segundos (3000 milissegundos)
</script>