<!DOCTYPE html>
<html lang="en">
<head>
    <title>Heutink School Portaal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery.rwdImageMaps.js"></script>

    <script>
        function getpagecontent(contentpage){
            
            $.ajax({url: "nav/"+contentpage,
            method: "POST",
            async: true,
            cache: false,
            error: function() 
                {
                    getpagecontent('home.php');
                },
            success: function(data)
                {
                    
                    $("nav").html(data);
                    $.ajax({url: "main/"+contentpage,
                        method: "POST",
                        async: true,
                        cache: false,
                        error: function() 
                            {
                                $("main").html('');
                            },
                        success: function(data)
                            {
                                $("main").html(data);
                            },
                        
                        dataType: 'json'
                    });
                },
            
            dataType: 'json'
            });
            
        }
        
        getpagecontent('home.php');
        
    </script>
    
</head>
<body>

<header>
            <p id="laat"> laat ze leren </p>
		    <img src="./image/schoolboek2.png" id="logoschool">
            <a href="https://www.heutink-ict.nl/" target="_blank"><img src="./image/logoheutink.png" id="logoheutink"></a>
        <div class="txtalign1">
            <p id="phone-vraag">Vragen? </p>
            <a href="skype:0742404606?call" class="fa fa-phone" id="phone"> </a>
            <p id="phone-vraag">074-2404606</p>
        </div>

        <div class="socialmedia">
            <a href="https://www.facebook.com/heutinkicthengelo" target="_blank" class="fa fa-facebook-square" id="banner"></a>
			<a href="https://twitter.com/Heutinkict" target="_blank" class="fa fa-twitter-square" id="banner"></a>
			<a href="https://www.youtube.com/channel/UCX5E_S-zxCRw-iRNT7KDvDg" target="_blank" class="fa fa-youtube-play" id="banner"></a>
            <a href="https://www.linkedin.com/company/heutink-ict/" target="_blank" class="fa fa-linkedin-square" id="banner"></a>
        </div>
        
        <div class="txtalign" style="text-align:left;">
            KvK : 61811440 <br>
            BTW : NL854498825B01 <br>
            &copy; 2019-<?php echo date("Y"); ?>
        </div>
    </header>

  
<div class="container">
  <div class="row">
    <div class="col-sm-6">
     <main></main>
    </div>
    <div class="col-sm-4">
      <nav></nav>
    </div>
  </div>
</div>
<footer class="footer">
      <div class="container">
        
      <a href="./pdf/disclaimer.pdf" id="footertxt2" download>Disclaimer |</a>
        <a href="https://www.heutink-ict.nl/privacy" target="_blank" id="footertxt2" > Privacy </a>
      </div>
    </footer>

</body>
</html>
