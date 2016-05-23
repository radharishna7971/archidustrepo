<footer class="footer">
  <div class="container">
    <div class="row">
      <!-- <div class="col-md-12"> -->
      <div class="col-lg-4 col-sm-4" >
        <h1>contact info</h1>
        <address>
        <p><i class="fa fa-home pr-10"></i>Address: No.XXXXXX street</p>
        <p><i class="fa fa-globe pr-10"></i>Mars city, Country</p>
        <p><i class="fa fa-mobile pr-10"></i>Mobile : (123) 456-7890</p>
        <p><i class="fa fa-phone pr-10"></i>Phone : (123) 456-7890</p>
        <p><i class="fa fa-envelope pr-10"></i>Email : <a href="javascript:;">support@example.com</a></p>
        </address>
      </div>
      <div  class="col-lg-4 col-sm-4" >
        <h1>latest tweet</h1>
        <div id="owl-slide">
          <div class="tweet-box"> <i class="fa fa-twitter"></i> <em>Please follow <a href="javascript:;">@example</a> for all future updates of us! <a href="javascript:;">twitter.com/archidust</a></em> </div>
          <div class="tweet-box"> <i class="fa fa-twitter"></i> <em>Please follow <a href="javascript:;">@example</a> for all future updates of us! <a href="javascript:;">twitter.com/archidust</a></em> </div>
          <div class="tweet-box"> <i class="fa fa-twitter"></i> <em>Please follow <a href="javascript:;">@example</a> for all future updates of us! <a href="javascript:;">twitter.com/archidust</a></em> </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-4">
        <div  class="page-footer" >
          <h1>Our Company</h1>
          <ul class="page-footer-list">
            <li><i class="fa fa-angle-right"></i><a <a href="<?php echo site_url('about') ?>">About Us</a></li>
            <li><i class="fa fa-angle-right"></i><a <a href="<?php echo site_url('privacyPolicy') ?>">Term &amp; Condition</a></li>
            <li><i class="fa fa-angle-right"></i><a <a href="#">Submit your project</a></li>
            <li><i class="fa fa-angle-right"></i><a <a href="#">Advertisement</a></li>
            <li><i class="fa fa-angle-right"></i><a <a href="<?php echo site_url('newsletters') ?>">Newsletter</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <!-- </div> --> 
    
  </div>
</footer>
<footer class="footer-small">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-6 pull-right">
        <ul class="social-link-footer list-unstyled">
          <li ><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li ><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li ><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li ><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li ><a href="#"><i class="fa fa-youtube"></i></a></li>
          <li ><a href="#"><i class="fa fa-pinterest"></i></a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <div class="copyright">
          <p>&copy; Copyright - archidust.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="<?php echo base_url() ?>js/jquery.js"></script> 
<!-- For smooth animatin  --> 

<script src="<?php echo base_url() ?>js/bootstrap.js"></script>
<script>
$(document).ready(function(){
    $("#megnify").click(function(){
        $("#search").toggle();
    });
  

});
var selector = '.nav li';
$(selector).on('click', function(){
    $(selector).removeClass('active');
    $(this).addClass('active');
});
</script>
</body>
</html>
