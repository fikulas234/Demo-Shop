<main class="d-flex justify-content-around checkout-form">
<div class="m-5">
<form class="mb-5 mt-5" action="./thank-you-page.php" method="get">
  <div class="form-group mb-2">
    <label for="name">Name</label>
    <input name="f_name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">
    <?php if (!empty($systemErrors['f_name'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['f_name']); ?></small>
                        <?php } ?>
  </div>
  <div class="form-group mb-2">
    <label for="l_name">Last Name</label>
    <input name="l_name" type="text" class="form-control" id="l_name" placeholder="Enter last name">
    <?php if (!empty($systemErrors['l_name'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['l_name']); ?></small>
                        <?php } ?>
  </div>
  <div class="form-group mb-2">
    <label for="email">Email</label>
    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <?php if (!empty($systemErrors['email'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['email']); ?></small>
                        <?php } ?>
  </div>
  <div class="form-group mb-2 d-flex justify-content-between">
    <div class="col-6">
    <label for="city">City</label>
    <input name="city" type="text" class="form-control" id="city" aria-describedby="emailHelp" placeholder="Enter your city">
    <?php if (!empty($systemErrors['city'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['city']); ?></small>
                        <?php } ?>
    </div>
    <div class="col-6">
    <label for="phone">Phone</label>
    <input name="phone" type="text" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter your phone number">
    <?php if (!empty($systemErrors['phone'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['phone']); ?></small>
                        <?php } ?>
    </div>
  </div>
  <div class="form-group mb-2 d-flex">
    <div class="col-6">
    <label for="address">Address</label>
    <input name="address" type="text" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter your street">
    <?php if (!empty($systemErrors['street_and_num'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['street_and_num']); ?></small>
                        <?php } ?>
    </div>
    <div class="col-6">
    <label for="zip">Zip</label>
    <input name="zip" type="text" class="form-control" id="zip" aria-describedby="emailHelp" placeholder="Enter Zip">
    <?php if (!empty($systemErrors['zip'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['zip']); ?></small>
                        <?php } ?>
    
    </div>
  </div>
  <div class="form-check mb-2">
    <input name="terms" type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Agree with our Terms and Privacy </label>
    <?php if (!empty($systemErrors['terms'])) { ?>
                            <br><small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['terms']); ?></small>
                        <?php } ?>
  </div>
  <button type="submit" class="btn btn-order" name="buy" value="yes">Proceed to payment</button>
</form>
</div>
<div class="col-6 mt-5">
    <div class="card mx-auto mb-3 mt-5" style="max-width: 340px;">
        <div class="row g-0">
            <div class="text-center">
                <img src="<?php echo htmlspecialchars($img); ?>" class="img-fluid rounded-start" width="150px" height="200px"/>
            </div>
            <div class=" bg-warning text-light">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($title); ?></h5>
                    <p class="card-text">Price: <?php echo htmlspecialchars($price); ?></p>
                    <p class="card-text">Quantity: <?php echo htmlspecialchars($quantity); ?></p>
                    <p class="card-text">Total: <?php echo htmlspecialchars($total); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>


</main>