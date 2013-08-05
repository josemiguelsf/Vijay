<?php
$this->breadcrumbs=array(
	Yii::t('configuration', 'TitleConfiguration'),
);
?>

<div class="portlet x12">
	<div class="portlet-headerxxx">
		<div class="portlet-titlexxxx"><?php //echo Yii::t('configuration', 'AccountOptionsAdministration'); ?></div>
	</div>
	<div class="portlet-content">
		<div style="padding-bottom:25px;">
			<h3 style="font-size: 13px; font-weight:bold;"><?php echo Yii::t('configuration', 'AccountPreferences'); ?></h3>
			<ul style="margin-left: 20px;">
				<li>    
					<a class="icon-menu corners" href="<?php echo Yii::app()->createUrl('companies'); ?>">
						<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/icons/companies.png"); ?>
						<span><?php echo Yii::t('configuration', 'Company'); ?></span>
					</a>
				</li> 
				<li>                      
					<a class="icon-menu corners" href="<?php echo Yii::app()->createUrl('users'); ?>">
						<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/icons/users.png"); ?>
						<span><?php echo Yii::t('configuration', 'Users'); ?></span>
					</a>
				</li>
				<li>
					<a class="icon-menu corners" href="<?php echo Yii::app()->createUrl('clients'); ?>">
						<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/icons/clients.png"); ?>
						<span><?php echo Yii::t('configuration', 'Candidates'); ?></span>
					</a>
				</li>   
				<li>
					<a class="icon-menuxx cornersxx" href="<?php //echo Yii::app()->createUrl('configuration/account'); ?>">
						<?php //echo CHtml::image(Yii::app()->request->baseUrl."/images/icons/layout.png"); ?>
						<span><?php //echo Yii::t('configuration', 'Account'); ?></span>
					</a>
				</li>
				<li>                      
					<a class="icon-menu corners" href="<?php  echo Yii::app()->createUrl('configuration/usersPermissions'); ?>">
						<?php echo CHtml::image(Yii::app()->request->baseUrl."/images/icons/permissions.png"); ?>
						<span><?php echo Yii::t('configuration', 'Permissions'); ?></span>
					</a>
				</li>
				
				 
				
				<li>                      
					<a class="icon-menuxxxx cornersxxxx" href="<?php //echo Yii::app()->createUrl('configuration/localization'); ?>">
						<?php //echo CHtml::image(Yii::app()->request->baseUrl."/images/icons/time.png"); ?>
						<span><?php //echo Yii::t('configuration', 'Localization'); ?></span>
					</a>
				</li>
				<li>                      
					<a class="icon-menuxxx cornersxxx" href="<?php //echo Yii::app()->createUrl('configuration/projects'); ?>">
						<?php //echo CHtml::image(Yii::app()->request->baseUrl."/images/icons/projects.png"); ?>
						<span><?php //echo Yii::t('configuration', 'Projects'); ?></span>
					</a>
				</li>
			</ul>
			<div class="clear"></div>
		</div>
		
		
	</div>
</div>