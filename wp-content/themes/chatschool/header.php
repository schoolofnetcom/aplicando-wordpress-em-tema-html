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
    <?php 
      if(is_home()) {
        $imgBanner = get_field('son-op-banner-home', 'option') ? get_field('son-op-banner-home', 'option') : get_field('son-op-banner-default', 'option');
      }else {
        $imgBanner = get_field('son-page-banner') ? get_field('son-page-banner') : get_field('son-op-banner-default', 'option');
      }
    ?>

    <img class="top-banner" src="<?= $imgBanner; ?>" alt="">
    <div class="container">
      <div class="row">
        <div class="col col-desktop-3 col-6">
          <a href="<?= get_site_url(); ?>">
            <img src="<?= get_field('son-op-logo', 'option'); ?>" alt="Logo da Chatschool">
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
          <h1><?= get_field('son-op-home-title', 'option'); ?></h1>
          <a href="<?= get_field('son-op-home-link', 'option'); ?>" class="btn"><?= get_field('son-op-home-text-button', 'option'); ?></a>
        </div>
      </div>
    </div>
  </header>