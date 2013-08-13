<?php
/* @var $this CompetencyController */
/* @var $model Competency */

$this->breadcrumbs=array(
	'Competencies'=>array('index'),
	$model->competency_id,
);

$this->menu=array(
	array('label'=>'List Competency', 'url'=>array('index')),
	array('label'=>'Create Competency', 'url'=>array('create')),
	array('label'=>'Update Competency', 'url'=>array('update', 'id'=>$model->competency_id)),
	array('label'=>'Delete Competency', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->competency_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Competency', 'url'=>array('admin')),
);
?>

<h1>View Employee #<?php echo $model->competency_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'competency_id',
		'competency_area',
		'competency_technic',
	),
)); ?>
