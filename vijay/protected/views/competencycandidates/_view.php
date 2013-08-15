<?php
/* @var $this CompetencyCandidatesController */
/* @var $data CompetencyCandidates */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('competency_candidates_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->competency_candidates_id), array('view', 'competency_candidates_id'=>$data->competency_candidates_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('competency_id')); ?>:</b>
	<?php echo CHtml::encode($data->competency_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('competency_grade')); ?>:</b>
	<?php echo CHtml::encode($data->competency_grade); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('years_of_experience')); ?>:</b>
	<?php echo CHtml::encode($data->years_of_experience); ?>
	<br />
</div>