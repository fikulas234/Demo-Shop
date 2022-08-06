<main>
    <div class="container single-pr-container">
        <div class="row justify-content-center single-pr">
            <div class="col-4 mb-4">
                <img src="<?php echo htmlspecialchars($product->img); ?>" class="card-img-top" alt="...">
            </div>
            <div class="col-4">
                <h1 class="card-title mb-4"><?php echo htmlspecialchars($product->title); ?></h1>
                <p><?php echo htmlspecialchars($product->brand); ?></p>
                <p><?php echo htmlspecialchars($product->description); ?></p>
                <p id="watch-price"><?php echo htmlspecialchars($product->price); ?>$</p>
            </div>
            <div class="navigation-container col-8 text-center">
                <div class="btn-nav-container col-12  d-flex justify-content-between">
                    <a class="btn btn-nav" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($product->getPrevProductId()); ?>">PREV</a>
                    <a class="btn btn-nav" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($product->getNextProductId()); ?>">NEXT</a>
                </div>
                <form method="post" id="productQty">
                    <label for="quantity" class="form-label">Quantity: </label>
                    <input name="quantity" type="number" class="form-control" id="quantity" placeholder="Quantity" step="1" value="1" min="1" required />
                    <input hidden name="product_id" value="<?php echo htmlspecialchars($product->id); ?>">
                    <button type="submit" class="btn btn-single-add col-6 mt-2">ADD TO CART</button>
                </form>
                <form class="col-12" action="checkout-page-controler-single.php" id="productQty" method="get">
                    <div class="mb-3 quantity-container">
                        <input hidden name="quantity" type="number" class="form-control" id="quantity" placeholder="Quantity" step="1" value="1" min="1" required />
                        <input type="hidden" name="id" value=<?php echo htmlspecialchars($productId); ?> />
                        <button type="submit" class="btn btn-single-buy col-6 mt-2">BUY NOW</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="related-products">
        <h3 class="text-center mb-5">Related products</h3>
        </div>
        <div class="row text-center d-flex justify-content-start related-container container">
            <?php 
            foreach ($relatedProducts as $singleRelated) { ?>
            <article class="single-product col-6 row mb-5">
                <div class='col-xl-6'>
                    <img src="<?php echo htmlspecialchars($singleRelated->img); ?>" alt="" width="180" height="120">
                </div>
                <div class='col-xl-4 row btn-related-container'>
                    <span><?php echo htmlspecialchars($singleRelated->title); ?></span>
                    <a class="btn-show-related text-reset" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($singleRelated->id); ?>">Show Product</a>
                </div>
            </article>
            <?php } ?>
        </div>
    </div>
</main>