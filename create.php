<?php
    include_once("./templates/header.php");
?>

<form action="<?= $BASE_URL ?>./config/connection.php" method="POST">
    <input type="hidden" name="type" value="create">
    <div class="form-floating mb-3">
        <input type="text" name="nome" id="nome" class="form-control" id="floatingInput" placeholder="Digite seu nome" required>
        <label for="floatingInput">Nome</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="phone" id="phone" class="form-control" id="floatingPassword" placeholder="Digite seu telefone" required>
        <label for="floatingPassword">Telefone</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" name="email" id="email" class="form-control" id="floatingPassword" placeholder="Digite seu email" required>
        <label for="floatingPassword">Email</label>
    </div>
    <div class="form-floating mb-4">
        <textarea type="text" name="observacao" id="observacao" class="form-control" id="floatingPassword" placeholder="Digite suas observações" required></textarea>
        <label for="floatingPassword">Observação</label>
    </div>
    <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
</form>