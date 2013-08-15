<?php
/* @var $this CompetencyCandidatesController */
/* @var $model CompetencyCandidates */

$this->breadcrumbs=array(
	'CandidatesCompetencies'=>array('index'),
	$model->competency_candidates_id=>array('view','id'=>$model->competency_candidates_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Candidates Competencies', 'url'=>array('index')),
	array('label'=>'Create Candidates Competency', 'url'=>array('create')),
	array('label'=>'View Candidates Competency', 'url'=>array('view', 'id'=>$model->competency_candidates_id)),
	array('label'=>'Manage Candidates Competency', 'url'=>array('admin')),
);
?>

<h1>Update Candidates Competency <?php echo $model->competency_candidates_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>