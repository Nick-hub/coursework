<?php include '../header.php'?>
  <?php if (isset($_SESSION['errMsg'])): ?>
  <h3 class="alert alert-danger">
<?php echo $_SESSION['errMsg'];
      unset($_SESSION['errMsg']) ?>
  </h3>
  <?php endif; ?>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card bg-black text-white border">
          <div class="card-body">
            <h3 class="text-center mb-4">Login</h3>
            <form method="post" action="/login/login.php">
              <div class="form-group mb-3">
                <label for="phone">Phone Number</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">+7</span>
                  </div>
                <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter phone number" required>
                </div>
              </div>
              <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
              </div>
              <div class="form-group mb-3">

        <label for="captcha">Enter the CAPTCHA code:</label>
        <input
          type="text"
          class="form-control"
          placeholder="Enter captcha"
          id="captcha"
          name="captcha"
        />
      </div>
      <div class="d-flex justify-content-around align-items-center">

<img src="/captcha.php" alt="CAPTCHA" draggable="false" />
</div>
<div class="d-flex justify-content-center mt-2 align-items-center">
              <button type="submit" class="btn btn-primary btn-danger mb-4">Login</button>
              </div>
            </form>
            <div class="text-center">
              <p>Don't have an account? <a href="/registration">Register</a></p>
            </div>
            
          </div>
        </div>
      </div>
    </div>

  </div>


<?php include '../footer.php'?>
