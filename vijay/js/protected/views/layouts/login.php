<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.png" />
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/buttons.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>
<body id="s-login">
<div class="container">
	<div class="row" id="loginrow">
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
				<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/750px-doublearrow.jpg","DoubleArrow");?>
			</a>
		</div>
		<div class="span3">
			<a href="" title="Interviwer" rel="external">
				<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/employees.jpg","employees");?>
			</a>
		</div>
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
					<?php //echo Yii::powered(); ?> <!--  Icons by <a href="http://www.fatcow.com/free-icons/" rel="external" title="Fatcow">Fatcow</a>.<br /> -->
					<?php //echo CHtml::link('Privacy', Yii::app()->createUrl('site/page', array('view'=>'privacy'))); ?>   
					<?php //echo CHtml::link('Community', 'http://qbit.com.mx/labs/celestic/forum'); ?> 
					<?php //echo CHtml::link('Blog', 'http://qbit.com.mx/labs/celestic/blog'); ?>
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