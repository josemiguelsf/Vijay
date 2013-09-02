<?php
$this->breadcrumbs=array(
	Yii::t('configuration', 'TitleConfiguration')=>array('configuration/admin'),
	Yii::t('users', 'TitleUsers')=>array('index'),
	$model->CompleteName=>array('view','id'=>$model->user_id),
	Yii::t('users', 'UpdateUser'),
);
$this->pageTitle = Yii::app()->name." - ".Yii::t('users', 'TitleUsers');
?>

<div class="portlet x9">
	<div class="portlet-content">
		<h1 class="ptitleinfo users"><?php echo $model->CompleteName; ?></h1>
		<div class="button-group portlet-tab-nav">
			<a class="btn btn-large" href=" <?php echo Yii::app()->controller->createUrl('users/view',array('id'=>$model->user_id))?>"><i class="icon-star"></i><?php echo Yii::t('users', 'Back to User View')?></a>
				
	
		</div>
		<ul class="portlet-tab-nav">
			<li class="portlet-tab-nav-active">
				
			</li>
			<li class="portlet-tab-nav-active">
				
			</li>
			<li class="portlet-tab-nav-active">
				
			</li>
		</ul>
		<?php echo $this->renderPartial('_form', array('model'=>$model,'allowEdit'=>$allowEdit,'userManager'=>$userManager,'address' => $address, 'country'=>$country)); ?>
	</div>
</div>