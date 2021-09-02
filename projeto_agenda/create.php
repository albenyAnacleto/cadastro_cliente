<?php
include_once("templates/header.php");
?>
    <div class="container">
        <?php include_once("templates/backbtn.php"); ?>
        <h1 id="main-title"> Cadastrar Cliente </h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome do Cliente:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite o Sobrenome" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o Telefone" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Digite o E-mail" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF" required>
            </div>
            <div class="form-group">
                <label for="rua">Rua / Avenida:</label>
                <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite a Rua ou Avenida" required>
            </div>
            <div class="form-group">
                <label for="numero">Numero:</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite o numero" required>
            </div>
            <div class="form-group">
                <label for="complemento">Complemento:</label>
                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Digite o complemento" required>
            </div>
            <div class="form-group">
                <label for="cep">Informe o CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o CEP" required>
            </div>
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe a Cidade" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Informe o Estado" required>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        
        </form>
    </div>    

<?php
include_once("templates/footer.php");
?>