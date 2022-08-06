<?php


namespace Models\Product;

use Models\Model\Model;

class Product extends Model
{
    const ORDER_BY_PRICE_ASC = 'price-asc';
    const ORDER_BY_PRICE_DESC = 'price-desc';
    
    public $id;
    public $title;
    public $description;
    public $img;
    public $price;
    public $category;
    public $brand;
    public $status;
    public $new;

    public function __construct($product)
    {
        $this->id = $product['id'];
        $this->title = $product['title'];
        $this->description = $product['description'];
        $this->img = $product['img'];
        $this->price = $product['price'];
        $this->category = $product['category'];
        $this->brand = $product['brand'];
        $this->status = $product['status'];
        $this->new = $product['new'];
    }
    
    public static function getAllProducts()
    {
        parent::connection('products_tb');
        $allProducts = [];
        if (self::$db_status) {
            foreach (parent::fetchAll() as $product) {
                $allProducts[] = new Product($product);
            }
        }
        return $allProducts;
    }
    
    public static function getAvailableProducts($page = null)
    {
        $availabaleProducts = [];
        foreach (self::getAllProducts() as $product) {
            if ($product->status == true) {
                $availabaleProducts[] = $product;
            }
        }
        return $availabaleProducts;
    }
//iz soritanog niza uzima product po id    
    public static function getOneProductById($id)
    {
        $products = self::getAvailableProducts();
        foreach ($products as $product) {
            if ($product->id == $id) {
                return $product;
            }
        }
    }
//vraca sledeci product u odnosu na prosledjeni id iz niza
    public function getPrevProductId()
    {
        $products = self::getAvailableProducts();
        foreach ($products as $key => $product) {
            if ($product->id == $this->id) {
                if ($key == 0) {
                    return $products[count($products) - 1]->id;
                } else {
                    return $products[$key - 1]->id;
                }
            }
        }
    }

    public function getNextProductId()
    {
        $products = self::getAvailableProducts();
        foreach ($products as $key => $product) {
            if ($product->id == $this->id) {
                if ($key == (count($products) - 1)) {
                    return $products[0]->id;
                } else {
                    return $products[$key + 1]->id;
                }
            }
        }
    } 

    public static function filteredProducts($term, $products = [])
    {
        $filteredProducts = [];
        $products = !empty($products) ? $products : self::getAvailableProducts();
        foreach ($products as $product) {
            if (str_contains(strtolower($product->title), strtolower($term)) ) {
                $filteredProducts[] = $product;
            }
        }
        return $filteredProducts;
    }

    public static function sortProductBy($sortBy, $products = [])
    {
        $products = !empty($products) ? $products : self::getAvailableProducts();
        switch ($sortBy) {
            case self::ORDER_BY_PRICE_ASC:
                usort($products, function ($item1, $item2) {
                    return $item1->price > $item2->price;
                });
                break;
            case self::ORDER_BY_PRICE_DESC:
                usort($products, function ($item1, $item2) {
                    return $item1->price < $item2->price;
                });
                break;
            default:
                break;
        }
        return $products;
    }

    public static function getThreeRandomProducts()
    {
        $randProd = [];
        foreach (self::getAvailableProducts() as $product) {
            if (count($randProd) >= 3) {
                break;
            }
            $randProd[] = $product;
        }
        shuffle($randProd);
        return $randProd;
    }



    public function getRelatedProducts()
    {
        $related = [];
        $products = self::getAvailableProducts();
        foreach ($products as  $product) {
            if ($product->category == $this->category && $this->id != $product->id) {
                $related[] = $product;
                if (count($related) >= 4) {
                    break;
                }
            }
        }
        return $related;
    }


    public static function getNewProducts() {
        $allProducts = self::getAvailableProducts();
        $newProducts = [];
        foreach ($allProducts as $product) {
            if($product->new == true) {
                $newProducts[] = $product;
            } else {
                continue;
            }
        }
        return $newProducts;
    }

}


























 /* function getAvailableProducts() {
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

 */