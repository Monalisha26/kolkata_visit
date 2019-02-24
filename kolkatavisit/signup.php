<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'kv_db');
$q="insert into user(username,password) values('$username','$password')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
 <head>
   <link rel="stylesheet" href="./css/signdesign.css"/>
 <link rel="stylesheet" href="./css/design1.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body >
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">KOLKATA VISIT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
	  </ul>
	   <ul class="navbar-nav ml-auto pull-right">
      <li class="nav-item ">
	    <a href="login.php" class="btn btn-primary btn-lg btn-space " tabindex="-1" role="button" >Login</a>
      </li>
	  <li class="nav-item">
	    <a href="signupform.php" class="btn btn-outline-primary btn-lg btn-space " tabindex="-3" role="button" >Sign Up</a>
      </li>
    </ul>
  </div>
</nav>
 
 
 
 
 <div class="container text-center">
 <p><?php 
 if($status ==1)
 {  
    
	 
	 
	 echo '<img src="./pic/bi.png" />';
	 echo '<h1>'. "Signup Successful ".'</h1>';
     echo"</br>";	 
    echo "Want to login?";
	
	echo '<a href="login.php">Login</a>';
 }
 else 
 {   
	  echo "<img src='./pic/q.png'/>";
	 echo '<h2>'."Signup failed ".'</h2>';
	 echo "try again.";
	echo '<a href="signupform.php">sign up </a>';
 }?>
 </p>
 </div>
 
 
 
 
<footer class="footer">
      <div class="container">
	  <div class="row">
	   <div class="col-md-12 py-5">
          <div class="mb-5 text-center">
		  <a class="fb-ic" href="https://www.facebook.com/">
            <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic" href="https://twitter.com/" >
              <i class="fa fa-twitter fa-3x"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic" href="https://plus.google.com/u/0/">
              <i class="fa fa-google-plus  fa-3x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic" href="https://www.linkedin.com/feed/">
              <i class="fa fa-linkedin  fa-3x"> </i>
            </a>
            <!--Github-->
            <a class="ins-ic" href="https://github.com/Monalisha26">
              <i class="fa fa-github fa-3x"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic" href="https://in.pinterest.com/">
              <i class="fa fa-pinterest  fa-3x"> </i>
            </a>
		</div>
		</div>
		</div>
      </div>
    </footer>
	
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script type='text/javascript' src='https://mdbootstrap.com/wp-admin/load-scripts.php?c=gzip&amp;load%5B%5D=wp-embed,jquery-ui-core,jquery-ui-widget,jquery-ui-mouse,jquery-ui-slider&amp;ver=4.9.9'></script>
<script type='text/javascript' src='https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/4.7.0/compiled.min.js?ver=4.7.0'></script>
<script type='text/javascript' src='https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/footer-functions.js?ver=4.7.0'></script>
<script type='text/javascript' src='https://mdbootstrap.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.5'></script>
<script type='text/javascript' src='https://mdbootstrap.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript' src='https://mdbootstrap.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript' src='https://mdbootstrap.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.5.2'></script>
<script type='text/javascript' src='https://mdbootstrap.com/wp-content/plugins/mailchimp-for-woocommerce/public/js/mailchimp-woocommerce-public.min.js?ver=2.1.11'></script>
<script type='text/javascript' src='https://chimpstatic.com/mcjs-connected/js/users/461480655ccce528d909d3f42/05e1abaa17c4f479182ad3147.js?ver=2.1.11'></script>
<script type='text/javascript' src='https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/pages-rates.js?ver=4.7.0'></script>
<script type='text/javascript' src='https://mdbootstrap.com/wp-content/plugins/woocommerce/assets/js/jquery-ui-touch-punch/jquery-ui-touch-punch.min.js?ver=3.5.2'></script>
<script type='text/javascript' src='https://mdbootstrap.com/wp-content/plugins/woocommerce-currency-switcher/js/price-slider_33.js?ver=4.9.9'></script>
<script type='text/javascript' src='https://mdbootstrap.com/wp-content/plugins/woocommerce-currency-switcher/js/jquery.ddslick.min.js?ver=4.9.9'></script>
<script type='text/javascript' src='https://mdbootstrap.com/wp-content/plugins/woocommerce-currency-switcher/js/front.js?ver=4.9.9'></script>
<script id="_agile_min_js" type="text/javascript" src="https://mdbootstrap.agilecrm.com/stats/min/agile-min.js"> </script><script> if(typeof _agile != "undefined") { _agile.set_account("rvnkji5gd7c5c74136umt99rcv","mdbootstrap");_agile.track_page_view() } </script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
 
 
 </html>