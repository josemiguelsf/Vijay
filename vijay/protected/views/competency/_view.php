<?php
/* @var $this CompetencyController */
/* @var $data Competency */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('competency_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->competency_id), array('view', 'competency_id'=>$data->competency_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('competency_area')); ?>:</b>
	<?php echo CHtml::encode($data->competency_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('competency_technic')); ?>:</b>
	<?php echo CHtml::encode($data->competency_technic); ?>
	<br />
	
</div>