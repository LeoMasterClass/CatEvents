<?php 
    include_once "app/views/back/layouts/head.php";
    include_once "app/views/back/layouts/header.php";
?>


<main class="container">

    <section class="article-panel">
    
    <table>
    <tr>
            <td class="titre-table">ID</td>
            <td class="titre-table">Nom</td>
            <td class="titre-table">Email</td>
            <td class="titre-table">Objet</td>
            <td class="titre-table">Message</td>
            <td class="titre-table">Date de réception</td>
            <td class="titre-table">Supprimer</td>
        </tr>
    
        <?php while($showContact = $showContacts->fetch()) : ?>
        <tr>
            <td class="text-align"><?= $showContact['id'] ?></td>
            <td><?= $showContact['name'] ?></td>
            <td><?= $showContact['email'] ?></td>
            <td><?= $showContact['objet'] ?></td>
            <td><?= $showContact['content'] ?></td>
            <td><?= date('d-m-Y', strtotime($showContact['created_at'])) ?></td>
            <td><a href="<?= $showContact['id'] ?>"><i class="icon-panel fas fa-window-close"></i></a></td>       
        </tr>
        <?php endwhile ?>
        
    </table>
    </section>

</main>


<?php
    include_once "app/views/back/layouts/head.php";
?>