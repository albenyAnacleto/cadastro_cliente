<?php
include_once("templates/header.php");
?>
    <div class="container">
      <?php if(isset($printMsg) && $printMsg != ''): ?>
        <p id="msg"><?= $printMsg ?></p>
      <?php endif; ?>
        <h1 id="main-title">Cliente Mary Encantart</h1>
      <?php if(count($client) > 0): ?>
        <table class="table" id="contacts-table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NOME</th>
              <th scope="col">SOBRENOME</th>              
              <th scope="col">TELEFONE</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($client as $client): ?>
              <tr>
                <td scope="row" class="col-id"><?= $client["id"] ?></td>
                <td scope="row"><?= $client["name"] ?></td>
                <td scope="row"><?= $client["sobrenome"] ?></td>                
                <td scope="row"><?= $client["telefone"] ?></td>
                <td class="actions">
                  <a href="<?= $BASE_URL ?>show.php?id=<?= $client["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                  <a href="<?= $BASE_URL ?>edit.php?id=<?= $client["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                  <input type="hidden" name="type" value="delete">
                  <input type="hidden" name="id" value="<?=$client["id"] ?>">
                  <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                </form>
              </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      <?php else: ?>

        <p id="empty-list-text">Ainda não tem contato na sua agenda, <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar contato</a>.</p>

      <?php endif; ?>
    </div>

    <?php
include_once("templates/footer.php");
?>