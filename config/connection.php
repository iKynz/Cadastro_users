<?php

    session_start();

    // CONEXÃO
    function connection() {
        $host = "localhost";
        $dbname = "contatos";
        $user = "root";
        $pass = "";

        $pdo = new PDO("mysql:host={$host};dbname={$dbname}", "{$user}", "{$pass}");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $pdo;
    }

    // RETORNA TODOS OS CONTATOS
    function fetchAll() {
        $pdo = connection();
        $sql = "SELECT * FROM contatos";
        $list = $pdo->query($sql);
        $list->execute();
        return $list->fetchAll();
    }

    $data = $_POST;
    
    // CRIAR CONTATO
    if(!empty($_POST)) {
        if($data["type"] === "create") {

            $nome = $data["nome"];
            $phone = $data["phone"];
            $email = $data["email"];
            $observacao = $data["observacao"];

            $pdo = connection();
            $sql = "INSERT INTO contatos (nome, phone, email, observacao) VALUES (:nome, :phone, :email, :observacao)";
            $create = $pdo->prepare($sql);

            $create->bindParam(":nome", $nome);
            $create->bindParam(":phone", $phone);
            $create->bindParam(":email", $email);
            $create->bindParam(":observacao", $observacao);

            try{

                $create->execute();
                $_SESSION["msg"] = "Contato criado com sucesso! :)";

            } catch(PDOException $e) {

                $error = $e->getMessage();
                echo "Error: $error";
                
            }
        }
        header("location:" . $BASE_URL . "../index.php");
    }

    // EDITAR CONTATO
    if(!empty($_POST)) {
        if($data["type"] === "edit") {

            $id = $data["id"];
            $nome = $data["nome"];
            $phone = $data["phone"];
            $email = $data["email"];
            $observacao = $data["observacao"];

            $pdo = connection();
            $sql = "UPDATE contatos SET nome = :nome, phone = :phone, email = :email, observacao = :observacao WHERE id = :id";
            $create = $pdo->prepare($sql);

            $create->bindParam(":id", $id);
            $create->bindParam(":nome", $nome);
            $create->bindParam(":phone", $phone);
            $create->bindParam(":email", $email);
            $create->bindParam(":observacao", $observacao);

            try{

                $create->execute();
                $_SESSION["msg"] = "Contato editado com sucesso! :)";

            } catch(PDOException $e) {

                $error = $e->getMessage();
                echo "Error: $error";
                
            }        
        }
        header("location:" . $BASE_URL . "../index.php");
    } else {
        $id;

        if(!empty($_GET)) {
            $id = $_GET["id"];
        }

        // RETORNA O DADO DE UM CONTATO
        if(!empty($id)) {
            $pdo = connection();
            $sql = "SELECT * FROM contatos WHERE id = :id";

            $returnUser = $pdo->prepare($sql);
            $returnUser->bindParam(":id", $id);
            $returnUser->execute();
            $return = $returnUser->fetch();
        }     
    }
   