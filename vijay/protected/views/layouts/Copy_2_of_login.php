<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.png" />
	<link href="<?php// echo Yii::app()->request->baseUrl; ?>/css/login.css" rel="stylesheet" type="text/css" />
	<link href="<?php //echo Yii::app()->request->baseUrl; ?>/css/buttons.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
	
	  <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js" />
	 <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-transition.js" />
	 <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-alert.js" />
	 <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-modal.js" />
	 <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-dropdown.js" />
	 <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-scrollspy.js" />
	 <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-tab.js" />
	 <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-tooltip.js" />
	 <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-popover.js" />
	 <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-button.js" />
	 <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-collapse.js" />
	 <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-carousel.js" />
	 <link href="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-typeahead.js" />
</head>
<?php 
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl.'/js/jquery.min.js');
$cs->registerScriptFile($baseUrl.'/js/bootstrap-transition.js');
$cs->registerScriptFile($baseUrl.'/js/bootstrap-alert.js');
$cs->registerScriptFile($baseUrl.'/js/bootstrap-modal.js');
$cs->registerScriptFile($baseUrl.'/js/bootstrap-dropdown.js');
$cs->registerScriptFile($baseUrl.'/js/bootstrap-scrollspy.js');
$cs->registerScriptFile($baseUrl.'/js/bootstrap-tab.js');
$cs->registerScriptFile($baseUrl.'/js/bootstrap-tooltip.js');
$cs->registerScriptFile($baseUrl.'/js/bootstrap-popover.js');
$cs->registerScriptFile($baseUrl.'/js/bootstrap-button.js');
$cs->registerScriptFile($baseUrl.'/js/bootstrap-collapse.js');
$cs->registerScriptFile($baseUrl.'/js/bootstrap-carousel.js');
$cs->registerScriptFile($baseUrl.'/js/bootstrap-typeahead.js');

?>
<style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>
 <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
</style>
   

  <body>
 <!-- Navigation bar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

     <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
           <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
         <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->
    
    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap-transition.js"></script>
    <script src="/js/bootstrap-alert.js"></script>
    <script src="/js/bootstrap-modal.js"></script>
    <script src="/js/bootstrap-dropdown.js"></script>
    <script src="/js/bootstrap-scrollspy.js"></script>
    <script src="/js/bootstrap-tab.js"></script>
    <script src="/js/bootstrap-tooltip.js"></script>
    <script src="/js/bootstrap-popover.js"></script>
    <script src="/js/bootstrap-button.js"></script>
    <script src="/js/bootstrap-collapse.js"></script>
    <script src="/js/bootstrap-carousel.js"></script>
    <script src="/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="/js/holder/holder.js"></script>

  </body>
</html>



<?php /*
<body class="loginback">
<div class="container">

	<div class="row" id="loginrow">
	<h2 id="hrtitle">
	<?php // echo CHtml::image(Yii::app()->request->baseUrl."/images/celestic.png",CHtml::encode(Yii::app()->name).' v.'.Yii::app()->params['appVersion']); ?>
<?php echo "HR Multimedia System"?>
	</h2>
		<div class="span3">
			<a href="" title="Interviwer" rel="external">
				<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/interviewer1.jpg","Interviwer");?>
			</a>
		</div>
		<div class="span6">
			<div class="containerlogin">
				
					<div id="loginbox" >
						
							<?php echo $content; ?>
						
					</div>
			</div>	
		</div>
		
		<div class="span3">
			<a href="" title="Interviwer" rel="external">
				<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/candidate.jpg","Candidate");?>
			</a>
		</div>
	</div>
	<div class="row" id="loginrow">
	<div class="span3">
			<a href="" title="Interviwer" rel="external">
				<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/girldancing.jpg","girldancing");?>
			</a>
		</div>
		<div class="span6">
			<a href="" title="Interviwer" rel="external">
				<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/750px-Double-Arrow.svg.png","DoubleArrow");?>
			</a>
		</div>
		<div class="span3">
			<a href="" title="Interviwer" rel="external">
				<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/employees.jpg","employees");?>
			</a>
		</div>
		</div>
	</div>
	
	<div class="row footlogin" >
		<div class="span3">
			<div class="mod footerRibbon">
					<?php echo CHtml::encode(Yii::app()->name).' v.'.Yii::app()->params['appVersion']; ?> <br /> 
					 Developed by <a href="http://qbit.com.mx" rel="external" title="VJ HR System">VJ Ideas</a><br />
			</div>
		</div>
		<div class="span6">
		L
		</div>
		<div class="span3">
						<a href="http://qbit.com.mx/labs/celestic" title="Celestic Homepage" rel="external">
							<?php echo CHtml::image(Yii::app()->request->baseUrl."/favicon.png","Homepage",array('width'=>'28px','height'=>'28px'));?>
						</a>
						<a href="http://twitter.com/celesticMX" title="Twitter" rel="external">
							<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/sm-twitter.png","Twitter");?>
						</a>
						<a href="http://www.facebook.com/pages/Celestic/189892971069509" title="Facebook" rel="external">
							<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/sm-facebook.png","Facebook");?>
						</a>
						<a href="http://qbit.com.mx/labs/celestic/forum" title="Forum" rel="external">
							<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/vanilla.png","Forum");?>
						</a>
						<a href="http://qbit.com.mx/labs/celestic/blog" title="Blog" rel="external">
							<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/wordpress.png","Blog");?>
						</a>
						
		</div>
	</div>
	<div class="footer shareFooter">
		<div class="footerContent">
			<div style="float:right;">
				<ul class="icons">
					<li>
						<a href="http://qbit.com.mx/labs/celestic" title="Celestic Homepage" rel="external">
							<?php echo CHtml::image(Yii::app()->request->baseUrl."/favicon.png","Homepage",array('width'=>'28px','height'=>'28px'));?>
						</a>
					</li>
					<li>
						<a href="http://twitter.com/celesticMX" title="Twitter" rel="external">
							<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/sm-twitter.png","Twitter");?>
						</a>
					</li>
					<li>
						<a href="http://www.facebook.com/pages/Celestic/189892971069509" title="Facebook" rel="external">
							<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/sm-facebook.png","Facebook");?>
						</a>
					</li>
					<li>
						<a href="http://qbit.com.mx/labs/celestic/forum" title="Forum" rel="external">
							<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/vanilla.png","Forum");?>
						</a>
					</li>
					<li>
						<a href="http://qbit.com.mx/labs/celestic/blog" title="Blog" rel="external">
							<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/wordpress.png","Blog");?>
						</a>
					</li>
				</ul>
			</div>
			<ul>
				<li class="language"><?php //echo CHtml::link('Espa&ntilde;ol-MX', Yii::app()->createUrl(Yii::app()->controller->id."/".Yii::app()->controller->action->id, CMap::mergeArray(Yii::app()->controller->getActionParams(),array('lc'=>'es_mx'))), array('title'=>'Español México')); ?></li>
					<li class="language"><?php //echo CHtml::link('Portugues', Yii::app()->createUrl(Yii::app()->controller->id."/".Yii::app()->controller->action->id, CMap::mergeArray(Yii::app()->controller->getActionParams(),array('lc'=>'pt_br'))), array('title'=>'Português')); ?></li>
					<li class="language"><?php //echo CHtml::link('English', Yii::app()->createUrl(Yii::app()->controller->id."/".Yii::app()->controller->action->id, CMap::mergeArray(Yii::app()->controller->getActionParams(),array('lc'=>'en_us'))), array('title'=>'English')); ?></li>
					<li class="language"><?php //echo CHtml::link('Espa&ntilde;ol-ES', Yii::app()->createUrl(Yii::app()->controller->id."/".Yii::app()->controller->action->id, CMap::mergeArray(Yii::app()->controller->getActionParams(),array('lc'=>'es_es'))), array('title'=>'Español España')); ?></li>
					<li class="language"><?php //echo CHtml::link('Deutsch', Yii::app()->createUrl(Yii::app()->controller->id."/".Yii::app()->controller->action->id, CMap::mergeArray(Yii::app()->controller->getActionParams(),array('lc'=>'de_de'))), array('title'=>'Deutsch')); ?></li>
				</ul>
				<div class="mod footerRibbon">
					<?php echo CHtml::encode(Yii::app()->name).' v.'.Yii::app()->params['appVersion']; ?> <br /> 
					 Developed by <a href="http://qbit.com.mx" rel="external" title="VJ HR System">VJ Ideas</a><br />
				</div>
			</div>
		</div>
	
<?php
Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScript('jqueryLogin','
	$(\'input.betterform\').focus(function(){
		$(this).parent().addClass("over"); $(this).addClass("focusField"); 
	}).blur(function(){
		$(this).parents(".input").removeClass("over"); $(this).removeClass("focusField");
	});
	$(":input").each(function() {
		if ($(this).attr("tabindex") == 1){
			this.focus(); return false;
		}
	});
');
?>

?>