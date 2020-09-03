<?php

  get_header();

?>

<main>
  <section id="team" class="section section-center">
    <div class="container">
      <h2>Nossa equipe</h2>
      <p class="subtitle">
        Conheça a nossa equipe 
      </p>
      <div class="container">
        <div class="row">

          <?php
            $args = [
              'post_type'        => 'equipe',
              'posts_per_page'   => -1,
            ];
            $myposts = get_posts( $args );
            $loop = 0;
            foreach ( $myposts as $post ) : setup_postdata( $post );
              $classOffset = $loop === 0 || ($loop % 5 == 0) ? 'col-offset-desktop-1' : '';
              ?>
                <div class="team-member col-2 col <?= $classOffset; ?> col-desktop-2">
                  <div class="img-box-round">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <p class="img-box-label"><?php the_title(); ?></p>
                  <div class="description">
                    <h4><?php the_title(); ?></h4>
                    <p>
                      <?php the_content(); ?>
                    </p>

                    <div class="social">
                      <?php
                      if( have_rows('son-equipe-social', $post->ID) ):
                        while ( have_rows('son-equipe-social', $post->ID) ) : the_row();
                          ?>
                            <a href="<?= get_sub_field('link'); ?>">
                              <?= get_sub_field('icon'); ?>
                            </a>
                          <?php
                        endwhile;
                      endif;
                      ?>
                    </div>
                  </div>
                </div>
              <?php
              $loop++;
            endforeach;
            wp_reset_postdata();
          ?>

        </div>

      </div>
    </div>
  </section>
</main>

<?php

  get_footer();

