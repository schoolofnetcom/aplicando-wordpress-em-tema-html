<?php
  /**
   * Template Name: Clientes
   */

   get_header();
?>

<main>
  <section id="customers" class="section section-center">
    <h2>Nossos clientes</h2>
    <p class="subtitle">Lorem ipsum dolor sit amet. Proin gravida nibh vel velit auctor aliquet</p>

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
    </div>
  </section>
</main>

<?php 
  get_footer();
