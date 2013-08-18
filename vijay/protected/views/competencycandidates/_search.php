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
		<?php echo $form->label($modelcan,'competency_candidates_id'); ?>
		<?php echo $form->textField($modelcan,'competency_candidates_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($modelcan,'user_id'); ?>
		<?php echo $form->textField($modelcan,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($modelcan,'competency_id'); ?>
		<?php echo $form->textField($modelcan,'competency_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($modelcan,'competency_grade'); ?>
		<?php echo $form->textField($modelcan,'competency_grade'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($modelcan,'years_of_experience'); ?>
		<?php echo $form->textField($modelcan,'years_of_experience'); ?>
	</div>
		<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->