<?php
/* @var $this CompetencyCandidatesController */
/* @var $model CompetencyCandidates */

$this->breadcrumbs=array(
	'CompetencyCandidates'=>array('index'),
	'Add',
);


?>

<h3>Add My Competency</h3>
<?php echo $this->renderPartial('_formcreate', array('modelcan'=>$modelcan,'modelcomp'=>$modelcomp)); ?>


