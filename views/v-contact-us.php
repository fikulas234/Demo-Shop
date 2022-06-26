<body>
    <main>
    <form class="" action="contact-us-controler.php" method="GET">
      <div class="form-container">
      <?php if (!empty($successMessages)) { ?>
                            <small class="form-text text-succes"><?php echo htmlspecialchars($successMessages['success'] ); ?></small>
                        <?php }?>
        <h1>Contact us</h1>
        <form action="">
          <label for="fname">Full Name</label>
          <input
            type="text"
            id="fname"
            name="name"
            placeholder="Your full name"
          />

          <label for="email">Email</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Your email"
          />

          <label for="subject">Subject</label>
          <textarea
            id="subject"
            name="message"
            placeholder="Text us"
            style="height: 200px"
          ></textarea>

          <input type="submit" name="submit" value="Submit" />
        </form>
      </div>
    </main>
    </form>
  </body>