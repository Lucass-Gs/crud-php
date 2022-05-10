<?php

$max = date('Y-m-d');
?>
<main>
      <section class="back-button-container">
            <a href="index.php">
                  <button class="button">
                        Voltar
                  </button>
            </a>
      </section>

      <section  class="main-form">
            <h2><?=TITLE?></h2>
                  
            <form method="post">
                  <div class="input-form">
                        <label>Nome completo: </label>
                        <input  class="input-text" type="text" name="nome" value="<?=$obCliente->nome?>"
                              required placeholder="Insira seu nome completo">
                  </div>
                  <div class="input-form">
                        <label>Data de nascimento: </label>
                        <input type="date" name="data_nasc" value="<?=$obCliente->data_nasc?>"
                        required placeholder="00/00/0000"
                        min="1800-01-01" max="<?=$max?>">
                  </div>
                  <div class="input-form">
                        <label>Email: </label>
                        <input  class="input-text" type="email" name="email"
                              required placeholder="exemplo@exemplo.com" 
                              value="<?=$obCliente->email?>">
                  </div>
                  <div class="input-form-phone">
                        <label>Whatsapp: </label>
                        <input type="text" inputmode="numeric" id="phone" name="num"
                              placeholder="(xx) xxxxx-xxxx" pattern="(\([0-9]{2}\))\s([9]{1})?([0-9]{5})-([0-9]{4})"
                              title="(xx) xxxxx-xxxx"
                              maxlength="17"
                              required="required"
                              onkeypress="mask(this, mphone);" onblur="mask(this, mphone);"
                              value="<?=$obCliente->num?>">                              
                  </div>
                  <div clas="input-form">
                        <button type="submit" class="button">
                              Enviar
                        </button>
                  </div>
            </form>           
      </section>
</main>
