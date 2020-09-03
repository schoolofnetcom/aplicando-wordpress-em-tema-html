<?php

  /**
   * Template Name: Contato
   */

   get_header();
   ?>

<main>
  <section class="section section-center">
    <h2>Contato</h2>
    <p class="subtitle">
      Responderemos assim que possível.
    </p>

    <div class="container">

        <?php 
          echo do_shortcode('[contact-form-7 id="5" title="Contato"]');
        ?>

    </div>

  </section>
</main>

<?php
  get_footer();