<div class="container-fluid wrappers">
  <div class="row no-gutters h-100">
      <div class="col-md-6">
          <div class="wrapper wrapper_left">
              <h5>Welcome Back.</h5>
              <h3>Sign In To Your <span class="text_colored">lOGUP</span> Account</h3>
          </div>
      </div>
      <div class="col-md-6">
          <div class="wrapper wrapper_right">
              <div class="form_wrapper">
                  <h3 class="mb-4"><span class="text_colored">Sign</span> In</h3>
                  <a class="login_with_fb" href=""><i class="fa fa-facebook"></i>Sign In With Facebook</a>
                  <?php
                    $att=array(
                      'id'  =>  'myform'
                    );
                    echo form_open('url',$att);
                  ?>
                  <!-- <form action=""> -->
                      <input type="text" name="username" placeholder="Username or Email" required>
                      <div class="password_sh">
                          <input type="password" name="password" class="password_field m-0" placeholder="Password" required>
                          <label class="passwordSH_toggle fa fa-eye"></i></label>
                      </div>
                      <a href="forgot-password.html" class="text_colored">Forgot Password?</a>
                      <input type="checkbox" id="check">
                      <label for="check">Remember Me For Next Login</label>
                      <button type="submit" class="form_submit">Let me in <i class="fa fa-long-arrow-right"></i></button>
                      <p>Don't Have An Account? <a href="signup.html" class="text_colored">Sign Up</a></p>
                  <!-- </form> -->
                  <?php echo form_close(); ?>
              </div>
          </div>
      </div>
  </div>
</div>
