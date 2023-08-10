<?php
    require_once("config/url.php");
    require_once("config/connection.php");

    if(isset($_SESSION["msg"])) {
        $printMsg = $_SESSION["msg"];
        $_SESSION["msg"] = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>./css/style.css">
    <title>Contatos</title>
</head>
<body>
   <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
                <img src="<?= $BASE_URL ?>/img/logo.png" alt="">        
            </a>
            <div>
                <div class="navbar-nav">
                    <a href="<?= $BASE_URL ?>index.php" class="nav-link">Contatos</a>
                    <a href="<?= $BASE_URL ?>create.php" class="nav-link">Adicionar Contato</a>
                </div>
            </div>
        </nav>
   </header>