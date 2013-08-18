<?php
/* @var $this CompetencyCandidatesController */
/* @var $model CompetencyCandidates */

$this->breadcrumbs=array(
	'CompetencyCandidates'=>array('index'),
	'Manage',
);

echo "this is where the menu to list and  create competency should be";
$this->menu=array(
	array('label'=>'List Candidates Competency', 'url'=>array('index')),
	array('label'=>'Create Candidates Competency', 'url'=>array('create')),
);




Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('competencycandidates-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Candidates Competencies</h1>
<!-- 
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
-->
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?></br>
<?php echo CHtml::link(Yii::t('users', 'ADD Competency'), Yii::app()->createUrl('competencycandidates/create',array('id'=>$model->user_id))); ?>
			
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'competency-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'competency_candidates_id',
		'competency_id',
		'user_id',
		'competency_grade',
		'years_of_experience',
					
array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
