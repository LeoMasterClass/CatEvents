<?php
    include_once "app/views/front/layouts/head.php";
    include_once "app/views/front/layouts/header.php";
?>
<main class="container">

<?= 
$_SESSION['id'];
?>

<?php while($info = $compte->fetch()) : ?>
<?= var_dump($info); ?>
    <h1><?= $info['name'] ?></h1>
<?php endwhile ?>

</main>
<?php
include_once 'app/views/front/layouts/footer.php'
?>