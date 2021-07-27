<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@briansplace.nl";
    $email_subject = "Brian's snackcorner";
    
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||        
        !isset($_POST['email']) ||        
        !isset($_POST['comments'])) {
        died('Vul het form juist in.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $email_from = $_POST['email']; // required  
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Het email adres dat u ingevuld heeft is niet geldig.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'De naam die u invult is niet geldig.<br />';
  }
 
 
  if(strlen($comments) < 0) {
    $error_message .= 'Vul meer in.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Brian's Snackcorner .\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Uw naam: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Uw vraag: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->


<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Brian's Snackcorner</title>


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=12.0, minimum-scale=.25, user-scalable=yes /">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/jquery.datetimepicker.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">

    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon" sizes="48x48">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon.png" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
        <![endif]-->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    </head>    

    <body class=""> 
        

  
    <div class="box">
            <header id="header" class="header clearfix">
                <div class="header-wrap clearfix">
                   
                    <div class="container-fluid">
                    <div class="logo-mobi"> <a href="home"> <img src="images/logo1.png" alt="image" width="180px;" id="logobrian" class="logo" style="position: relative; top: 5vh;"></a></div>
                    <div class="btn-menu">
                        <span></span>
                    </div>
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                            <a href="https://www.instagram.com/bistro_brians_place/?hl=nl" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.facebook.com/bistrobriansplace/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <li class="logo">
                                <a href="home"><img src="images/logo1.png" alt="image" width="180px;" id="logobrian" class="logo" style="position: relative; top: 5vh;"></a>
                                </li>
                                <li class="has-sub">   
                                    <a href="home">Home</a>
                                     
                                </li>
                                <li> <a href="assortiment">Assortiment</a></li>
                                
                                </li>
                <li > <a href="wij">Over ons</a></li>
                               
                <li> <a href="contact">Contact</a></li>
                                
                <li> <a href="fotos">Foto Impressie</a>
            </ul><!--/.menu -->                                      
        </nav><!--/.mainnav -->
    </div><!--/.container -->
</div><!--/.header-wrap -->
<style>
    .fa {
        padding: 20px;
        font-size: 20px;
        width: 10px;
        text-align: center;
        text-decoration:none;
    }
    .fa:before {
        text-decoration:none;
        color: silver;
    }
</style>
</header><!--/.header -->  




<br/><br/>
<!-- Flat Why Choose US --><br/>
<section class="flat-row menu-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="d-xl-flex about-grids">
                   
                    <div class="col-xl-12 about-left p-0">
                <h3> Bedankt voor uw bericht, Wij nemen z.s.m. contact op</h3><br/>
                <br/><br/>
            </div><!--flat-map -->
					

      

</section>


<footer>
    <div class="footer-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <div class="copyright-content">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Brian's place<br/>
                        <b> KVK</b> 74349457 <br/>Stevensbeekseweg 14 5844 AB Stevensbeek <br/>
                                       Created by : <a href="https://tb-designs.nl/" target="_blank"> tb-designs.nl</a></p></div>
                     
                     <!-- Go Top -->
                     <a class="go-top-v1"> <i class="fa fa-arrow-up"></i>  &nbsp;Back to Top</a>
                 </div><!-- /.col-md-12 -->
             </div><!-- /.row -->
         </div><!-- /.container -->
     </div><!-- /.footer-content -->
 </footer>


 </div><!--box -->

 <!-- Javascript -->
 <script type="text/javascript" src="javascript/jquery.min.js"></script>
 <script type="text/javascript" src="javascript/bootstrap.min.js"></script> 
 <script type="text/javascript" src="javascript/jquery.easing.js"></script> 
 <script type="text/javascript" src="javascript/imagesloaded.min.js"></script> 
 <script type="text/javascript" src="javascript/jquery.isotope.min.js"></script>
 <script type="text/javascript" src="javascript/jquery-waypoints.js"></script> 
 <script type="text/javascript" src="javascript/jquery.magnific-popup.min.js"></script>   
 <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
 <script type="text/javascript" src="javascript/parallax.js"></script>
 <script type="text/javascript" src="javascript/smoothscroll.js"></script>   
 <script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
 <script type="text/javascript" src="javascript/owl.carousel.js"></script>
 <script type="text/javascript" src="javascript/jquery-validate.js"></script>
 <script type="text/javascript" src="javascript/countdown.js"></script>
 <!-- <script type="text/javascript" src="javascript/switcher.js"></script> -->
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvV0EE3yFozGhjmUv3BgoyviVdXzCwHlk"></script>
 <script type="text/javascript" src="javascript/gmap3.min.js"></script>  
 <script type="text/javascript" src="javascript/main.js"></script>

 <!-- Revolution Slider -->
 <script type="text/javascript" src="javascript/jquery.themepunch.tools.min.js"></script>
 <script type="text/javascript" src="javascript/jquery.themepunch.revolution.min.js"></script>
 <script type="text/javascript" src="javascript/slider.js"></script>

</body>
</html>

<?php
 
}
?>
