<?php require 'inc/head.php'; ?>
<?php

if (!isset($_SESSION ['username'])){
    header('location: login.php');
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        if(isset($_COOKIE['cake36'])){
            echo 'You have' . ' ' . $_COOKIE['cake36'] .' '. 'Chocolate chips.';
        }
        echo "<br>";
        if(isset($_COOKIE['cake32'])){
            echo 'You have' . ' ' . $_COOKIE['cake32'] .' '. 'MMs cookies.';
        }
        echo "<br>";
        if(isset($_COOKIE['cake46'])){
            echo 'You have' . ' ' . $_COOKIE['cake46'] .' '. 'Pecan nuts.';
        }
        echo "<br>";
        if(isset($_COOKIE['cake58'])){
            echo 'You have' . ' ' . $_COOKIE['cake58'] .' '. 'Full chocolate cookie.';
        }
        echo "<br>";
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
