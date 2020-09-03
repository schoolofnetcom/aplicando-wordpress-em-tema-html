<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chatschool</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body>
  <header id="header" class="page-home">
    <img class="top-banner" src="<?= SONDIR; ?>/images/background-header.jpg" alt="">
    <div class="container">
      <div class="row">
        <div class="col col-desktop-3 col-6">
          <a href="index.html">
            <img src="<?= SONDIR; ?>/images/logo.png" alt="Logo da Chatschool">
          </a>
        </div>
        <div class="col col-desktop-9 col-6">
          <nav>
            <!-- <ul>
              <li><a href="/" class="active">Home</a></li>
              <li><a href="quem-somos.html">Quem somos</a></li>
              <li><a href="clientes.html">Clientes</a></li>
              <li><a href="equipe.html">Equipe</a></li>
              <li><a href="contato.html">Contato</a></li>
            </ul> -->
            <?php wp_nav_menu(['theme_location' => 'main']); ?>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col col-desktop-12 title">
          <h1>Alta produtividade em tempo real</h1>
          <a href="produto.html" class="btn">Começar agora</a>
        </div>
      </div>
    </div>
  </header>