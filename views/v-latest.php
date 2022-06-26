<div class="card-container container">
    
<!-- <div class="input-group mb-3 search-bar justify-content-center container">
    <input type="text" class="form-control m-0" aria-label="Default" aria-describedby="inputGroup-sizing-default">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</div> -->

<div class="fullScreen">
        <div class="inputBox">
            <form action="shop-controler.php" method="get">
            <input name="filter" type="text" value="<?php echo htmlspecialchars($filter); ?>" placeholder="Search here...">
            <button type="submit">
              Search
            </button>
            </form>
        </div>
        <div class="closeBtn">
          <a>X</a>
        </div>
</div>

<form class="form-inline my-2 my-lg-0 col-lg-2 d-flex">
        <div class="select col-lg-6">
          <select class="form-select" aria-label="Default select example" name = "new" onchange="this.form.submit()">
            <option value="" >Sort by:</option>
            <option value="price-asc" name = "">Ascending order</option>
            <option value="price-desc" name = "">Descending order</option>
          </select>
        </div>
</form>
    <div class="card-wrapper row justify-content-start ">
        <?php foreach ($new as $key => $single) { ?>
            <div class="card single-card col-xl-2 col-lg-3 col-md-6 col-sm-6 mb-3">
                <div class="m-2">
                    <div class="img-container-card text-center d-flex align-items-end">
                        <img src="<?php echo $single['img'] ?>" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body text-center align-items-center row justify-content-center">
                        <h5 class="card-title"><?php echo $single['title']; ?><br>(NEW)</h5>
                        <p class="card-text"><?php echo $single['price']; ?>$</p>
                        <a class="btn btn-buy" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($single['id']) ?>">BUY NOW</a>
                        <button form="add-to-cart-<?php echo htmlspecialchars($single['id']); ?>" class="btn btn-cart" >ADD TO CART</a>
                        <form id="add-to-cart-<?php echo htmlspecialchars($single['id']); ?>" action="./latest-controler.php" method="post">
                            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($single['id']); ?>">
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
