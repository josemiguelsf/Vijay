
<?php $this->pageTitle = Yii::app()->name." - Human Resource Manager"; ?>

<?php
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableAjaxValidation'=>false,
	'action' => Yii::app()->createUrl("site/index")
));
?>

	<div class="input-module box">
		<div class="field">
			<h4><?php echo $form->labelEx($model,'username'); ?></h4>
			<span class="input over"><?php echo $form->textField($model,'username', array('class'=>'username betterform','tabindex'=>1)); ?></span>
			<?php echo $form->error($model,'username',array('class'=>'errorMessage labelhelper')); ?>
		</div>
		<div class="field last button" id="but">
			<h4><?php echo $form->labelEx($model,'password'); ?></h4>
			<span class="input"><?php echo $form->passwordField($model,'password', array('class'=>'password betterform','tabindex'=>2)); ?>
						
			<?php echo $form->error($model,'password',array('class'=>'errorMessage labelhelper')); ?>
		</div>
	
	</div>
	<div class="buttons">
		<div class="loginbutton">
		<?php echo CHtml::button(Yii::t('site','Login'), array('type'=>'submit', 'class'=>'button big primary','tabindex'=>4)); ?>
		<?php //if(Yii::app()->params['multiplesAccounts']): ?>
		</div>		
		<?php echo CHtml::ajaxlink(Yii::t('site', 'ForgottenPassword'), Yii::app()->controller->createUrl("site/recover"),array( 'update'=>'#forgotpass')); ?>
		
		<div class="newapplicantbutton" >
			<?php //echo CHtml::link(Yii::t('site','newApplicant'), Yii::app()->createUrl('site/contact')); ?>
		<?php echo CHtml::link(Yii::t('site','newApplicant'),
                          Yii::app()->controller->createUrl("site/newapplicant"));?>
		</div>
		<?php // endif; ?>
	</div>
	
<?php $this->endWidget(); ?>
<p style="border-top:1px solid #ccc; margin-top:5px;">
	<span class="corners"><?php //echo Yii::app()->name; ?> <?php //echo Yii::t('site','VJExplanation'); ?></span>
</p>

			
			
			<div id="forgotpass" >
			
			
			</div>
 
 

