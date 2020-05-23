<?php
    include_once "app/views/back/layouts/head.php";
    include_once "app/views/back/layouts/header.php";
?>

<main class="container">

<table>
    <tr>
        <td class="titre-table">ID</td>
        <td class="titre-table">Description</td>
        <td class="titre-table">Alt associé</td>
        <td class="titre-table">Ajout</td>
        <td class="titre-table">Supprimer</td>
    </tr>
    <?= var_dump($showInspis) ?>
    <?php while ($showInspi = $showInspis->fetch()) : ?>
    <tr>
        <td class="text-align"><?= $showInspi['id'] ?></td>
        <td><?= $showInspi['desc'] ?></td>
        <td><?= $showInspi['alt'] ?></td>
        <td><a href="indexBack.php?action=createInspi"><i class="icon-panel fas fa-plus"></i></a></td>
        <td><a href="indexBack.php?action=deleteInspi&id=<?= $showInspi['id'] ?>"><i class="icon-panel fas fa-window-close"></i></a></td>       
    </tr>
    <?php endwhile ?>
        
</table>

</main>

<?php
    include_once "app/views/back/layouts/head.php";
?>