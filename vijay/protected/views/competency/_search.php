<?php
/* @var $this CompetencyController */
/* @var $model Competency */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'competency_id'); ?>
		<?php echo $form->textField($model,'competency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'competency_area'); ?>
		<?php echo $form->textField($model,'competency_area'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'competency_technic'); ?>
		<?php echo $form->textField($model,'competency_technic',array('size'=>20,'maxlength'=>20)); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->