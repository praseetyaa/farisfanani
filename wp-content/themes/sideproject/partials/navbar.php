<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container align-items-center">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="<?php echo home_url() ?>">
			<img src="https://akuntansionline.net/wp-content/uploads/2019/10/LOGO-AKUNTANSI-ONLINE-100x47.png" alt="logo-akuntansi-online-net">
		</a>
		<button class="navbar-toggler" type="button" style="opacity: 0;">
		<span class="navbar-toggler-icon"></span>
		</button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo $_SERVER['REQUEST_URI'] == '/' ? 'active' : '' ?> " href="<?php echo home_url() ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo is_int(strpos($_SERVER['REQUEST_URI'], '/fitur')) ? 'active' : '' ?> " href="<?php echo home_url() ?>/fitur/">Fitur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo is_int(strpos($_SERVER['REQUEST_URI'], '/harga')) ? 'active' : '' ?> " href="<?php echo home_url() ?>/harga/">Harga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo is_int(strpos($_SERVER['REQUEST_URI'], '/kontak')) ? 'active' : '' ?> " href="<?php echo home_url() ?>/kontak/">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo is_int(strpos($_SERVER['REQUEST_URI'], '/blog')) ? 'active' : '' ?> " href="<?php echo home_url() ?>/blog/">Blog</a>
        </li>
      </ul>
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo is_int(strpos($_SERVER['REQUEST_URI'], '/category/acara')) ? 'active' : '' ?> " href="https://member.akuntansionline.net/index.php?r=user/login" style="color: var(--primary);">Login</a>
        </li>
        <li class="nav-item">
          <a class="ms-lg-2 text-uppercase fw-bold btn btn-primary px-3 <?php echo is_int(strpos($_SERVER['REQUEST_URI'], '/category/acara')) ? 'active' : '' ?> " href="https://member.akuntansionline.net/index.php?r=user/registration/step0"><i class="fa fa-gem"  style="animation: opacito 1s infinite ease;"></i> Coba Gratis</a>
        </li>
      </ul>
    </div>
  </div>
</nav>