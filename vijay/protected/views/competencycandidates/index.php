<?php
/* @var $this CompetencyCandidatesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Candidates Competencies',
);

$this->menu=array(
	array('label'=>'Create Candidates Competency', 'url'=>array('create')),
	array('label'=>'Manage Candidates Competency', 'url'=>array('admin')),
);
?>

<h1>Candidates Competencies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
