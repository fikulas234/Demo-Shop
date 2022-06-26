<?php

function getShoppingCart() {
    $cart = [];
    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        if(is_array($_SESSION['cart'])) {
            foreach (array_unique($_SESSION['cart']) as $productId) {
                $cart[] = getOneProductById($productId);
            }
        }
    }
    return $cart;
}



