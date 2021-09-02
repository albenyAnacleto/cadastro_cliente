<?php
include_once("templates/header.php");
?>

    <div class="container" id="view-contact-container">
        <?php include_once("templates/backbtn.php"); ?>
        <h1 id="main-title"><?= $client["name"] ?></h1>
        <p class="bold">Sobrenome</p>
        <p><?= $client["sobrenome"] ?></p>
        <p class="bold">Telefone</p>
        <p><?= $client["telefone"] ?></p>
        <p class="bold">Email</p>
        <p><?= $client["email"] ?></p>
        <p class="bold">CPF</p>
        <p><?= $client["cpf"] ?></p>
        <p class="bold">Rua/Avenida</p>
        <p><?= $client["rua"] ?></p>
        <p class="bold">Numero</p>
        <p><?= $client["numero"] ?></p>
        <p class="bold">Complemento</p>
        <p><?= $client["complemento"] ?></p>
        <p class="bold">Cep</p>
        <p><?= $client["cep"] ?></p>
        <p class="bold">Cidade</p>
        <p><?= $client["cidade"] ?></p>
        <p class="bold">Estado</p>
        <p><?= $client["estado"] ?></p>

    </div>
    

<?php
include_once("templates/footer.php");
?>