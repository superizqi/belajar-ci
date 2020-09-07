<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <?php if (isset($_SESSION['username'])){
        echo "Halo ".$_SESSION['username'];
      }else{
        echo "Kamu Belum Login";
        }
      ?>
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          <?php echo session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>

      <!-- <div class="alert alert-success" role="alert">
          sdsds
      </div> -->

<div class="wrapper">
    <form class="form-signin" action="/UsersController/login">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="" autofocus="" />
      <br>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
      <br>
      <a href="/UsersController/logout" class="btn btn-lg btn-primary btn-block" type="submit">Logout</a>   
</div>

    </div>
  </div>
</div>

<?php echo $this->endSection(); ?>