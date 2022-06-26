<?php


/* 	if (isset($_GET['submit1'])) {
		$email = $_GET['email'];
		$password = $_GET['password'];

		$object = new Users();
		$object->Login($email, $password);
	}

    if (isset($_GET['submit2'])) {
        $name = $_GET['username'];
        $email = $_GET['email'];
        $password = $_GET['password'];

        $object = new Users();
        $object->setUsers($name, $email, $password);
    }
 */
	?>



    <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<form action="register-controler.php" method="get">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" type="email" class="input" name="email">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password">
				</div>
				<div class="group text-center">
					<input type="submit" class="button" value="Sign In" name="submit1"></input>
					<?php if (!empty($logMessages['loggedOut'])) { ?>
                            <small class="form-text text-danger"><?php echo htmlspecialchars($logMessages['loggedOut']); ?></small>
                        <?php }?>
				</div>
			</form>
			</div>
			<div class="sign-up-htm">
				<form action="register-controler.php" method="get">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" name="username">
				</div>
                <div class="group">
                    <label for="pass" class="label">Email Address</label>
                    <input id="pass" type="text" class="input" name="email">
                </div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up" name="submit2"></input>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>









<!-- <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
			</div>
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
			</div>
		</div>
	</div>
</div> -->