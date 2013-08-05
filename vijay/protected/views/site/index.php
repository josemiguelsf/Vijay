<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="loginfront">
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Thanks for accessing this MultiMedia HR System.</p>

<p>Online access for interviews and a large database of applicants.</p>
<ul>
	<li>View file: <code><?php // echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php // echo $this->getLayoutFile('mainlogin'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
</p>
</div>