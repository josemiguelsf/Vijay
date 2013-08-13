<?php
/* @var $this CompetencyController */
/* @var $model Competency */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'competency-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'competency_id'); ?>
		<?php echo $form->textField($model,'competency_id'); ?>
		<?php echo $form->error($model,'competency_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'competency_area'); ?>
		<?php echo $form->textField($model,'competency_area',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'competency_area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'competency_technic'); ?>
		<?php echo $form->textField($model,'competency_technic',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'competency_technic'); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->