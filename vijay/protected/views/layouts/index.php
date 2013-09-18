<?php
/* @var $this SiteController */
//nothing to echo from this view, only the mainpage layout

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="expires" content="0" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>

<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/formlogin.css" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" type="image/x-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.png" />
<style>
.page-header{ background:url(images/blgr026.jpg) repeat;}
.page-header h1{color:red;}


</style>
	
</head>
<body>
<div id="contencct" class="container">
<!-- At this moment in main.php layout this content variable refers to the corresponding layout -->
			<?php echo $content; ?>
		</div>
</body>