<section id="customers" class="section section-center">
  <h2>Nossos clientes</h2>
  <p class="subtitle">vejam nossos clientes</p>

  <div class="container">
    
    <div class="row">

      <?php
      if( have_rows('son-op-clients', 'option') ):
        while ( have_rows('son-op-clients', 'option') ) : the_row();
          ?>
            <div class="col col-desktop-3">
              <?php 
                if(get_sub_field('link')) {
                  ?>
                  <a target="_blank" href="<?= get_sub_field('link'); ?>">
                    <img src="<?= get_sub_field('image'); ?>" alt="">
                  </a>
                  <?php
                }else {
                  ?>
                    <img src="<?= get_sub_field('image'); ?>" alt="">
                  <?php
                }
              ?>
            </div>
          <?php
        endwhile;
      endif;
      ?>

      
    </div>

    <div class="row">
      <div class="col col-desktop-12">
        <a href="<?= get_site_url(); ?>/clientes" class="btn">Todos os clientes <i class="material-icons">arrow_forward</i></a>
      </div>
    </div>
  </div>
</section>