<?php
    include_once("./templates/header.php");
?>

<form action="<?= $BASE_URL ?>./config/connection.php" method="POST">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="id" value="<?= $return->id ?>">
    <div class="form-floating mb-3">
        <input type="text" name="nome" id="nome" class="form-control" id="floatingInput" value="<?= $return->nome ?>" placeholder="Digite seu nome" required>
        <label for="floatingInput">Editar nome</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" name="phone" id="phone" class="form-control" id="floatingPassword" value="<?= $return->phone ?>" placeholder="Digite seu telefone" required>
        <label for="floatingPassword">Editar telefone</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" name="email" id="email" class="form-control" id="floatingPassword" value="<?= $return->email ?>" placeholder="Digite seu email" required>
        <label for="floatingPassword">Editar email</label>
    </div>
    <div class="form-floating mb-4">
        <textarea type="text" name="observacao" id="observacao" class="form-control" id="floatingPassword" placeholder="Digite suas observações"></textarea>
        <label for="floatingPassword">Editar observação</label>
    </div>
    <button type="submit" class="btn btn-outline-primary">Atualizar</button>
</form>