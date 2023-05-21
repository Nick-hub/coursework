<?php include('header.php')?>

<div class="container-fluid bg-black my-3 py-4 text-white">
  <div class="container">
    <h1 class="display-4">Alfin Bank - For the smart and free</h1>
    <p class="lead">We are a trusted bank with over 100 years of experience.</p>
    <?php if (!isset($_SESSION['user_id'])): ?>
    <a class="btn btn-light" href="/registration" role="button">Sign up</a>
  </h3>
  <?php endif; ?>

     
    
  </div>
</div>

<?php include('footer.php')?>
