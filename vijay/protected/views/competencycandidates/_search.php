<?php
/* @var $this CompetencyCandidatesController */
/* @var $model CompetencyCandidates */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'competency_candidates_id'); ?>
		<?php echo $form->textField($model,'competency_candidates_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'competency_id'); ?>
		<?php echo $form->textField($model,'competency_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'competency_grade'); ?>
		<?php echo $form->textField($model,'competency_grade'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'years_of_experience'); ?>
		<?php echo $form->textField($model,'years_of_experience'); ?>
	</div>
		<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->