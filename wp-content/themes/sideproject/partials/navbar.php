<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container align-items-center">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="<?php echo home_url() ?>">
			<img src="<?php echo home_url() ?>/wp-content/uploads/2019/09/cropped-Logo-Putih-berlubang-1.svg">
		</a>
		<button class="navbar-toggler" type="button" style="opacity: 0;">
		<span class="navbar-toggler-icon"></span>
		</button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link d-flex flex-column <?php echo $_SERVER['REQUEST_URI'] == '/' ? 'active' : '' ?>" href="<?php echo home_url() ?>">Home <i class="fas fa-circle mx-auto"></i> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex flex-column <?php echo is_int(strpos($_SERVER['REQUEST_URI'], '/about')) ? 'active' : '' ?> " href="<?php echo home_url() ?>/about/">About <i class="fas fa-circle mx-auto"></i> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex flex-column <?php echo is_int(strpos($_SERVER['REQUEST_URI'], '/services')) ? 'active' : '' ?> " href="<?php echo home_url() ?>/services/">Services <i class="fas fa-circle mx-auto"></i> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex flex-column <?php echo is_int(strpos($_SERVER['REQUEST_URI'], '/blog')) ? 'active' : '' ?> " href="<?php echo home_url() ?>/blog/">Blog <i class="fas fa-circle mx-auto"></i> </a>
        </li>
      </ul>
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " href="#"><i class="fab fa-twitter"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#"><i class="fab fa-facebook"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>