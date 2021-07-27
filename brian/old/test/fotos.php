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
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


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
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon" sizes="48x48">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon.png" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
        <![endif]-->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
/*fotoslider*/
#foto-carousel {
  padding: 0 10px 30px 10px;
  margin-top: 50px;
  text-align:center;
}
/* indicator position */
#foto-carousel .carousel-indicators {
  right: 50%;
  top: auto;
  bottom: -10px;
  margin-right: -19px;
}
/* indicator color */
#foto-carousel .carousel-indicators li {
  background: #c0c0c0;
}
/* active indicator */
#foto-carousel .carousel-indicators .active {
  background: #333333;
  height:10px;
  width:10px;
  margin-bottom:1px;
}

</style>
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
    .container__img-holder {
  max-width: 280px;
  display: inline-block;
  vertical-align: top;
  margin-bottom: 20px;
  margin-left: 16px;
  cursor: pointer;
}

.container .container__img-holder:nth-child(3n+1) {
  margin-left: 0;
}

.container__img-holder img {
  width: 100%;
  height: 220px;
  display: block;
}


/* Popup Styling */
.img-popup {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(255, 255, 255, .5);
  display: flex;
  justify-content: center;
  align-items: center;
  display: none;
}

.img-popup img {
  max-width: 900px;
  width: 100%;
  opacity: 0;
  transform: translateY(-100px);
  -webkit-transform: translateY(-100px);
  -moz-transform: translateY(-100px);
  -ms-transform: translateY(-100px);
  -o-transform: translateY(-100px);
}

.close-btn {
  width: 35px;
  height: 30px;
  display: flex;
  justify-content: center;
  flex-direction: column;
  position: absolute;
  top: 20px;
  right: 20px;
  cursor: pointer;
}

.close-btn .bar {
  height: 4px;
  background: #333;
}

.close-btn .bar:nth-child(1) {
  transform: rotate(45deg);
}

.close-btn .bar:nth-child(2) {
  transform: translateY(-4px) rotate(-45deg);
}

.opened {
  display: flex;
}

.opened img {
  animation: animatepopup 1s ease-in-out .8s;
  -webkit-animation: animatepopup .3s ease-in-out forwards;
}

@keyframes animatepopup {

  to {
    opacity: 1;
    transform: translateY(0);
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
  }

}

@media screen and (max-width: 880px) {

  .container .container__img-holder:nth-child(3n+1) {
    margin-left: 16px;
  }

}
   </style>
</header><!--/.header -->  




<br/><br/><br>
<!-- Flat projects portfolio -->
 <!-- Flat testimonial -->
 <section class="flat-row flat-testimonial index-3">
<script>
$(document).ready(function() {

// required elements
var imgPopup = $('.img-popup');
var imgCont  = $('.container__img-holder');
var popupImage = $('.img-popup img');
var closeBtn = $('.close-btn');

// handle events
imgCont.on('click', function() {
  var img_src = $(this).children('img').attr('src');
  imgPopup.children('img').attr('src', img_src);
  imgPopup.addClass('opened');
});

$(imgPopup, closeBtn).on('click', function() {
  imgPopup.removeClass('opened');
  imgPopup.children('img').attr('src', '');
});

popupImage.on('click', function(e) {
  e.stopPropagation();
});

});</script>
 <div class="container-fluid">
  <div class="container__img-holder">
    <img src="images/fotoslider/1.jpg" alt="Image">
  </div>
  <div class="container__img-holder">
    <img src="images/fotoslider/2.jpg" alt="Image">
  </div>
  <div class="container__img-holder">
    <img src="images/fotoslider/3.jpg" alt="Image">
  </div>
  <div class="container__img-holder">
    <img src="images/fotoslider/4.jpg" alt="Image">
  </div>
  <div class="container__img-holder">
    <img src="images/fotoslider/5.jpg" alt="Image">
  </div>
  <div class="container__img-holder">
    <img src="images/fotoslider/6.jpg" alt="Image">
  </div>
  <div class="container__img-holder">
    <img src="images/fotoslider/7.jpg" alt="Image">
  </div>
  <div class="container__img-holder">
    <img src="images/fotoslider/8.jpg" alt="Image">
  </div>
  <div class="container__img-holder">
    <img src="images/fotoslider/8.jpg" alt="Image">
  </div>
</div>

<div class="img-popup">
  <img src="" alt="Popup Image">
  <div class="close-btn">
    <div class="bar"></div>
    <div class="bar"></div>
  </div>
</div>
 

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