
<?php $this->beginContent('application.views.layouts.main'); ?>

<div class="container rounded">
	<div class="row">
	<div class="span8">
		<!-- At this moment the content variable refers to the output view -->
		<?php echo $content; ?>
	</div>
	<div class="span4">
	
	<h3>Add My Competency</h3>
	<?php 
	//this doesn't work it looks like the modelcan and modelcomp are not being loaded
	$modelcan=new CompetencyCandidates;
	$modelcomp=new Competency;
	
	echo $this->renderPartial('_formcreate', array('modelcan'=>$modelcan,'modelcomp'=>$modelcomp)); ?>
	
	</div>
	</div>
	<div class="clear">&nbsp;</div>
	<?php $this->endContent(); ?>
</div>