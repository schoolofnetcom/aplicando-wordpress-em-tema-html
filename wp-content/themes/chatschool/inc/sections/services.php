<section id="how-it-work" class="section section-center">
  <h2>Serviços</h2>
  <p class="subtitle">Conheça nossos serviços</p>

  <div class="container">
    <div class="row">

      <?php
      if( have_rows('son-op-services', 'option') ):
        while ( have_rows('son-op-services', 'option') ) : the_row();
          ?>
          <div class="col col-desktop-4">
            <div class="icon-container">
              <?= get_sub_field('icon'); ?>
            </div>
            <h3><?= get_sub_field('title'); ?></h3>
            <p><?= get_sub_field('description'); ?></p>
            <p><a href="<?= get_site_url(); ?>/quem-somos" class="btn">Saiba mais</a></p>
          </div>
          <?php
        endwhile;
      endif;
      ?>

    </div>
  </div>

</section>