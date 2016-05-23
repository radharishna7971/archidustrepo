<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Archidust</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<style>
body {
    background-image: url("images/p1.jpg");
    background-repeat: no-repeat;
}
@media (min-width: 768px) {
    .omb_row-sm-offset-3 div:first-child[class*="col-"] {
        margin-left: 2%;
    }
}
.omb_login{
  background-color: rgba(221, 221, 221, 0.92);
  width: 40%;
  margin: 145px auto;
}
.omb_login .omb_authTitle {
    text-align: center;
  line-height: 300%;

}
  
.omb_login .omb_socialButtons a {
  color: white; // In yourUse @body-bg 
  opacity:0.9;
}
.omb_login .omb_socialButtons a:hover {
    color: white;
  opacity:1;      
}
.omb_login .omb_socialButtons .omb_btn-facebook {background: #3b5998;}
.omb_login .omb_socialButtons .omb_btn-twitter {background: #00aced;}
.omb_login .omb_socialButtons .omb_btn-google {background: #c32f10;}


.omb_login .omb_loginOr {
  position: relative;
  font-size: 1.5em;
  color: #aaa;
  margin-top: 1em;
  margin-bottom: 1em;
  padding-top: 0.5em;
  padding-bottom: 0.5em;
}
.omb_login .omb_loginOr .omb_hrOr {
  background-color: #cdcdcd;
  height: 1px;
  margin-top: 0px !important;
  margin-bottom: 0px !important;
}
.omb_login .omb_loginOr .omb_spanOr {
  display: block;
  position: absolute;
  left: 50%;
  top: -0.6em;
  margin-left: -1.5em;
  background-color: white;
  width: 3em;
  text-align: center;
  
}     

.omb_login .omb_loginForm .input-group.i {
  width: 2em;
}
.omb_login .omb_loginForm  .help-block {
    color: red;
}

.input-group input.form-control{
   height:45px !important;
}
  
@media (min-width: 768px) {
    .omb_login .omb_forgotPwd {
        text-align: right;
    margin-top:10px;
  }   
}
.row{
  margin-right: -40px;
}
</style>
</head>

<body>
<div class="container">
    

    <div class="omb_login">
      <h3 class="omb_authTitle">Login or <a href="<?php echo site_url('signup') ?>">Sign up</a></h3>
    <div class="row omb_row-sm-offset-3 omb_socialButtons">
          <div class="col-xs-4 col-sm-4">
            <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
              <i class="fa fa-facebook visible-xs"></i>
              <span class="hidden-xs">Facebook</span>
            </a>
          </div>
          <div class="col-xs-4 col-sm-3">
            <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
              <i class="fa fa-twitter visible-xs"></i>
              <span class="hidden-xs">Twitter</span>
            </a>
          </div>  
          <div class="col-xs-4 col-sm-4">
            <a href="#" class="btn btn-lg btn-block omb_btn-google">
              <i class="fa fa-google-plus visible-xs"></i>
              <span class="hidden-xs">Google+</span>
            </a>
          </div>  
    </div>

    <div class="row omb_row-sm-offset-3 omb_loginOr">
      <div class="col-xs-12 col-sm-11">
        <hr class="omb_hrOr">
        <span class="omb_spanOr">or</span>
      </div>
    </div>

    <div class="row omb_row-sm-offset-3">
      <div class="col-xs-12 col-sm-11">  
          <form class="omb_loginForm" action="" autocomplete="off" method="POST">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" name="username" placeholder="email address">
          </div>
          <span class="help-block"></span>
                    
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input  type="password" class="form-control" name="password" placeholder="Password">
          </div>
                   
          <span class="help-block"></span>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
      </div>
      </div>
    <div class="row omb_row-sm-offset-3">
      <div class="col-xs-12 col-sm-3">
      </div>
      <div class="col-xs-12 col-sm-11">
        <p class="omb_forgotPwd">
          <a href="#">Forgot password?</a>
        </p>
      </div>
    </div>        
  </div>



        </div>
<script src="js/jquery.js"></script> 
<!-- For smooth animatin  --> 

<script src="js/bootstrap.js"></script> 
<script>
$(document).ready(function(){
    $("#megnify").click(function(){
        $("#search").toggle();
    });
});
</script>
</body>
</html>
