<?php
/* @var $this CompetencyCandidatesController */
/* @var $model CompetencyCandidates */

$this->breadcrumbs=array(
	'CompetencyCandidates'=>array('index'),
	'Add',
);


?>

<h3>Add My Competency</h3>


<?php 
//$model2=new CompetencyCandidates;
/* THIS CGRIDVIEW IS NOT WORKING */
$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'competency-grid',
		'dataProvider'=>$modelcan->search(),
		'columns'=>array(
		'competency_id',
		'user_id',
		'Competency_candidates.competency_area',
		'Competency_candidates.competency_technic',
		'competency_grade',		
			//'filter'=>Country::model()->options,
		
	//'value'=>'CHtml::link($data->lastname, $this->grid->controller->createReturnableUrl("view",array("id"=>$data->id)))',
		
		//$modelcomp->find('competency_id')->competency_area,
		//$modelcan->competency_area,
		'years_of_experience',
					
		array(
			'class'=>'CButtonColumn',
		),
	),
));

?>

