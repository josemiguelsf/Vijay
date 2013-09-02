<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="expires" content="0" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" type="text/css" rel="stylesheet" media="screen" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/maifdfdfn.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bassdsdse.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/simdfdffplemodal.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/buttonccccs.css" rel="stylesheet" type="text/css" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/grdddid.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.png" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsddfdive.css" rel="stylesheet" type="text/css" />
<style>
.page-header{ background:url(images/blgr026.jpg) repeat;}
.page-header h1{color:red;}


</style>
	
</head>
<body>
 <div class="page-header clearfix">
 
 <?php //THIS IS FOR THE LOGO echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/images/celesticXXX.png",CHtml::encode(Yii::app()->name).' v.'.Yii::app()->params['appVersion']),Yii::app()->createUrl('site'), array('title'=>CHtml::encode(Yii::app()->name).' v.'.Yii::app()->params['appVersion']));?>
			
	  <h1>MultiMedia HR System</h1>
	
		
				<?php if (!Yii::app()->user->isGuest){ ?>
				<div id="info">
					<h4><?php //echo Yii::t('site','WelcomeMessage'); ?></h4>
					<p>
						<a  href="<?php echo Yii::app()->createUrl('users/view', array('id'=>Yii::app()->user->id));?>"><?php echo Yii::t('site','LoggedAs')." ".(Yii::app()->user->CompleteName);?></a>
						<br />
						<?php
							if (strtotime(Yii::app()->user->getState('user_lastLogin')) != null)
			 					echo Yii::t('users','user_lastLogin')." ".Yii::app()->dateFormatter->format('dd.MM.yyyy', Yii::app()->user->getState('user_lastLogin'))." - ";
						?>
						<?php echo (!Yii::app()->user->isGuest) ? CHtml::link('Logout', Yii::app()->createUrl('site/logout')) : ''; ?>
					</p>
					
					<a href="http://qbit.com.mx/labs/celestic/blog" title="Blog" rel="external">
					
							<?php 
							
							$imgpth=Yii::app()->user->Imagepath;
							if ($imgpth=="") $imgpth="candidate.jpg";
							echo CHtml::image(Yii::app()->request->baseUrl."/images/".$imgpth);?>
					
					</a>
					
					
						<?php
							/*$this->widget('application.extensions.VGGravatarWidget.VGGravatarWidget', 
							array(
								'email' => CHtml::encode(Yii::app()->user->getState('user_email')),
								'hashed' => false,
								'default' => 'http://'.$_SERVER['SERVER_NAME'].Yii::app()->request->baseUrl.'/images/celestic.png',
								'size' => 165,
								'rating' => 'PG',
								'htmlOptions' => array('class'=>'borderCaption','alt'=>'Gravatar Icon' ),
							)
						); */
				?>	
				</div>
				<?php } ?>
				
				
				</div>

		
		<div id="contencct" class="container">
			<!-- At this moment in main.php layout this content variable refers to the corresponding layout -->
			<?php echo $content; ?>
		</div>
		<div id="footer">
			 <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 VJ Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
		</div>


</body>
 <script src="js/jquery.min.js"></script>
  
    <script src="js/bootstrap.min.js"></script>
    
   
  
   
    <script>
</html>