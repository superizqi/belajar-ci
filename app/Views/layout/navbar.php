<nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<div class="container">
  <a class="navbar-brand" href="#">Rizqi Prima</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class='navbar-nav'>
    	<!-- <a class="nav-item nav-link" href="/">Home</a> -->
    	<a class="nav-item nav-link" href="<?= base_url('/'); ?>">Home</a>
      <a class="nav-item nav-link" href="<?= base_url('/login'); ?>">Login</a>
    	<a class="nav-item nav-link" href="<?= base_url('pages/about'); ?>">About</a>
    	<a class="nav-item nav-link" href="<?= base_url('pages/contact'); ?>">Contact</a>
      <a class="nav-item nav-link" href="<?= base_url('/komik'); ?>">Komik</a>
      <a class="nav-item nav-link" href="<?= base_url('/orang'); ?>">Orang</a>
    </div>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  </div>
</nav>