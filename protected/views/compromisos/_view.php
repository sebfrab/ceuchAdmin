<?php
/* @var $this CompromisosController */
/* @var $data Compromisos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcompromisos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcompromisos), array('view', 'id'=>$data->idcompromisos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuerpo')); ?>:</b>
	<?php echo CHtml::encode($data->cuerpo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />


</div>