<?php
/* @var $this CompetencyCandidatesController */
/* @var $model CompetencyCandidates */

$this->breadcrumbs=array(
	'CompetencyCandidates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Candidates Competency', 'url'=>array('index')),
	array('label'=>'Manage Candidates Competency', 'url'=>array('admin')),
);
?>

<h1>Create Candidates Competency</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

