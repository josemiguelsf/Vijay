

<?php $this->pageTitle = Yii::app()->name . ' - '.Yii::t('site','ForgottenPassword'); ;?>
<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModalPass')); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Let us know your Email Address</h4>
</div>
 
<div class="modal-body">
    <p>One fine body...</p>


<h2 class="login">
	<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/images/celestixxxxc.png",CHtml::encode(Yii::app()->name).' v.'.Yii::app()->params['appVersion']), Yii::app()->createUrl('site/index')); ?>
</h2>
<h3><?php echo Yii::t('site','ForgottenPassword'); ?></h3>
<p>
	<?php echo Yii::t('site','restorePassword'); ?>
</p>
<?php if(Yii::app()->user->hasFlash('PasswordSuccessChanged')):?>
    <div class="info notification_success" id="CommentMessage">
        <?php echo Yii::app()->user->getFlash('PasswordSuccessChanged'); ?>
    </div><br />
<?php endif;
?>
<?php if(Yii::app()->user->hasFlash('EmailDoesNotExist')):?>
    <div class="info notification_success" id="CommentMessage">
        <?php echo Yii::app()->user->getFlash('EmailDoesNotExist'); ?>
    </div><br />
<?php endif; ?>
<?php
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'user-recover-form',
		'enableAjaxValidation'=>false,
		'action' => Yii::app()->createUrl("site/recover")
	));
?>
	<div class="input-module box" style="height:100px;">
		<div class="field last">
			<h4><?php echo $form->labelEx($model,'user_email'); ?></h4>
			<span class="input over"><?php echo $form->textField($model,'user_email', array('class'=>'betterform','tabindex'=>1)); ?></span>
			<?php echo $form->error($model,'user_email'); ?>
		</div>
	</div>
	<div class="buttons">
		<?php echo CHtml::button(Yii::t('site','send'), array('type'=>'submit', 'class'=>'button big primary','tabindex'=>2)); ?>
		<?php //echo CHtml::SubmitButton('submit', $this->createUrl('/site/recover'));?>
	</div>
<?php $this->endWidget(); ?>
</div>

<div class="modal-footer">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'label'=>'Save changes',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Close',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
</div>
 
<?php $this->endWidget(); ?>
 <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
  
     <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
      $('#myModalPass').modal();
         	
      
    </script>
    <div id="myModalPass"></div>