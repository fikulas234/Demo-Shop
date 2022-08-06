<main class="d-flex justify-content-around checkout-form">
<div class="m-5">
<form class="mb-5 mt-5"  method="get">
  <div class="form-group mb-2">
    <label for="f_name">Name</label>
    <input name="f_name" value="<?php if(isset($_GET['f_name'])) { echo htmlspecialchars ($_GET['f_name']); }?>" type="text" class="form-control" id="f_name" aria-describedby="emailHelp" placeholder="Enter name">
    <?php if (isset($systemErrors['f_name'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['f_name']); ?></small>
                        <?php } ?>
  </div>
  <div class="form-group mb-2">
    <label for="l_name">Last Name</label>
    <input name="l_name" value="<?php if(isset($_GET['l_name'])) { echo htmlspecialchars ($_GET['l_name']); }?>" type="text" class="form-control" id="l_name" placeholder="Enter last name">
    <?php if (isset($systemErrors['l_name'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['l_name']); ?></small>
                        <?php } ?>
  </div>
  <div class="form-group mb-2">
    <label for="email">Email</label>
    <input name="email" value="<?php if(isset($_GET['email'])) { echo htmlspecialchars ($_GET['email']); }?>" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <?php if (isset($systemErrors['email'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['email']); ?></small>
                        <?php } ?>
  </div>
  <div class="form-group mb-2 d-flex justify-content-between">
    <div class="col-6">
    <label for="city">City</label>
    <input name="city" value="<?php if(isset($_GET['city'])) { echo htmlspecialchars ($_GET['city']); }?>" type="text" class="form-control" id="city" aria-describedby="emailHelp" placeholder="Enter your city">
    <?php if (isset($systemErrors['city'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['city']); ?></small>
                        <?php } ?>
    </div>
    <div class="col-6">
    <label for="phone">Phone</label>
    <input name="phone" value="<?php if(isset($_GET['phone'])) { echo htmlspecialchars ($_GET['phone']); }?>" type="text" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter your phone number">
    <?php if (isset($systemErrors['phone'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['phone']); ?></small>
                        <?php } ?>
    </div>
  </div>
  <div class="form-group mb-2 d-flex">
    <div class="col-6">
    <label for="address">Address</label>
    <input name="address" value="<?php if(isset($_GET['address'])) { echo htmlspecialchars ($_GET['address']); }?>" type="text" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter your street">
    <?php if (isset($systemErrors['address'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['address']); ?></small>
                        <?php } ?>
    </div>
    <div class="col-6">
    <label for="zip">Zip</label>
    <input name="zip" value="<?php if(isset($_GET['zip'])) { echo htmlspecialchars ($_GET['zip']); }?>" type="text" class="form-control" id="zip" aria-describedby="emailHelp" placeholder="Enter Zip">
    <?php if (isset($systemErrors['zip'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['zip']); ?></small>
                        <?php } ?>
    
    </div>
  </div>
  <div class="form-check mb-2">
    <input name="terms" type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Agree with our Terms and Privacy </label>
    <?php if (isset($systemErrors['terms'])) { ?>
                            <br><small class="form-text text-danger"><?php echo htmlspecialchars($systemErrors['terms']); ?></small>
                        <?php } ?>
  </div>
  <button type="submit" class="btn btn-order" name="submit" value="submit">Proceed to payment</button>
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
                </div>
            </div>
        </div>
    </div>
</div>



</main>