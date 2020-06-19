<?php
    include_once "app/Views/back/layouts/head.php";
    include_once "app/Views/back/layouts/header.php";
?>

<main class="container">

<section class="inspi-panel">

<table class="table">
    <tr>
        <th class="font-text">ID</th>
        <th class="font-text">Description</th>
        <th class="font-text">Alt associé</th>
        <th class="font-text">Supprimer</th>
    </tr>


    
    <?php while($showInspi = $showInspis->fetch()) : ?>
    <tr>
        <td class="text-align"><?= $showInspi['id'] ?></td>
        <td><?= $showInspi['description'] ?></td>
        <td><?= $showInspi['alt'] ?></td>
        <td><a href="indexBack.php?action=deleteInspi&id=<?= $showInspi['id'] ?>"><i class="icon-panel fas fa-window-close"></i></a></td>   
    </tr>
    <?php endwhile ?>    

        
</table>
<div><a href="indexBack.php?action=inspiCreate"><i class="fas fa-plus-circle"></i></a></div>
</section>

</main>

<?php
    include_once "app/Views/back/layouts/head.php";
?>