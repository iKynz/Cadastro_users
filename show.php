<?php
    include_once("./templates/header.php");  
?>

    <div class="show-container">
        
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
    <?php include_once("./templates/back.php"); ?>

<?php
    include_once("templates/footer.php");
?>