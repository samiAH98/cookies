<?php session_start(); ?>
<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php

        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
        } else {
            $cart = array();
        }


        foreach ($cart as $cookie_id){
            $cookie = $catalog[$cookie_id];
            echo $cookie['name'] . '<br>';
            echo $cookie['description'] . '<br>';
            echo  '<br>';
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
