<?php
    include_once "app/views/front/layouts/head.php";
    include_once "app/views/front/layouts/header.php";

?>
<main class="container">

<?= 
$_SESSION['email'];
?>
<?php while($info = $infos) : ?>
    <?= var_dump($info['name']) ?>
    <?= $info['name'] ?>

<?php endwhile ?>
</main>
<?php
include_once 'app/views/front/layouts/footer.php'
?>