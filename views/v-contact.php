<div class="bg-image" style="background-image: url('./public/theme/img/wallpapers/wallpaper.jpg'); background-repeat: no-repeat; background-attachment: fixed; "> 
  <main>
    <div class="container">
      <div class="row">     
        <div class="mt-5">
          <form class="mb-5" action="contact.php" method="GET">
            <div class="row">
              <div class="col-md-12 form-group mb-3">
                <label for="" class="col-form-label">Name *</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
              </div>
            </div>
            <div class="row">       
              <div class="col-md-12 form-group mb-3">
                <label for="" class="col-form-label">Email *</label>
                <input type="text" class="form-control" name="email" id="email"  placeholder="Your email">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group mb-3">
                <label for="message" class="col-form-label">Message *</label>
                <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Write your message"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <input type="submit" name="submit" value="Send Message" class="btn btn-primary rounded-5 py-2 px-4">
                <span class="submitting"></span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>     
  </main>
</div>