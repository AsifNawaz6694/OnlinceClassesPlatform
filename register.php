<?php include 'header.php'; ?>


<section class="login">
<div class="container">
	<div class="row">
   <div class="col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0  login-form">
    <h3 class="login_content">LET'S GET STARTED</h3>
     <hr>
     <form id="signin_form">
      <div class="form-group_form">
        <label for="exampleInputName">FULLNAME</label>
        <input type="text" class="form-control required fullname" id="exampleInputName">
      </div>

      <div class="form-group_form">
        <label for="exampleInputemail">EMAIL ADDRESS</label>
        <input type="email" class="form-control required email" id="exampleInputemail">
      </div>
      <div class="form-group_form">
        <label for="exampleuName">USERNAME</label>
        <input type="text" class="form-control required uname" id="exampleInputuName">
      </div>
      <div class="form-group_form">
        <label for="exampleInputPassword1">PASSWORD</label>
        <input type="password" class="form-control required" id="exampleInputPassword1"> 
      </div>

      <div class="form-group_form">
        <label for="exampleInputPassword">REPEAT PASSWORD</label>
        <input type="password" class="form-control required" id="exampleInputPassword"> 
      </div>

    

      <div class="form-group" role="group" aria-label="...">
        <div class="account_signin"><a href="#" class="btn btn-default_signup">SIGN UP</a>     
        <!--<a  href="#" class="btn btn-default_login">LOGIN NOW</a>-->
        <!--<button type="submit" class="btn login_now">LOGIN</button>-->
      </div>
  </div>
    </form>
   
  </div>
</div>
</div>
</section>






<?php include 'footer.php'; ?>