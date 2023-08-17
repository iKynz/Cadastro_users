<?php
    include_once("./templates/header.php");
    $users = fetchAll();   
?>
    
    <div>
        <?php if(isset($printMsg) && $printMsg != ""): ?>
            <p class="msg"><?= $printMsg ?></p>
        <?php endif; ?>
    </div>
    
    <?php if(count($users) > 0): ?>
        <div class="container mt-5">
            <?php if(count($users) > 0): ?>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <th scope="row"><?= $user->id ?></th>                         
                                <td><?= $user->nome ?></td>
                                <td><?= $user->phone ?></td>
                                <td><?= $user->email ?></td>
                                <td>
                                    <a href="<?= $BASE_URL ?>show.php?id=<?= $user->id ?>"><i class="fa-solid fa-eye"></i></a>
                                    <a href="<?= $BASE_URL ?>edit.php?id=<?= $user->id ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="<?= $BASE_URL ?>delete_user.php?id=<?= $user->id ?>"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
            <?php endif; ?>
        </div>
    <?php else: ?>
            <p class="contatos">Você ainda não tem contatos, <a href="<?= $BASE_URL ?>create.php">Adicionar Contato.</a></p>
    <?php endif; ?>

<?php
    include_once("./templates/footer.php");
?>