<?php $utils->getCSS('admin/login.css'); ?>
<div class="row justify-content-center">
  <div class="col-md-5">
    <div class="loginform">
      <div class="loginheader">
        <h2 class="text-center m-0">LOGIN</h2>
      </div>
      <div class="loginimg">
        <img class="rounded-circle img-fluid" id="profileImg" src="https://minotar.net/helm/steve/150">
      </div>
      <div class="loginbody">
        <form method="POST">
          <div class="form-group">
            <label class="bmd-label-floating">Username</label>
            <input type="text" name="username" class="form-control">
            <small class="bmd-help">This is your username, NOT your email</small>
          </div>
          <div class="form-group">
            <label class="bmd-label-floating">Password</label>
            <input type="password" name="password" class="form-control">
          </div>
          <button type="submit" name="login" class="btn btn-info btn-raised ml-auto d-block">Log In</button>
        </form>        
      </div>
    </div>
  </div>
</div>
<?php $utils->getJS('admin/login.js'); ?>
