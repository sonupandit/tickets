
   <footer class="footer-main">
     <div class="copyright">
      &copy; Copyright <?php echo date("Y");?>. All Rights Reserved. 
     </div>
   </footer>
</main>


<div id="search" class="popup search-pop" style="display: none;">
   <div class="search-wrap">
        <form action="#">
            <div class="form-group mb-0">
                <input type="text" class="form-control" placeholder="Search here..">
                <button class="btn btn-search"><span class="icon-search"></span></button>
            </div>
        </form>
   </div>
</div>

<div id="signin" class="popup signin-pop" style="display: none;max-width: 600px;">
   <a href="javascript:void(0)" class="back-form-btn" style="display:none;"><span class="icon-left"></span></a>
   <div class="signin-block">
      <h2 class="text-center popup-title">Sign In</h2>
      <ul class="social-login list-unstyled">
         <li class="facebook-login">
            <a href="javascript:void(0)"><img src="images-tpm/facebook.svg"> Continue with Facebook</a>
         </li>
         <li class="google-login"><a href="javascript:void(0)"><img src="images-tpm/google.svg"> Continue with Goolge</a></li>
         <li class="email-login"><a href="javascript:void(0)"><img src="images-tpm/email.svg"> Continue with Email</a></li>
      </ul>
      <div class="or text-center">OR</div>
      <button class="btn btn-block email-register-show btn-outline-warning">REGISTER NOW</button>
   </div>

   <div class="email-signin-block" style="display:none;">
      <h2 class="text-center popup-title">Sign In</h2>
      <form action="">
         <div class="form-group">
            <input type="email" class="form-control" placeholder="Email Address">
         </div>
         <div class="form-group">
            <input type="password" class="form-control" placeholder="Password">
         </div>
         <div class="form-group">
            <a class="forgot-btn" href="javascript:void(0)">Forgot password?</a>
         </div>
         <div class="form-group mb-0">
            <button class="btn btn-block btn-warning">SIGN IN</button>
         </div>
      </form>
   </div>

   <div class="password-forgot-block" style="display:none;">
      <h2 class="text-center popup-title">Forgot Your Password?</h2>
      <div class="subtitle">Please enter your email address to request a password reset.</div>
      <form action="">
         <div class="form-group">
            <input type="email" class="form-control" placeholder="Email Address">
         </div>         
         <div class="form-group mb-0">
            <button class="btn btn-block btn-warning">RESET PASSWORD</button>
         </div>
      </form>
   </div>

   <div class="email-register-block" style="display:none;">
      <h2 class="text-center popup-title">Register</h2>
      <form action="">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name">
         </div>
         <div class="form-group">
            <input type="email" class="form-control" placeholder="Email Address">
         </div>
         <div class="form-group">
            <input type="password" class="form-control" placeholder="Password">
         </div>
         <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirm Password">
         </div>
         <div class="form-group mb-0">
            <button class="btn btn-block btn-warning">REGISTER</button>
         </div>
      </form>
   </div>

</div>



<script src="js-tpm/app.js"></script>
</body>
</html>