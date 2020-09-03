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
      Lorem ipsum dolor sit amet. Proin gravida nibh vel velit auctor aliquet.Lorem ipsum dolor sit amet.<br>
      Lorem ipsum dolor sit amet. Proin gravida nibh vel velit auctor aliquet.
    </p>

    <div class="container">
      <!-- https://github.com/dwyl/html-form-send-email-via-google-script-without-server -->
      <form action="https://script.google.com/macros/s/AKfycbzwr5wrIL9yQUw3Lh83wjqIw05peunLi-iUHiNVMgQ9WgXbj3AM/exec" class="row" method="post">
        <div class="col col-desktop-6 col-6">
          <div class="input-control">
            <input id="nome" name="nome" type="text" required placeholder="Nome...">
            <label for="nome">Nome*</label>
          </div>
          <div class="input-control">
            <input id="email" name="email" type="email" required placeholder="Email...">
            <label for="email">Email*</label>
          </div>
          <div class="input-control">
            <input id="telefone" name="telefone" type="number" placeholder="Telefone...">
            <label for="telefone">Telefone</label>
          </div>
        </div>
        <div class="col col-desktop-6 col-6">
          <div class="input-control">
            <textarea id="mensagem" name="mensagem" id="" cols="30" rows="10" placeholder="Mensagem..."></textarea>
            <label for="mensagem">Telefone</label>
          </div>
        </div>
        <div class="col col-desktop-12 col-6">
          <input type="submit" value="Enviar" class="btn orange">
        </div>
      </form>
    </div>

  </section>
</main>

<?php
  get_footer();