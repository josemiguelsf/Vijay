<html>
<style type="text/css">
#template{font-size:13px;font-family:Verdana, Tahoma, Arial;}
</style>
<body>
	<div align="center" style="margin:auto;">
		<table id="template" style="width:650px">
			<thead style="background-color:#263849; color:#CCCCCC;">
				<tr>
					<th scope="col" style="border-top:5px solid #5188C2; text-align:left;">
						<img src="https://qbit.com.mx/labs/celestic/images/celestic.png" alt="<?php echo $applicationName; ?>" />
					</th>
				</tr>
			</thead>
			<tfoot style="background-color:#263849; color:#CCCCCC; padding:5px;">
				<tr>
					<td id="footer" style="padding:5px;">
						<p>
							Copyright &copy; 2011 <?php echo $applicationName; ?>. Todos los derechos reservados. | <a href="<?php echo $applicationUrl; ?>/?r=site/privacy"></a>Declaraci&oacute;n de Privacidad<a>
						</p>
						<p style="font-size:11px;">
							Este mensaje y cualquier documento que lleve adjunto, es confidencial y destinado &uacute;nicamente a la persona o entidad a quien ha sido enviado. Si Usted ha recibido este mensaje por error, le informamos que el contenido en el mismo es reservado y el uso no autorizado est&aacute; prohibido legalmente, por ello, por favor, le rogamos que nos lo notifique al e-mail info@celestic.mx<br />
							Aviso: Qbit Mexhico y el equipo de <?php echo $applicationName; ?> en ning&uacute;n momento colecta informaci&oacute;n personal de sus usuarios.<br />
							No respondas a este mensaje, fue enviado utilizando un servicio autom&aacute;tico de notificaciones.
						</p>
					</td>
				</tr>
			</tfoot>
			<tbody>
				<tr>
					<td valign="top" id="maincontent" style="padding-top:15px;">
						<p><b><?php echo $userposted; ?></b> ha creado una nueva factura para el proyecto <b><?php echo $projectName; ?></b>, los detalles a continuaci&oacute;n.</p>
						<hr />
						<?php
							$this->widget('zii.widgets.CDetailView', array(
								'data'=>$model,
								'attributes'=>array(
									array(
										'name'=>'invoice_date',
										'type'=>'text',
										'value'=>CHtml::encode(Yii::app()->dateFormatter->formatDateTime($model->invoice_date, "medium", false)),
									),
									array(
										'name'=>'status_id',
										'type'=>'raw',
										'value'=>CHtml::encode($model->Status->status_name),
									),
								),
							));
						?>
						<hr />
						<p>
							Para ver m&aacute;s informaci&oacute;n sobre este presupuesto puedes ir directamente a esta direcci&oacute;n:<br />
							<a href="<?php echo $applicationUrl; ?>"><?php echo $applicationUrl; ?></a>
						</p>
						<p>
							<a href="<?php echo $applicationUrl; ?>"><?php echo $applicationName; ?> Team</a>
						</p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>
