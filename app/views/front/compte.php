<?php
    include_once "app/views/front/layouts/head.php";
    include_once "app/views/front/layouts/header.php";
?>
<main class="container">

    <p><?= $_SESSION['id'] ?></p>
    <p><?= $compte['email'] ?></p>


</main>
<?php
include_once 'app/views/front/layouts/footer.php'
?>