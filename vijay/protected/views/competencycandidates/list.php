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

$this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'competency-grid',
		'dataProvider'=>$modelcomp->search(),
		'columns'=>array(
		'competency_id',
		'competency.competency_candidates_id',
		'competency.user_id',
		'competency_area',
		'competency_technic',
		'competency.competency_grade',		
			//'filter'=>Country::model()->options,
		
	//'value'=>'CHtml::link($data->lastname, $this->grid->controller->createReturnableUrl("view",array("id"=>$data->id)))',
		
		//$modelcomp->find('competency_id')->competency_area,
		//$modelcan->competency_area,
		'competency.years_of_experience',
					
		array(
			'class'=>'CButtonColumn',
			'buttons'=>array(
				'update'=>array(
						'url'=>'Yii::app()->createUrl("CompetencyCandidates/Update",array("id"=>$data->competency->competency_candidates_id, "compgrade"=>$data->competency->competency_grade))',
                	),
			),
		),
),
)
				
);

?>

