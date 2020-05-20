<?php 
    include_once "app/views/back/layouts/head.php";
    include_once "app/views/back/layouts/header.php";
?>


<main class="container">

    <section class="article-panel">
    
    <table>
    <tr>
            <td class="titre-table">ID</td>
            <td class="titre-table">Titre</td>
            <td class="titre-table">Description</td>
            <td class="titre-table">Date de création</td>
            <td class="titre-table">Modifier</td>
            <td class="titre-table">Supprimer</td>
        </tr>
    
        <?php while($showTable = $showTables->fetch()) : ?>
        <tr>
            <td class="text-align"><?= $showTable['id'] ?></td>
            <td><a href="index.php?action=article&id=<?= $showTable['id'] ?>"><?= $showTable['title'] ?></a></td>
            <td><?= $showTable['extract'] ?></td>
            <td><?= date('d-m-Y', strtotime($showTable['created_at'])) ?></td>
            <td><a href=""><i class="icon-panel fas fa-edit"></i></a></td>
            <td><a href="<?= $showTable['id'] ?>"><i class="icon-panel fas fa-window-close"></i></a></td>       
        </tr>
        <?php endwhile ?>
        
    </table>
    <div><a href="indexBack.php?action=articlesCreate"><i style='color:black;' class="fas fa-plus-circle"></i></a></div>

    </section>

</main>


<?php
    include_once "app/views/back/layouts/head.php";
?>