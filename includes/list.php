<?php

$mensagem =  ' ';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="alert-success">Ação executada com sucesso!</div>';
            header("refresh: 2;index.php");
            break;

        case 'error':
            $mensagem = '<div class="alert-error">Ação não executada!</div>';
            header("refresh: 2;index.php");
            break;
    }
}

$resultados = ' ';
foreach ($clientes as $cliente) {
      $resultados .= '<tr>
                                    <td>' . $cliente->id . '</td>
                                    <td>' . $cliente->nome . '</td>
                                    <td>' . date('d/m/Y', strtotime($cliente->data_nasc)) . '</td>
                                    <td>' . $cliente->email . '</td>
                                    <td>' . $cliente->num . '</td>
                                    <td>                                          
                                          <a href="edit.php?id=' . $cliente->id . '">
                                          <button class="edit-button"  type="button">Editar</button><a href="delete.php?id=' . $cliente->id . '"><button class="delete-button"  type="button">Excluir</button>                                          
                                    </td>                                    
                              </tr>';
}

if ($resultados == ' ') {
    $resultados .=      '<tr>
                                          <td>
                                                Nenhum cliente encontrado
                                          </td>
                                  </tr>';
}

?>

<main>

<?=$mensagem?>
      <section class="new-button-container">
            <a href="register.php">
                  <button class="button">
                        Novo cliente
                  </button>
            </a>
      </section>

      <section>
            <table cellspacing="0" cellpadding="0">
                  <thead>
                        <tr>
                              <th>ID</th>
                              <th>Nome</th>
                              <th>Data de nascimento</th>
                              <th>Email</th>
                              <th>Whatsapp</th>
                              <th>Ações</th>                              
                        </tr>
                  </thead>
                  <tbody>
                        <?=$resultados?>
                  </tbody>
            </table>
      </section>

</main>
