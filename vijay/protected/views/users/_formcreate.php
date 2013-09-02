<?php
/* @var $this CompetencyCandidatesController */
/* @var $model CompetencyCandidates */
/* @var $form CActiveForm */
?>



<?php
/* @var $this PersonalController */
/* @var $model Personal */
/* @var $form CActiveForm */
?>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'competencycandidates-form',
	'enableAjaxValidation'=>false,
		'action'=>array('view','id'=>Yii::app()->user->id),
)); ?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php	
	if ($modelcan->isNewRecord==false) { $modelcomp=CompetencyController::model()->findByPk($modelcan->competency_id); }
	//echo $form->errorSummary(array($modelcan, $modelcomp)); 
	?>
		<?php echo $form->errorSummary(array($modelcan, $modelcomp)); ?>
		<?php //echo $form->errorSummary(array($modelcan)); 
	?>
		<div>
		<?php echo $form->labelEx($modelcomp,'competency_area'); ?>
		<?php echo $form->error($modelcomp,'competency_area'); ?>
		<?php 
			$areas = Competency::model()->findAll();
			$list = CHtml::listData($areas, 'competency_area', 'competency_area'); // <-- this last parameter is the same as the new function name above (without the 'get' part)
			//the empty parameter which is an option on the following echo does not work
			echo $form->dropDownList($modelcomp, 'competency_area', $list, array('id'=>'id_comp','prompt'=>'Select Competency'));

		ECascadeDropDown::master('id_comp')->setDependent('id_tech',array('dependentLoadingLabel'=>'Loading Technics ...'),'competencycandidates/compdata');
		?>
	</div>
	<div>
		<?php echo $form->labelEx($modelcomp,'competency_technic'); ?>
		<?php 
			$techs = Competency::model()->findAll();
			$listtechs = CHtml::listData($techs, 'competency_technic', 'competency_technic'); // <-- this last parameter is the same as the new function name above (without the 'get' part)
			echo $form->dropDownList($modelcomp, 'competency_technic', $listtechs, array('id'=>'id_tech','prompt'=>'Select Technic'));	
		?>
		<?php echo $form->error($modelcomp,'competency_technic'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($modelcan,'competency_grade'); ?>
		<?php echo $form->textField($modelcan,'competency_grade'); ?>
		<?php echo $form->error($modelcan,'competency_grade'); ?>
	</div>
	<div>
		<?php echo $form->labelEx($modelcan,'years_of_experience'); ?>
		<?php echo $form->textField($modelcan,'years_of_experience'); ?>
		<?php echo $form->error($modelcan,'years_of_experience'); ?>
	</div>
	
	
	<!--JMS THE FOLLOWING IS FOR THE FILE UPLOAD-->
	<div class="buttons">
	<?php echo CHtml::submitButton($a->isNewRecord ? 'Create' : 'Save'); ?>
<?php $this->endWidget(); ?>
</div><!-- form -->


</div><!-- form -->