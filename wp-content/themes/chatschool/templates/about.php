<?php

  /**
   * Template Name: Sobre
   */
  get_header();
?>

<main>
  <section class="section" id="intro">
    <div class="container">
      <div class="row">


        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>

          <div id="img-box" class="col col-desktop-4 col-6">
            <?php 
              if(has_post_thumbnail()) {
                the_post_thumbnail(); 
              }
            ?>
          </div>

          <div class="col col-desktop-8">
            <h2><?php the_title(); ?></h2>
            <p>
              <?php 
                the_content();
              ?>
            </p>
          </div>

          <?php endwhile; ?>
        <?php endif; ?>
        
      </div>
    </div>
  </section>




  <section class="section section-center" id="valores">
    <div class="container">
      <div class="row">

      <?php
      if( have_rows('son-op-mvv', 'option') ):
        while ( have_rows('son-op-mvv', 'option') ) : the_row();
          ?>
            <div class="col col-desktop-4">
              <img src="<?= get_sub_field('image'); ?>" alt="">
              <h2><?= get_sub_field('title'); ?></h2>
              <p><?= get_sub_field('description'); ?></p>
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