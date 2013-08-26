<?php
/* @var $this CompetencyCandidatesController */
/* @var $model CompetencyCandidates */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'competencycandidates-form',
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
		<?php echo $form->labelEx($model,'competency_candidates_id'); ?>
		<?php echo $form->textField($model,'competency_candidates_id'); ?>
		<?php echo $form->error($model,'competency_candidates_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'competency_grade'); ?>
		<?php echo $form->textField($model,'competency_grade'); ?>
		<?php echo $form->error($model,'competency_grade'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'years_of_experience'); ?>
		<?php echo $form->textField($model,'years_of_experience'); ?>
		<?php echo $form->error($model,'years_of_experience'); ?>
	</div>
	<div class="row">
		<?php //echo $form->labelEx($model,'competencycandidates.competency area'); ?>
		<?php //echo $form->textField($model, 'competencycandidates.competency_area'); ?>
		<?php //echo $form->error($model.competencycandidates.competency_area, 'competency_area'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->