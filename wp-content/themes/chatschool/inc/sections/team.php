<section id="team" class="section section-center">
      <h2>Nossa equipe</h2>
      <p class="subtitle">Conheça nossos colaboradores</p>
      <div class="container">
        <div class="row">

          <?php
            $args = [
              'post_type'        => 'equipe',
              'posts_per_page'   => '5',
            ];
            $myposts = get_posts( $args );
            $loop = 0;
            foreach ( $myposts as $post ) : setup_postdata( $post );
              $classOffset = $loop === 0 ? 'col-offset-desktop-1' : '';
              ?>
                <div class="col <?= $classOffset; ?> col-desktop-2">
                  <div class="img-box-round">
                    <?php
                      the_post_thumbnail();
                    ?>
                  </div>
                  <p class="img-box-label">
                    <?php the_title(); ?>
                  </p>
                </div>
              <?php
              $loop++;
            endforeach;
            wp_reset_postdata();
          ?>

          
        </div>
      </div>
    </section>