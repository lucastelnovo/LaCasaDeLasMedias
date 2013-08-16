<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="ISO-8859-1">
    <title>La Casa de las Medias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página web de La Casa de las Medias S.H.">
    <meta name="author" content="Lucas Castelnovo">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <!-- Commented out - update these with your own files -->
    <!-- 
      <link rel="shortcut icon" href="ico/favicon.ico">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png"> 
    -->
  </head>

  <body>

	<?php include 'navbar.php'; ?>
    
     <div class="container" style="position:relative;top:150px" id="display">
     
     </div> <!-- /container -->
     
     <!-- Le javascript
    ================================================== -->
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
    <!-- Bootstrap jQuery plugins compiled and minified -->
    <script src="js/bootstrap.min.js"></script>
    <script>
    function displayPage(link){
   		 var link = link + '.php';
  		 $('#display').load(link);
    }
    function setActiveClass(link){
    	var obj = 'a#' + link;
    	$(obj).parent('li').toggleClass('active'); // OK
    }
    function unsetActiveClass(){
    	$('li.active').removeClass('active');    
    	
    }
    function clickHandler(link){
    	unsetActiveClass();
    	setActiveClass(link);
    	displayPage(link);
    }    
    
    displayPage('home');
   </script>    
  </body>
</html>
