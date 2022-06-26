<main>
      <!-- <div class="slider">
        <div class="img-container">
          <img src="theme/img/gshock.png" alt="g-shock" />
          <div class="hero-caption">
            <a class="check-it text-reset">CHECK IT OUT</a>
          </div>
        </div>
      </div> -->

      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              class="d-block w-100"
              src="./public/theme/img/gshock.png"
              alt="First slide"
            />
            <div id="hero-caption-one">
              <a class="check-it text-reset" href="single-product-page.php?stranica=16">CHECK IT OUT</a>
            </div>
          </div>
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="./public/theme/img/gshock2.png"
              alt="Second slide"
            />
            <div id="hero-caption-two">
              <a class="check-it text-reset" href="single-product-page.php?stranica=14">CHECK IT OUT</a>
            </div>
          </div>
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="./public/theme/img/gshock3.png"
              alt="Third slide"
            />
            <div id="hero-caption-three">
              <a class="check-it text-reset" href="single-product-page.php?stranica=22">CHECK IT OUT</a>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev justify-content-start"
          href="#carouselExampleIndicators"
          role="button"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only"></span>
        </a>
        <a
          class="carousel-control-next justify-content-end"
          href="#carouselExampleIndicators"
          role="button"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only"></span>
        </a>
      </div>

      <!-- most selling products -->
      <section class="most-selling">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <h2 class="mb-4">Most Selling</h2>
            </div>
          </div>

          <div class="row">
          <?php foreach ($threeRandom as $product) { ?>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
              <a href="./single-product-page.php?stranica=<?php echo htmlspecialchars($product['id']) ?>">
              <div class="card index-card">
                <img
                  src="<?php echo $product['img'] ?>"
                  class="card-img-top"
                  alt="..."
                />
                </a>
                <div class="card-body text-center">
                  <p class="card-text"><?php echo $product['title']; ?></p>
                  <p class="card-text"><?php echo $product['brand'] ?></p>
                  <a class="check-most-sells text-reset" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($product['id']) ?>">Check it out</a>
                </div>
              </div>
            </div>
            <?php } ?>

        </div>
        <div class="row">
          <div class="show-other-btn d-flex justify-content-center">
            <a href="shop-controler.php" class="see-other text-reset">SEE OTHER</a>
          </div>
        </div>
      </section>

      <!-- place for ad -->
      <div class="fathersday-ad">
        <div class="img-container">
          <img src="./public/theme/img/fathers-day.png" alt="g-shock" />
        </div>
      </div>

      <!-- most viewed products -->
      <section class="most-viewed">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <h2 class="mb-4">Most Viewed</h2>
            </div>
          </div>

          <div class="row">
          <?php foreach ($threeRandom as $product) { ?>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
              <a href="./single-product-page.php?stranica=<?php echo htmlspecialchars($product['id']) ?>">
              <div class="card index-card">
                <img
                  src="<?php echo $product['img'] ?>"
                  class="card-img-top"
                  alt="..."
                />
                </a>
                <div class="card-body text-center">
                  <p class="card-text"><?php echo $product['title']; ?></p>
                  <p class="card-text"><?php echo $product['brand'] ?></p>
                  <a class="check-most-sells text-reset" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($product['id']) ?>">Check it out</a>
                </div>
              </div>
            </div>
            <?php } ?>

          </div>
        </div>
        <div class="row">
          <div class="show-other-btn d-flex justify-content-center">
            <a href="shop-controler.php" class="see-other text-reset">SEE OTHER</a>
          </div>
        </div>
      </section>
    </main>