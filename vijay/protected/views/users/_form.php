<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo Yii::t('users','FieldsRequired'); ?>
	
	<?php
	if (!$model->isNewRecord && !$allowEdit)
		echo CHtml::tag("div", array('class'=>'notification_warning'),Yii::t('users', 'NowAllowedToEdit'));
	?>

	<?php echo $form->errorSummary($model,null,null,array('class'=>'errorSummary stick'))."<br />"; ?>
	
	<fieldset>
		<legend style="font-weight:bold"><?php echo Yii::t('users','PersonalInformation'); ?></legend>
		<div class="subcolumns">
			<div class="c50l">
				<div class="row">
					<?php echo $form->labelEx($model,'user_name'); ?>
					<span>
						<?php
							echo $form->textField($model,'user_name',array('class'=>'betterform','style'=>'width:95%','maxlength'=>45,'tabindex'=>1,'disabled'=>!$allowEdit));
							echo CHtml::label(Yii::t('users','FieldName'), CHtml::activeId($model, 'user_name'), array('class'=>'labelhelper'));
						?>
					</span>				
				</div>
				<div class="row">
					<?php echo $form->labelEx($model,'user_email'); ?>
					<span>
						<?php
							echo $form->textField($model,'user_email',array('class'=>'betterform','style'=>'width:95%','maxlength'=>45,'tabindex'=>3,'disabled'=>!$allowEdit));
							echo CHtml::label(Yii::t('users','FieldEmail'), CHtml::activeId($model, 'user_email'), array('class'=>'labelhelper'));
						?>
					</span>
				</div>
				<div class="row">
					<?php echo $form->labelEx($model,'user_password'); ?>
					<span>
						<?php
							echo $form->passwordField($model,'user_password',array('value'=>'','class'=>'betterform','style'=>'width:95%','maxlength'=>20,'tabindex'=>5,'disabled'=>(!$model->isNewRecord)));
						?>
						<?php 
							if(!$model->isNewRecord) echo CHtml::label(CHtml::link(Yii::t('users','FieldPasswordUnlock'),'#',array('class'=>'unlock')), CHtml::activeId($model, 'user_password'), array('class'=>'labelhelper'));
						?>
					</span>
				</div>
				
				<?php if ($userManager) { ?>
				<div class="row">
					<?php echo $form->labelEx($model,'user_active'); ?>
					<span>
						<?php
							echo $form->dropDownList($model,'user_active',array("1"=>Yii::t('site', 'yes'),"0"=>Yii::t('site', 'no')),array('class'=>'betterform','empty'=>Yii::t('users', 'selectOption'),'style'=>'width:95%','tabindex'=>7,'disabled'=>!$allowEdit));
							echo CHtml::label(Yii::t('users','FieldActive'), CHtml::activeId($model, 'user_active'), array('class'=>'labelhelper'));
						?>
					</span>
				</div>
				<?php } ?>
			</div>
			<div class="c50r">
				<div class="row">
					<?php echo $form->labelEx($model,'user_lastname'); ?>
					<span>
						<?php
							echo $form->textField($model,'user_lastname',array('class'=>'betterform','style'=>'width:95%','maxlength'=>45,'tabindex'=>2,'disabled'=>!$allowEdit));
							echo CHtml::label(Yii::t('users','FieldLastname'), CHtml::activeId($model, 'user_lastname'), array('class'=>'labelhelper'));
						?>
					</span>
				</div>			
				<div class="row">
					<?php echo $form->labelEx($model,'user_phone'); ?>
					<span>
						<?php
							echo $form->textField($model,'user_phone',array('class'=>'betterform','style'=>'width:95%','maxlength'=>30,'tabindex'=>4,'disabled'=>!$allowEdit));
							echo CHtml::label(Yii::t('users','FieldPhone'), CHtml::activeId($model, 'user_phone'), array('class'=>'labelhelper'));
						?>
					</span>
				</div>
				<?php if ($userManager) { ?>
				<div class="row">
					<?php echo $form->labelEx($model,'user_admin'); ?>
					<span>
						<?php
							echo $form->dropDownList($model,'user_admin',array("0"=>Yii::t('site', 'no'),"1"=>Yii::t('site', 'yes')),array('class'=>'betterform','style'=>'width:95%','tabindex'=>6,'disabled'=>!$allowEdit));
							echo CHtml::label(Yii::t('users','FieldIsAdmin'), CHtml::activeId($model, 'user_admin'), array('class'=>'labelhelper'));
						?>
					</span>
				</div>
				<?php } ?>
				
				<div class="row">
      				  <?php echo $form->labelEx($model,'image'); ?>
       				 <?php echo CHtml::activeFileField($model, 'image'); ?>  
      				 <?php echo $form->error($model,'image'); ?>
				</div>
	<div class="row">
				</div>
				
			</div>
		</div>
	</fieldset>
	
	<fieldset>
		<legend style="font-weight:bold"><?php echo Yii::t('users','AddressSettings'); ?></legend>
		<div class="subcolumns">
			<div class="c50l">
				<div class="row">
					<?php echo $form->labelEx($address,'address_text'); ?>
					<span>
						<?php
							echo $form->textField($address,'address_text',array('class'=>'betterform','tabindex'=>8,'style'=>'width:95%','disabled'=>!$allowEdit));
							echo CHtml::label(Yii::t('address','FormAddressText'), CHtml::activeId($address, 'address_text'), array('class'=>'labelhelper'));
						?>
					</span>
				</div>
				
				
				<div class="row">
					<?php echo $form->labelEx($country,'country_id'); ?>
					<span>
						<?php
							$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
								'name'=>'country_name', 
								'source'=>$this->createUrl('configuration/ProviderSearchCountry'),
								'value'=>isset($city->Country->country_name) ? $city->Country->country_name : '',
								'options'=>array(
									'showAnim'=>'fold',
									'select'=>"js:function(event, ui) {
										$('#".CHtml::activeId($country, 'country_id')."').val(ui.item.id);
										$('#country_name').val(ui.item.label);
										return false;
									}",




								),
								'htmlOptions'=>array(
									'class'=>'betterform',
									'style'=>'width:95%',
									'maxlength'=>45,
									'tabindex'=>12,
									'disabled'=>!$allowEdit
								),
							));
							echo CHtml::label(Yii::t('address','FormAddressCity'), 'city_name', array('class'=>'labelhelper'));
							echo $form->hiddenField($address,'city_id');
						?>
					</span>
				</div>
				<div class="row">
					<?php echo $form->labelEx($address,'city_id'); ?>
					<span>
						<?php
							$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
								'name'=>'city_name', 
								'source'=>$this->createUrl('configuration/ProviderSearch'),
								'value'=>isset($address->City->city_name) ? $address->City->city_name : '',
								'options'=>array(
									'showAnim'=>'fold',
									'select'=>"js:function(event, ui) {
										$('#".CHtml::activeId($address, 'city_id')."').val(ui.item.id);
										$('#city_name').val(ui.item.label);
										return false;
									}",
								),
								'htmlOptions'=>array(
									'class'=>'betterform',
									'style'=>'width:95%',
									'maxlength'=>45,
									'tabindex'=>12,
									'disabled'=>!$allowEdit
								),
							));
							echo CHtml::label(Yii::t('address','FormAddressCity'), 'city_name', array('class'=>'labelhelper'));
							echo $form->hiddenField($address,'city_id');
						?>
					</span>
				</div>
				<div class="row">
					<?php echo $form->labelEx($address,'address_phone'); ?>
					<span>
						<?php
							echo $form->textField($address,'address_phone',array('class'=>'betterform','tabindex'=>10,'style'=>'width:95%','disabled'=>!$allowEdit));
							echo CHtml::label(Yii::t('address','FormAddressPhone'), CHtml::activeId($address, 'address_phone'), array('class'=>'labelhelper'));
						?>
					</span>
				</div>
			</div>
			<div class="c50r">
				<div class="row">
					<?php echo $form->labelEx($address,'address_postalCode'); ?>
					<span>
						<?php
							echo $form->textField($address,'address_postalCode',array('class'=>'betterform','tabindex'=>9,'style'=>'width:95%','disabled'=>!$allowEdit));
							echo CHtml::label(Yii::t('address','FormAddressPostalCode'), CHtml::activeId($address, 'address_postalCode'), array('class'=>'labelhelper'));
						?>
					</span>
				</div>
				<div class="row">
					<?php echo $form->labelEx($address,'address_web'); ?>
					<span>
						<?php
							echo $form->textField($address,'address_web',array('class'=>'betterform','tabindex'=>11,'style'=>'width:95%','disabled'=>!$allowEdit));
							echo CHtml::label(Yii::t('address','FormAddressWeb'), CHtml::activeId($address, 'address_web'), array('class'=>'labelhelper'));
						?>
					</span>
				</div>
			</div>
		</div>
	</fieldset>

	<div class="row buttons subcolumns">
		<div class="c50l">
			<?php echo CHtml::button($model->isNewRecord ? Yii::t('site','create') : Yii::t('site','save'), array('type'=>'submit', 'class'=>'button big primary','tabindex'=>13,'disabled'=>!$allowEdit)); ?>
			<?php echo CHtml::button(Yii::t('site','reset'), array('type'=>'reset', 'class'=>'button big','tabindex'=>14,'disabled'=>!$allowEdit)); ?>
		</div>
		<div class="c50r" style="text-align:right;">
			<?php echo CHtml::link(Yii::t('site','return'), Yii::app()->request->getUrlReferrer(), array('class'=>'button')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php
Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScript('jQueryUnblock',"
	$('.unlock').click(function(e) {
		e.preventDefault();
		var el = $(this).parent().prev();
		(el.attr('disabled') == 'disabled') ? el.removeAttr('disabled').next().children(':first').text('".Yii::t('users','FieldPasswordLock')."') : el.attr('disabled','disabled').next().children(':first').text('".Yii::t('users','FieldPasswordUnlock')."');
	});
");
?>
