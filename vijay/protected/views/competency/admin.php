<?php
/* @var $this CompetencyController */
/* @var $model Competency */

$this->breadcrumbs=array(
	'Competency'=>array('index'),
	'Manage',
);

echo "this is where the menu to list and  create competency should be";
$this->menu=array(
	array('label'=>'List Competency', 'url'=>array('index')),
	array('label'=>'Create Competency', 'url'=>array('create')),
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('competency-grid', {
		data: $(this).serialize()
	});
	return false;
});
");


?>

<h1>Manage My Competencies</h1>
<!-- 
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
-->

</div><!-- search-form -->
<div class="btn-toolbar">
    <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array('label'=>'Action', 'items'=>array(
                array('label'=>'Action', 'url'=>'#'),
                array('label'=>'Another action', 'url'=>'#'),
                array('label'=>'Something else', 'url'=>'#'),
                array('label'=>'Separate link', 'url'=>'#'),
            )),
        ),
    )); ?>
</div>


<?php 
$modeljm=new CompetencyCandidates;
$this->widget('bootstrap.widgets.TbGridView',  array(
	//'id'=>'competency-grid',
	'dataProvider'=>$model->search(),
		'filter'=>$model,
	//'showQuickBar'=>'true',
	//'quickCreateAction'=>'QuickCreate', // will be actionQuickCreate()
		'type'=>'striped bordered condensed',
		'template'=>"{items}\n{pager}",
		'columns'=>array(
		'competency_area',
		'competency_technic',
		'competency.years_of_experience',
		'competency.competency_grade',
		//array('header' => 'Competency Grade', 'value' => 'competency_grade'),
		array('header' => 'Competency Grade', 'value' => $modeljm->FindByPk("2")->competency_grade,
 'class' => 'zii.widgets.grid.CEditableColumn'),

		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>array(



<?php /*$this->widget('zii.widgets.grid.CEditableGridView', array(
	'id'=>'competency-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'showQuickBar'=>'true',
	'quickCreateAction'=>'QuickCreate', // will be actionQuickCreate()
	'columns'=>array(
		'competency_id',
		'competency_area',
		'competency_technic',
		'competency.years_of_experience',
		'competency.competency_grade',
	//array('header' => 'Competency Grade', 'name' => 'competency.competency_grade', 'class' => 'zii.widgets.grid.CEditableColumn'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); */?>
