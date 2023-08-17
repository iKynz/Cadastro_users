<?php
    include_once("./templates/header.php");  
?>

<div class="delete-container">
    <h1 class="delete-user">Você tem certeza que deseja remover?</h1>    
    <h1><?= $return->nome ?></h1>
    <div>
        <h4>Telefone:</h4>
        <p><?= $return->phone ?></p>
    </div>
    <div>
        <h4>Email:</h4>
        <p><?= $return->email ?></p>
    </div>
    <div>
        <h4>Observações:</h4>
        <p><?= $return->observacao ?></p>
    </div>
</div>

<form class="delete-confirm" action="<?= $BASE_URL ?>./config/connection.php" method="POST">
    <input type="hidden" name="type" value="delete">
    <input type="hidden" name="id" value="<?= $return->id ?>">
    <button type="submit" class="btn btn-danger">Deletar</button>
</form>
    <?php include_once("./templates/back.php"); ?>

<?php
    include_once("templates/footer.php");
?>

