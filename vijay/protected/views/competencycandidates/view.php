<?php
/* @var $this CompetencyCandidatesController */
/* @var $model CandidatesCompetency */

$this->breadcrumbs=array(
	'CandidatesCompetencies'=>array('index'),
	$model->candidates_competency_id,
);

$this->menu=array(
	array('label'=>'List Candidates Competency', 'url'=>array('index')),
	array('label'=>'Create Candidates Competency', 'url'=>array('create')),
	array('label'=>'Update Candidates Competency', 'url'=>array('update', 'id'=>$model->candidates_competency_id)),
	array('label'=>'Delete Candidates Competency', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->candidates_competency_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Candidates Competency', 'url'=>array('admin')),
);
?>

<h1>View Candidates Competency #<?php echo $model->candidates_competency_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'candidates_competency_id',
		'competency_id',
		'user_id',
		'competency_grade',
		'years_of_experience',
	),
)); ?>
