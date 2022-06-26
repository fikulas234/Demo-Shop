<?php

const ORDER_BY_PRICE_ASC='price-asc';
const ORDER_BY_PRICE_DSC='price-desc';

function getAllProducts($sort = "") {
    return $products = [
        [
            'id' => 1,
            'title' => 'GA-B2100',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-1.png',
            'price' => 49.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => false
        ],
        [
            'id' => 2,
            'title' => 'GMA-S2200',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-2.png',
            'price' => 59.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => false
        ],
        [
            'id' => 3,
            'title' => 'MTG-B3000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-3.png',
            'price' => 119.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => false
        ],
        [
            'id' => 9,
            'title' => 'MRG-B5000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-4.png',
            'price' => 69.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => false
        ],
        [
            'id' => 11,
            'title' => 'GWG-2000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-5.png',
            'price' => 69.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => false
        ],
        [
            'id' => 5,
            'title' => 'GM-5600',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-6.png',
            'price' => 49.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => false
        ],
        [
            'id' => 6,
            'title' => '
            GBD-200',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-7.png',
            'price' => 99.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => false
        ],
        [
            'id' => 7,
            'title' => 'AWG-M520',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-8.png',
            'price' => 89.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => false
        ],
        [
            'id' => 8,
            'title' => 'GA-900',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-9.png',
            'price' => 89.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => false
        ],
        [
            'id' => 13,
            'title' => 'GBD-H1000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-10.png',
            'price' => 129.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => false
        ],
        [
            'id' => 18,
            'title' => 'GM-6900',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-11.png',
            'price' => 139.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => false
        ],
        [
            'id' => 19,
            'title' => 'GBD-100',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-12.png',
            'price' => 79.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => false
        ],
        [
            'id' => 20,
            'title' => 'GG-B100',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-13.png',
            'price' => 79.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => false
        ],
        [
            'id' => 21,
            'title' => 'GA-140',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-14.png',
            'price' => 89.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => false
        ],
        [
            'id' => 14,
            'title' => 'MRG-B5000BA-1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-protection.png',
            'price' => 99.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => false
        ],
        [
            'id' => 16,
            'title' => 'GST-B400-1A',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-steel.png',
            'price' => 99.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => false
        ],
        [
            'id' => 22,
            'title' => 'GAB2100-1A',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-solar.png',
            'price' => 119.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => false
        ],
        [
            'id' => 23,
            'title' => 'GA-110BWP-2A',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-15.png',
            'price' => 119.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => true
        ],
        [
            'id' => 24,
            'title' => 'GA-2100BWP-2A',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-16.png',
            'price' => 89.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => true
        ],
        [
            'id' => 25,
            'title' => 'GA-2200NN-1A',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-17.png',
            'price' => 99.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => true
        ],
        [
            'id' => 26,
            'title' => 'DW-5600GU-7',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ipsa sint deserunt amet libero explicabo impedit incidunt, at enim itaque?',
            'img' => 'public/theme/img/g-shock-watch-18.png',
            'price' => 79.99,
            'category' => 'sport',
            'brand' => 'G-SHOCK',
            'available' => true,
            'new' => true
        ],
    ];
}




 function getAvailableProducts() {
    $allProducts = getAllProducts();
    $availableProducts = [];
    foreach ($allProducts as $product) {
        if($product['available'] == true) {
            $availableProducts[] = $product;
        }
    }
    return $availableProducts;
}

function getNewProducts() {
    $allProducts = getAllProducts();
    $newProducts = [];
    foreach ($allProducts as $product) {
        if($product['new'] == true) {
            $newProducts[] = $product;
        } else {
            continue;
        }
    }
    return $newProducts;
}


function getRelatedProducs($mainProduct) {
    $related = [];
    $products = getAvailableProducts();
    foreach ($products as  $product) {
        if($product['category'] == $mainProduct['category'] && $mainProduct['id'] != $product['id']) {
            $related[] = $product;
            if(count($related) >= 4) {
                break;
            }
        }
    }
    return $related;
}

//iz soritanog niza uzima product po id
function getOneProductById($id) {
    $products = getAvailableProducts();
    foreach ($products as $product) {
        if($product['id'] == $id) {
            return $product;
        }
    }
} 


function sortByAscending ($arr) {
    $arr = getAvailableProducts();
    array_multisort(array_column($arr, 'price'), SORT_ASC, $arr);
    return $arr;
}

function sortByDescending ($arr) {
    $arr = getAvailableProducts();
    array_multisort(array_column($arr, 'price'), SORT_DESC, $arr);
    return $arr;
}

function sortByAscendingNew ($arr) {
    $arr = getNewProducts();
    array_multisort(array_column($arr, 'price'), SORT_ASC, $arr);
    return $arr;
}

function sortByDescendingNew ($arr) {
    $arr = getNewProducts();
    array_multisort(array_column($arr, 'price'), SORT_DESC, $arr);
    return $arr;
}


function filteredProducts($products, $term) {
    $filteredProducts = [];
    foreach ($products as $product) {
        if(str_contains(strtolower($product['title']), strtolower($term)) || (str_contains(strtolower($product['brand']), strtolower($term)))) {
            $filteredProducts[] = $product;
        }
    }

    return $filteredProducts;
}

//vraca sledeci product u odnosu na prosledjeni id iz niza
// hint - uci u niz pa [index] - 1
// ako je poslednji proizvod treba na klik da vraca prvi i obrnuto
function getNextProduct($currentProductId) {
    $products = getAvailableProducts();
    $numberOfProducts = count($products);
    foreach($products as $key => $product) {
        if($product['id'] == $currentProductId) {
            if($key == $numberOfProducts-1) {
                return $products[0];
            } else {
                return $products[$key + 1];
            }
        }
    }
    
}

//kao prethodna funkcija - [index] + 1
function getPrevProduct($currentProductId) {
    $products = getAvailableProducts();
    $numberOfProducts = count($products);
    foreach($products as $key => $product) {
        if($product['id'] == $currentProductId) {
            if($key == 0) {
                return $products[$numberOfProducts-1];
            } else {
                return $products[$key - 1];
            }
        }
    }
}


function getThreeRandomProducts() {
    $randProd = [];
    $products = getAvailableProducts();
    shuffle($products);
    foreach ($products as $product) {
        if (count($randProd) >= 3) {
            break;
        }
        $randProd[] = $product;
    }
    shuffle($randProd);
    return $randProd;
}

