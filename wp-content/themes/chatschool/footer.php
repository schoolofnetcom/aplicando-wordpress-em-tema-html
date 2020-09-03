<footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col col-offset-desktop-1 col-desktop-3">
          <p>
            <a href="<?= get_site_url(); ?>">
              <img src="<?= get_field('son-op-logo', 'option'); ?>" alt="Logo da Chatschool">
            </a>
          </p>
          <p>
          <?= get_field('son-op-home-resume', 'option'); ?>
          </p>
        </div>
        <div class="col col-offset-desktop-1 col-desktop-2 col-2">
          <h3>Menu</h3>
          <nav>
            <!-- <ul>
              <li><a href="/" class="active">Home</a></li>
              <li><a href="quem-somos.html">Quem somos</a></li>
              <li><a href="clientes.html">Clientes</a></li>
              <li><a href="equipe.html">Equipe</a></li>
              <li><a href="contato.html">Contato</a></li>
            </ul> -->
            <?php wp_nav_menu(['theme_location' => 'footer']); ?>
          </nav>
        </div>
        <div class="col col-desktop-3 social col-4">
          <?php
          if( have_rows('son-op-socials', 'option') ):
            while ( have_rows('son-op-socials', 'option') ) : the_row();
              ?>
                <a href="<?= get_sub_field('link'); ?>">
                  <?= get_sub_field('icon'); ?>
                </a>
              <?php
            endwhile;
          else :
          // no rows found
          endif;
          ?>
        </div>
      </div>
    </div>
  </footer>

  <div id="copyright">
    &copy; Chatschool - 2017 - Todos os direitos reservados
  </div>

  <!-- <script src="<?// = SONDIR; ?>/js/meuarquivo.js"></script>
  <script src="<?// = SONDIR; ?>/js/meuarquivo.js"></script>
  <script src="<?// = SONDIR; ?>/js/meuarquivo.js"></script> -->

  <?php wp_footer(); ?>

</body>
</html>