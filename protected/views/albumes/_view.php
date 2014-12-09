<?php
/* @var $this AlbumesController */
/* @var $data Albumes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idalbumes')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idalbumes), array('view', 'id'=>$data->idalbumes)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano')); ?>:</b>
	<?php echo CHtml::encode($data->ano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('portada')); ?>:</b>
	<?php echo CHtml::encode($data->portada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />


</div>