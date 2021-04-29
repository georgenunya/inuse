<!DOCTYPE html>

<?php


if(isset($_POST['email']) && $_POST['email'] != ''){   
    // sumbit the form 

    $userName = $_POST['name'];
$userEmail = $_POST['email'];
$message = $_POST['message'];

$to = "georgehorrobin@outlook.com";
$body = "";

$body .= "From: ".$userName. "\r\n";
$body .= "Email: ".$userEmail. "\r\n";
$body .= "Message: ".$message. "\r\n";

mail($to,$body);


}

?>


<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<title>UnitFifteen – Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="author" content="Nunya Marketing">
<meta name="Description" content="unitfifteen – Sophisticated Responsive HTML5 Photography Portfolio">
<link href="css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="css/contact.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Amiri:400,600" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Oswald:400,600,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,600" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<script src="js/modernizr.js" type="text/javascript"></script>
</head>
<body class="contact-page lato">
<div id="nav-wrapper"> 
  <!-- start main nav -->
  <nav id="main-nav">
    <ul class="clearfix">
      <li> <a href="index.html">Home</a></li>
      <li> <a href="about.html">About</a> </li>
      <li> <a href="contact.html">Contact</a> </li>
      <li> <a href="portfolio.html">Portfolio</a> </li>
      <li> <a href="pricing.html">Price List</a> </li>
    </ul>
  </nav>
  <!-- end main nav --> 
</div>
<div id="content-overlay"></div>
<div id="wrap">
  <div id="menu-button">
    <div class="centralizer">
      <div class="cursor">
        <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
      </div>
    </div>
  </div>
  
  <!-- start header -->
  <header id="header" class="clearfix">
    <h1 id="logo"><a href="index.html"></a></h1>
    <ul class="social-list clearfix">
      <li> <a href="https://www.facebook.com/unit15fifteen/"><i class="fa fa-facebook"></i></a> </li>
      <li> <a href="https://www.instagram.com/unit.fifteen/"><i class="fa fa-instagram"></i></a> </li>
      <li> <a href="https://twitter.com/fifteenunit/"><i class="fa fa-twitter"></i></a> </li>
    </ul>
  </header>
  <!-- end header --> 
  
  <!-- start content -->
  <div id="content">
    <div class="full-width intro">
      <div class="full-height not-completely-full">
        <div class="fixed">
          <div id="map" class="parallax parallax-banner"></div>
        </div>
        <div class="full-height-wrapper white-text">
          <div class="parent">
            <div class="bottom">
              <div class="container">
                <div class="animatedblock delay2 animatedUp">
                  <div class="col-md-7 col-md-offset-1">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="overlay contact-map-overlay"></div>
        </div>
      </div>
    </div>
    
    <section class="white">
      <div class="container clearfix">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-3 col-sm-3 extra-padding-top">
              <p class="small">Address</p>
              <p>Unit 15<br />
                Oaklands Farm<br />
                Ingatestone, CM4 9RS</p>
            </div>
            <div class="col-md-3 col-sm-3 extra-padding-top">
              <p class="small">Phone</p>
              <p>07852790075</p>
            </div>
            <div class="col-md-3 col-sm-3 extra-padding-top">
              <p class="small">Open Hours</p>
              <p><strong>Appointment Only</p>
            </div>
            <div class="col-md-3 col-sm-3 extra-padding-top">
              <p class="small">Booking</p>
              <p>Make a booking through <a href="http://www.opentable.com/rest_profile.aspx?rid=1000&restref=1000" title="" target="_blank" class="arrow">Fresha</a></p>
            </div>
            <div class="col-sm-12">
              <div class="borderline last-in-section"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="white">
      <div class="container clearfix">
        <div class="col-md-7 col-md-offset-1 col-sm-6 extra-padding-right">


          <form class="form-part" method="POST" action="webform.php" name="contactform" id="contactform" autocomplete="off">
            <input name="name" type="text" id="name" size="30" title="Name" />
            <input name="email" type="text" id="email" size="30" title="Email" />
            <textarea name="comments" cols="40" rows="3" id="comments" title="Message"></textarea>
            <div class="input-wrapper clearfix"> <span id="message"></span>
              <div class="clear"></div>
              <input type="submit" class="button" value="Submit" id="submit" name="Submit" />
            </div>
          </form>



        </div>
        <div class="col-md-3 col-sm-6">
          <h2 class="header">Enquiries</h2>
          <div class="break"></div>
          <p class="large">unitfifteencm49rs@gmail.com</p>
          <p class="small below-text">email</p>
          <p class="large">07852790075</p>
          <p class="small below-text">phone</p>
        </div>
      </div>
    </section>
  </div>

  
  <!-- end content -->
  
  <footer id="footer">
    <div class="container clearfix">
      <p class="alignleft">© 2021, UnitFifteen.</p>
      <p class="alignright">Development by Nunya Marketing</a>.</p>
    </div>
  </footer>

  
</div>
<!-- end wrap --> 
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/60759ca9f7ce18270939f3fe/1f35mntrc';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
<script src="js/jquery-1.12.4.min.js" type="text/javascript"></script> 
<script src="js/jquery-easing-1.3.js" type="text/javascript"></script> 
<script src="js/jquery.touchSwipe.min.js" type="text/javascript"></script> 
<script src="js/jquery.isotope2.min.js" type="text/javascript"></script> 
<script src="js/jquery.ba-bbq.min.js" type="text/javascript"></script> 
<script src="js/packery-mode.pkgd.min.js" type="text/javascript"></script> 
<script src="js/jquery.isotope.load.js" type="text/javascript"></script> 
<script src="js/main.js" type="text/javascript"></script> 
<script src="js/jquery.form.js" type="text/javascript"></script> 
<script src="js/input.fields.js" type="text/javascript"></script> 
<script src="js/preloader.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCI9Xh0ihB2u4E0-vnpXgtyjaDCHxrfgik&sensor=false" type="text/javascript"></script> 
<script src="js/googlemaps.js" type="text/javascript"></script>
</body>
</html>