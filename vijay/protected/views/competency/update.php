<?php
/* @var $this CompetencyController */
/* @var $model Competency */

$this->breadcrumbs=array(
	'Competencies'=>array('index'),
	$model->competency_id=>array('view','id'=>$model->competency_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Competencies', 'url'=>array('index')),
	array('label'=>'Create Competency', 'url'=>array('create')),
	array('label'=>'View Competency', 'url'=>array('view', 'id'=>$model->competency_id)),
	array('label'=>'Manage Competency', 'url'=>array('admin')),
);
?>

<h1>Update Competency <?php echo $model->competency_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>