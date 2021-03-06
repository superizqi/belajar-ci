<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title><?php echo $title; ?></title>
  </head>
  <body>

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
    	<a class="nav-item nav-link" href="<?= base_url('pages/about'); ?>">About</a>
    	<a class="nav-item nav-link" href="<?= base_url('pages/contact'); ?>">Contact</a>
    </div>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  </div>
</nav>