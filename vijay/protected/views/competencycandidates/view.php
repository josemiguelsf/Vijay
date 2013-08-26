<?php
/* @var $this CompetencyCandidatesController */
/* @var $model CandidatesCompetency */

$this->breadcrumbs=array(
	'CandidatesCompetencies'=>array('index'),
	$model->competency_candidates_id,
);

$this->menu=array(
	array('label'=>'List Candidates Competency', 'url'=>array('index')),
	array('label'=>'Create Candidates Competency', 'url'=>array('create')),
	array('label'=>'Update Candidates Competency', 'url'=>array('update', 'id'=>$model->competency_candidates_id)),
	array('label'=>'Delete Candidates Competency', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->competency_candidates_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Candidates Competency', 'url'=>array('admin')),
);
?>

<h1>View Candidates Competency #<?php echo $model->competency_candidates_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'competency_candidates_id',
		'competency_id',
		'user_id',
		'competency_grade',
		'years_of_experience',
	),
)); ?>
