<?php
    include_once("templates/header.php");
    $users = fetchAll();
?>
    
    <div>
        <?php if(isset($printMsg) && $printMsg != ""): ?>
            <p class="msg"><?= $printMsg ?></p>
        <?php endif; ?>
    </div>

    <div class="container mt-5">
        <?php if(count($users) > 0): ?>
            <table class="table table-striped">
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
                                <!-- <form action="<?= $BASE_URL ?>index.php" method="POST">
                                    <button type="submit"><i class="fa-solid fa-trash"></i></button>
                                </form> -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
        <?php endif; ?>
    </div>

<?php
    include_once("templates/footer.php");
?>