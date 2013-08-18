<?php
/* @var $this CompetencyCandidatesController */
/* @var $model CompetencyCandidates */

$this->breadcrumbs=array(
	'CompetencyCandidates'=>array('index'),
	'Add',
);


?>

<h3>Add My Competency</h3>


<?php /*
var_dump($modelcomp->findByPk('2')->competency_area);
var_dump($modelcan->Competency_candidates->competency_area);
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'competency-grid',
	'dataProvider'=>$modelcan->search(),
	//'filter'=>$modelcan,
	'columns'=>array(
		'competency_id',
		'user_id',
		array(
			'name' => 'competency_area',
			//'class'=>'CDataColumn',
			'type' => 'raw',
			'value' =>'$modelcan->Competency_candidates[2]->competency_area',
			//'filter'=>CHtml::listData($modelcomp->findAll(), 'competency_area', 'competency_area'),
		),


		//$modelcomp->find('competency_id')->competency_area,
		//$modelcan->competency_area,
		'years_of_experience',
					
		array(
			'class'=>'CButtonColumn',
		),
	),
)); */?>

<table>
<tr>
<th>Competency ID</th>
<th>Competency Area</th>
<th>Competency Technic</th>
<th>Competency Grade</th>
<th>Years of Experience</th>
</tr>
<?php 
//var_dump($modelcan);
//die();
foreach($modelcan as $can){ 
//var_dump($can->Competency_candidates->competency_area);
//die();
?>

<tr>
<td><?php echo $can->competency_candidates_id?></td>
<td><?php echo $can->Competency_candidates->competency_area?> </td>
<td><?php echo $can->Competency_candidates->competency_technic?> </td>
<td><?php echo $can->competency_grade?> </td>
<td><?php echo $can->years_of_experience?> </td>

</tr>

<?php  }?>


</table>