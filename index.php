<?php
if(isset($_GET['menu']))$menu=$_GET['menu']; else $menu='home';
$isi=file_get_contents("content/".$menu.".html");
?>
<!doctype html>  
<head>
  <meta charset="UTF-8">
  <title>Androidian- Home</title>
  <link rel="icon" href="images/favicon.gif" type="image/x-icon"/>
 <!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->

 <link rel="shortcut icon" href="images/favicon.gif" type="image/x-icon"/> 
 <link rel="stylesheet" type="text/css" href="css/styles.css"/>

 <link type="text/css" href="css/fancymoves.css" media="screen" charset="utf-8" rel="stylesheet"  />


 <!-- Required script -->
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" charset="utf-8"></script>
 <script type="text/javascript" src="js/slider.js" charset="utf-8"></script>
 <style type="text/css" media="screen">
   @font-face {
    font-family: 'BebasNeueRegular';
    src: url('BebasNeue-webfont.eot');
    src: url('BebasNeue-webfont.eot?#iefix') format('embedded-opentype'),
    url('BebasNeue-webfont.woff') format('woff'),
    url('BebasNeue-webfont.ttf') format('truetype'),
    url('BebasNeue-webfont.svg#BebasNeueRegular') format('svg');
    font-weight: normal;
    font-style: normal;

  }

  h1.fontface {font: 72px/80px 'BebasNeueRegular', Arial, sans-serif;letter-spacing: 0;}
  h2.fontface {font: 35px/43px 'BebasNeueRegular', Arial, sans-serif;letter-spacing: 0;}
  h3.fontface {font: 25px/33px 'BebasNeueRegular', Arial, sans-serif;letter-spacing: 2px;}
  h4.fontface {font: 20px/28px 'BebasNeueRegular', Arial, sans-serif;letter-spacing: 0;}

  p.style1 {font: 18px/27px 'BebasNeueRegular', Arial, sans-serif;}

</style>


<script type="text/javascript" src="demo/demo.js"></script>

<!-- FancyBox scripts -->
<script type="text/javascript" src="fancybox-1.3.4/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" media="screen" />


<script type="text/javascript">
  $(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a.pop1").fancybox();

			$("a.pop2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a.pop3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.7		
			});

			$("a.pop4").fancybox({
				'opacity'		: true,
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none'
			});

			$("a.pop5").fancybox();

			$("a#example6").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});

			$("a.pop6").fancybox({
				'titlePosition'	: 'inside'
			});

			$("a.pop7").fancybox({
				'titlePosition'	: 'over'
			});

		});
	</script>





</head>
<body>



 <!-- end pixels -->



 <!--start header-->

 <header>
   <div class="container">
    <!--start title-->
    <h1 class="fontface" id="title"><span class="green">A</span>ndroidian</h1>

    <!--end title-->
    <!--start menu-->
    <nav>
      <ul>
        <li><a href="?menu=home">Home</a></li>
        <li><a href="?menu=about">About</a></li>
        <li><a href="?menu=work">Portfolio</a></li>
        <li><a href="?menu=news">News</a></li>
        <li><a href="?menu=contact">Contact</a></li>

      </ul>
    </nav>
  </div>

  <!--end menu-->



  <!--end header-->
</header>

<div id="container">
 <div class="quote">
   <div class="content1">
    <section class="subcontentmed">
     <h2 class="fontface"><?=$menu;?></h2>
     <div style="background:#FFF; color:#000; padding:10px;">
      <?=$isi;?>
    </div>

  </section>
</div>
</div>
<!--start footer-->
<footer>
 <div class="container">
   <br><br>
   <p> © Simple BUKAN CMS</p> 
 </div>

</footer>
<!--end footer--></div>
<!-- Free template distributed by http://freehtml5templates.com -->   
</body></html>
