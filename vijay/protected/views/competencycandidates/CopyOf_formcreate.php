
<?php
/* @var $this CompetencyCandidatesController */
/* @var $model CompetencyCandidates */
/* @var $form CActiveForm */
?>

<div class="form">

<?php
/* @var $this PersonalController */
/* @var $model Personal */
/* @var $form CActiveForm */
?>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'competencycandidates-form',
	'enableAjaxValidation'=>false,
)); ?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php	
	if ($modelcan->isNewRecord==false) { $modelcomp=CompetencyController::model()->findByPk($modelcan->competency_id); }
	//echo $form->errorSummary(array($modelcan, $modelcomp)); 
	?>
		<?php echo $form->errorSummary(array($modelcan, $modelcomp)); ?>
		<?php //echo $form->errorSummary(array($modelcan)); 
	?>
		<div class="row">
		<?php echo $form->labelEx($modelcomp,'competency_area'); ?>
		<?php 
			$areas = Competency::model()->findAll();
			$list = CHtml::listData($areas, 'competency_area', 'CompetencyArea'); // <-- this last parameter is the same as the new function name above (without the 'get' part)
			//the empty parameter which is an option on the following echo does not work
			echo $form->dropDownList($modelcomp, 'competency_area', $list, array(
				'ajax' => array(
				'type'=>'POST', //request type
				'url'=>CController::createUrl('dynamictechnics'), //url to call.
				//Style: CController::createUrl('currentController/methodToCall')
				'update'=>'#city'), //selector to update
				//'data'=>array('competency_id'=>'js.this.value'),
				//leave out the data key to pass all form values through);
				));
		?>
		<?php echo $form->error($modelcomp,'competency_area'); ?>	
	</div>
		<p>the following is before the update</p>
		<?php //echo CHtml::dropDownList('city_id','', array());?>
	<?php echo CHtml::dropDownList('city','', array(), array('prompt'=>'Select City'));?>
	<p>the following is after the update</p>
	<div class="row">
		<?php echo $form->labelEx($modelcomp,'competency_technic'); ?>
		<?php echo $form->dropDownList($modelcomp,'competency_id', CHtml::listData(Competency::model()->findAll(array('order' => 'competency_area')),'competency_id','competency_technic')
		)?>
		<?php echo $form->error($modelcomp,'competency_technic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($modelcan,'competency_grade'); ?>
		<?php echo $form->textField($modelcan,'competency_grade'); ?>
		<?php echo $form->error($modelcan,'competency_grade'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($modelcan,'years_of_experience'); ?>
		<?php echo $form->textField($modelcan,'years_of_experience'); ?>
		<?php echo $form->error($modelcan,'years_of_experience'); ?>
	</div>
	<?php                                   
  echo CHtml::dropDownList('region_id','', 
  array(2=>'New England',1=>'Middle Atlantic',7=>'East North Central'),
 
  array(
    'prompt'=>'Select Region',
    'ajax' => array(
    'type'=>'POST', 

    'url'=> CController::createUrl('loadcities'),

    //'url'=>CController::createUrl('CompetencyCandidates/loadcities'),
    'update'=>'#city_name', 
//it doesn't work if I use update instead of replace and also does not like the data code below
  //'data'=>array('region_id'=>'js:this.value'),
  ))); 
 

echo CHtml::dropDownList('city_name','', array(), array('prompt'=>'Select City'));
?>
"==========================================================================="
			<?php echo $form->labelEx($modelcomp,'competency_area'); ?>
		<?php 
			$areas = Competency::model()->findAll();
			$list = CHtml::listData($areas, 'competency_area', 'CompetencyArea'); // <-- this last parameter is the same as the new function name above (without the 'get' part)
			//the empty parameter which is an option on the following echo does not work
			//echo $form->dropDownList($modelcomp, 'competency_area', $list, 
			echo CHtml::dropDownList('region_id','',$list,
				array('prompt'=>'Select Competency Area',
				'ajax' => array(
				'type'=>'POST', //request type
				'url'=>CController::createUrl('dynamictechnics'), //url to call.
				//Style: CController::createUrl('currentController/methodToCall')
				'update'=>'#citycomp'), //selector to update
				//'data'=>array('competency_id'=>'js.this.value'),
				//leave out the data key to pass all form values through);
				));
		?>
		<?php echo $form->error($modelcomp,'competency_area'); ?>	

		
	<?php echo CHtml::dropDownList('citycomp','', array(), array('prompt'=>'Select City'));?>
	
=====================================================================================
 
	
	
	<!--JMS THE FOLLOWING IS FOR THE FILE UPLOAD-->
	<div class="row buttons">
	<?php echo CHtml::submitButton($a->isNewRecord ? 'Create' : 'Save'); ?>
<?php $this->endWidget(); ?>
</div>
</div><!-- form -->


<?php /* $form=$this->beginWidget('CActiveForm', array(
	'id'=>'competencycandidates-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'competency_candidates_id'); ?>
		<?php echo $form->textField($model,'competency_candidates_id'); ?>
		<?php echo $form->error($model,'competency_candidates_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'competency_id'); ?>
		<?php echo $form->textField($model,'competency_id'); ?>
		<?php echo $form->error($model,'competency_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'competency_grade'); ?>
		<?php echo $form->textField($model,'competency_grade'); ?>
		<?php echo $form->error($model,'competency_grade'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'years_of_experience'); ?>
		<?php echo $form->textField($model,'years_of_experience'); ?>
		<?php echo $form->error($model,'years_of_experience'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); */ ?>

</div><!-- form -->