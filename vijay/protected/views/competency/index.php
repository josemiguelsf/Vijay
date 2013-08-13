<?php
/* @var $this CompetencyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Competencies',
);

$this->menu=array(
	array('label'=>'Create Competency', 'url'=>array('create')),
	array('label'=>'Manage Competency', 'url'=>array('admin')),
);
?>

<h1>Competencies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
