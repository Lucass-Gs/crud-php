<?php

?>

<main>
      <section  class="main-form">
      <h2><?=TITLE?></h2>
                  
            <form method="post">
                  <div class="input-form">
                        <p>Você deseja realmente excluir o cliente:</br> <strong><?=$obCliente->nome?></strong></p>
                  </div>
                  <div class="input-form">
                        <div class="confirm-button-container">
                              <a href="index.php">
                                    <button type="button" class="button">
                                          Cancelar
                                    </button>
                                    
                              </a>
                        <div>
                        <div class="confirm-button-container">                       
                                    <button type="submit" name="excluir" class="button">
                                          Excluir
                                    </button>
                        </div>                       
            </form>           
      </section>
</main>