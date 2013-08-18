<?php
/* @var $this CompetencyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Competencies',
);

$this->menu=array(
	array('label'=>'Create Competency', 'url'=>array('create')),
	array('label'=>'Manage Competency', 'url'=>array('admin')),
);

//echo "below this is the tree";
//var_dump($dataTree);

?>

<h1>Competencies from Jose Miguel Sanchez</h1>
<?php 
	//echo "below this is the tree";
	//var_dump($dataTree);
	$this->widget('CTreeView',array(
	        'data'=>$dataTree,
	        'animated'=>'fast', //quick animation
	        'collapsed'=>'false',//remember must giving quote for boolean value in here
	        'htmlOptions'=>array(
	                'class'=>'treeview-red',//there are some classes that ready to use
	        ),
	));
/*	
$this->widget('application.extensions.SimpleTreeWidget',array(
    'model'=>FCompetency::model()->findByPk(43),
    'modelPropertyParentId' => 'competency_id',
    'modelPropertyName' => 'competency_area',
    'ajaxUrl' => '/ajax/simpletree',
    'onSelect'=>'
        var id = data.inst.get_selected().attr("id").replace("node_","");
        $("#contentBox").load("/ajax/getContent/id/"+id);
    '
));
	*/



$data = Competency::model()->findAll(array('order'=>'competency_id'));
$this->widget('application.extensions.SimpleTreeWidget.SimpleTreeWidget',array(
    $data,
)
);
?>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
