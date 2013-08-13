<?php
/* @var $this CompetencyController */
/* @var $model Competency */

$this->breadcrumbs=array(
	'Competency'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Competency', 'url'=>array('index')),
	array('label'=>'Manage Competency', 'url'=>array('admin')),
);
?>

<h1>Create Competency</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

